<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Towing Service Configuration
    |--------------------------------------------------------------------------
    |
    | Configure pricing and service area settings for the towing service.
    |
    */

    'pricing' => [
        'hook_fee' => 140.00, // Base fee for hooking up the vehicle
        'per_mile' => 6.00,  // Cost per mile
        'minimum_charge' => 140.00, // Minimum service charge
    ],

    'service_area' => [
        'max_pickup_distance' => 100, // Miles from Spokane center - covers Kettle Falls, Sandpoint, etc.
        'center_lat' => 47.6588, // Spokane latitude
        'center_lng' => -117.4260, // Spokane longitude
    ],

    'google_maps' => [
        'api_key' => env('GOOGLE_MAPS_API_KEY', ''),
    ],
];