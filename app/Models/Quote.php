<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Quote extends Model
{
    protected $fillable = [
        'uuid',
        'quote_number',
        'from_address',
        'to_address',
        'distance',
        'duration',
        'hook_fee',
        'mileage_charge',
        'total',
        'is_minimum',
        'customer_name',
        'customer_phone',
        'customer_email',
        'home_address',
        'vehicle_year',
        'vehicle_make',
        'vehicle_model',
        'problem',
        'problem_other',
        'status',
        'quoted_at',
        'booked_at',
        'confirmed_at',
        'paid_at',
        'dispatched_at',
        'en_route_at',
        'arrived_at',
        'completed_at',
        'cancelled_at',
        'driver_name',
        'truck_number',
        'notes',
        'amount_paid',
        'payment_method',
        'transaction_id',
    ];

    protected $casts = [
        'is_minimum' => 'boolean',
        'distance' => 'decimal:2',
        'hook_fee' => 'decimal:2',
        'mileage_charge' => 'decimal:2',
        'total' => 'decimal:2',
        'amount_paid' => 'decimal:2',
        'quoted_at' => 'datetime',
        'booked_at' => 'datetime',
        'confirmed_at' => 'datetime',
        'paid_at' => 'datetime',
        'dispatched_at' => 'datetime',
        'en_route_at' => 'datetime',
        'arrived_at' => 'datetime',
        'completed_at' => 'datetime',
        'cancelled_at' => 'datetime',
    ];

    /**
     * Boot function to handle model events
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($quote) {
            // Generate UUID if not provided
            if (empty($quote->uuid)) {
                $quote->uuid = Str::uuid();
            }
            
            // Generate short quote number if not provided
            if (empty($quote->quote_number)) {
                $quote->quote_number = self::generateQuoteNumber();
            }
        });
    }

    /**
     * Generate a unique short quote number
     */
    public static function generateQuoteNumber(): string
    {
        do {
            // Format: TW-XXXXXX (TW for Towing, followed by 6 alphanumeric characters)
            $number = 'TW-' . strtoupper(Str::random(6));
        } while (self::where('quote_number', $number)->exists());

        return $number;
    }

    /**
     * Get the route key for the model (use UUID for URLs)
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * Scope to filter quotes by status
     */
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Scope to get recent quotes
     */
    public function scopeRecent($query)
    {
        return $query->orderBy('quoted_at', 'desc');
    }

    /**
     * Update status with timestamp
     */
    public function updateStatus($status)
    {
        $this->status = $status;
        
        // Set the appropriate timestamp
        $timestampField = $status . '_at';
        if (in_array($timestampField, ['booked_at', 'confirmed_at', 'paid_at', 'dispatched_at', 'en_route_at', 'arrived_at', 'completed_at', 'cancelled_at'])) {
            $this->$timestampField = now();
        }
        
        return $this->save();
    }
}
