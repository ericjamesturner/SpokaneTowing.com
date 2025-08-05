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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            
            // Quote details
            $table->uuid('uuid')->unique(); // UUID for customer-facing URLs
            $table->string('quote_number', 10)->unique(); // Short ID for customer reference (e.g., "TW-A3B2C1")
            $table->string('from_address');
            $table->string('to_address');
            $table->decimal('distance', 8, 2);
            $table->integer('duration'); // in minutes
            $table->decimal('hook_fee', 8, 2);
            $table->decimal('mileage_charge', 8, 2);
            $table->decimal('total', 8, 2);
            $table->boolean('is_minimum')->default(false);
            
            // Customer information
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('home_address')->nullable();
            
            // Vehicle information
            $table->string('vehicle_year')->nullable();
            $table->string('vehicle_make')->nullable();
            $table->string('vehicle_model')->nullable();
            $table->string('problem')->nullable();
            $table->text('problem_other')->nullable();
            
            // Status tracking
            $table->enum('status', ['quoted', 'booked', 'confirmed', 'dispatched', 'en_route', 'arrived', 'completed', 'cancelled'])->default('quoted');
            
            // Timestamps for tracking
            $table->timestamp('quoted_at')->useCurrent();
            $table->timestamp('booked_at')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('dispatched_at')->nullable();
            $table->timestamp('en_route_at')->nullable();
            $table->timestamp('arrived_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            
            // Additional tracking info
            $table->string('driver_name')->nullable();
            $table->string('truck_number')->nullable();
            $table->text('notes')->nullable();
            
            // Payment info
            $table->decimal('amount_paid', 8, 2)->nullable();
            $table->string('payment_method')->nullable();
            $table->string('transaction_id')->nullable();
            
            $table->timestamps();
            
            // Indexes for performance
            $table->index('uuid');
            $table->index('quote_number');
            $table->index('customer_phone');
            $table->index('status');
            $table->index('quoted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
