<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('quotes', function (Blueprint $table) {
            // Modify the status enum to include 'booking'
            $table->enum('status', ['quoted', 'booking', 'booked', 'confirmed', 'dispatched', 'en_route', 'arrived', 'completed', 'cancelled'])
                ->default('quoted')
                ->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quotes', function (Blueprint $table) {
            $table->enum('status', ['quoted', 'booked', 'confirmed', 'dispatched', 'en_route', 'arrived', 'completed', 'cancelled'])
                ->default('quoted')
                ->change();
        });
    }
};