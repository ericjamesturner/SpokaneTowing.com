<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class GenerateImage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:image
                            {prompt : The text prompt describing the image to generate}
                            {--filename= : Custom filename (without extension)}
                            {--size=1536x1024 : Image size (1024x1024, 1536x1024, 1024x1536, auto)}
                            {--quality=high : Image quality (low, medium, high)}
                            {--no-save : Generate without saving to disk}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate an image using OpenAI\'s gpt-image-1 API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $prompt = $this->argument('prompt');
        $filename = $this->option('filename');
        $size = $this->option('size');
        $quality = $this->option('quality');
        $noSave = $this->option('no-save');

        $apiKey = env('OPENAI_API_KEY');

        if (empty($apiKey)) {
            $this->error('OPENAI_API_KEY is not set in your .env file');
            return 1;
        }

        // Validate size
        $validSizes = ['1024x1024', '1536x1024', '1024x1536', 'auto'];
        if (!in_array($size, $validSizes)) {
            $this->error('Invalid size. Valid options: ' . implode(', ', $validSizes));
            return 1;
        }

        // Validate quality
        $validQualities = ['low', 'medium', 'high'];
        if (!in_array($quality, $validQualities)) {
            $this->error('Invalid quality. Valid options: ' . implode(', ', $validQualities));
            return 1;
        }

        $this->info('Generating image...');
        $this->line("Prompt: {$prompt}");
        $this->line("Size: {$size}");
        $this->line("Quality: {$quality}");

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ])->timeout(120)->post('https://api.openai.com/v1/images/generations', [
                'model' => 'gpt-image-1',
                'prompt' => $prompt,
                'n' => 1,
                'size' => $size,
                'quality' => $quality,
            ]);

            if ($response->failed()) {
                $this->error('API request failed: ' . $response->body());
                return 1;
            }

            $data = $response->json();

            if (!isset($data['data'][0]['b64_json'])) {
                $this->error('Unexpected API response format');
                $this->line(json_encode($data, JSON_PRETTY_PRINT));
                return 1;
            }

            $imageData = base64_decode($data['data'][0]['b64_json']);

            $this->info('Image generated successfully!');

            if ($noSave) {
                $this->info('--no-save flag set, skipping file save');
                return 0;
            }

            // Generate filename if not provided
            if (empty($filename)) {
                $filename = 'generated-' . Str::slug(Str::limit($prompt, 30)) . '-' . time();
            }

            $filepath = public_path($filename . '.png');

            file_put_contents($filepath, $imageData);

            $this->info("Image saved to: {$filepath}");
            $this->line("Public URL: /{$filename}.png");

            return 0;
        } catch (\Exception $e) {
            $this->error('Error: ' . $e->getMessage());
            return 1;
        }
    }
}
