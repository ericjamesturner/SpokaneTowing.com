<div wire:poll>
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-zinc-100">Quotes</h1>
        <p class="text-gray-600 dark:text-zinc-400">Manage and track all towing quotes</p>
    </div>

    <!-- Filters -->
    <div class="bg-white dark:bg-zinc-800 rounded-lg shadow mb-6 p-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <flux:field>
                <flux:label>Search</flux:label>
                <flux:input 
                    type="text" 
                    wire:model.live="search" 
                    placeholder="Search by quote #, name, phone, email, or address..."
                />
            </flux:field>
            
            <flux:field>
                <flux:label>Status</flux:label>
                <flux:select wire:model.live="status" placeholder="All Statuses">
                    <flux:select.option value="">All Statuses</flux:select.option>
                    <flux:select.option value="quoted">Quoted</flux:select.option>
                    <flux:select.option value="booking">Booking</flux:select.option>
                    <flux:select.option value="booked">Booked</flux:select.option>
                    <flux:select.option value="confirmed">Confirmed</flux:select.option>
                    <flux:select.option value="dispatched">Dispatched</flux:select.option>
                    <flux:select.option value="en_route">En Route</flux:select.option>
                    <flux:select.option value="arrived">Arrived</flux:select.option>
                    <flux:select.option value="completed">Completed</flux:select.option>
                    <flux:select.option value="cancelled">Cancelled</flux:select.option>
                </flux:select>
            </flux:field>
            
            <flux:field>
                <flux:label>Per Page</flux:label>
                <flux:select wire:model.live="perPage">
                    <flux:select.option value="10">10</flux:select.option>
                    <flux:select.option value="25">25</flux:select.option>
                    <flux:select.option value="50">50</flux:select.option>
                    <flux:select.option value="100">100</flux:select.option>
                </flux:select>
            </flux:field>
        </div>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        @forelse($quotes as $quote)
            @php
                $isNew = $quote->quoted_at->diffInMinutes(now()) < 30;
                $statusColors = [
                    'quoted' => 'bg-gray-100 text-gray-800',
                    'booking' => 'bg-amber-100 text-amber-800',
                    'booked' => 'bg-blue-100 text-blue-800',
                    'confirmed' => 'bg-green-100 text-green-800',
                    'dispatched' => 'bg-yellow-100 text-yellow-800',
                    'en_route' => 'bg-orange-100 text-orange-800',
                    'arrived' => 'bg-purple-100 text-purple-800',
                    'completed' => 'bg-green-100 text-green-800',
                    'cancelled' => 'bg-red-100 text-red-800',
                ];
                $color = $statusColors[$quote->status] ?? 'bg-gray-100 text-gray-800';
            @endphp
            
            <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-sm border border-gray-200 dark:border-zinc-700 overflow-hidden hover:shadow-md transition-all @if($isNew) ring-2 ring-green-500 @endif @if($quote->status === 'quoted') opacity-40 hover:opacity-100 @endif" wire:loading.class="opacity-50" wire:target="updateStatus">
                <!-- Header -->
                <div class="p-4 border-b border-gray-200 dark:border-zinc-700 bg-gray-50 dark:bg-zinc-900">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-zinc-100">
                                {{ $quote->quote_number }}
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-zinc-400">
                                {{ $quote->quoted_at->setTimezone('America/Los_Angeles')->format('M d, Y g:i A') }}
                                <span class="text-xs text-gray-500 dark:text-zinc-500">({{ $quote->quoted_at->diffForHumans() }})</span>
                            </p>
                        </div>
                        <select 
                            wire:change="updateStatus({{ $quote->id }}, $event.target.value)"
                            class="text-xs font-semibold rounded-full px-3 py-1 border-0 {{ $color }} cursor-pointer focus:ring-2 focus:ring-blue-500"
                        >
                            <option value="quoted" @selected($quote->status === 'quoted')>Quoted</option>
                            <option value="booking" @selected($quote->status === 'booking')>Booking</option>
                            <option value="booked" @selected($quote->status === 'booked')>Booked</option>
                            <option value="confirmed" @selected($quote->status === 'confirmed')>Confirmed</option>
                            <option value="dispatched" @selected($quote->status === 'dispatched')>Dispatched</option>
                            <option value="en_route" @selected($quote->status === 'en_route')>En Route</option>
                            <option value="arrived" @selected($quote->status === 'arrived')>Arrived</option>
                            <option value="completed" @selected($quote->status === 'completed')>Completed</option>
                            <option value="cancelled" @selected($quote->status === 'cancelled')>Cancelled</option>
                        </select>
                    </div>
                </div>
                
                <!-- Body -->
                <div class="p-4 space-y-4">
                    <!-- Customer Info -->
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 dark:text-zinc-300 mb-1">Customer</h4>
                        @if($quote->customer_name)
                            <p class="text-sm text-gray-900 dark:text-zinc-100 font-medium">{{ $quote->customer_name }}</p>
                            <p class="text-sm text-gray-600 dark:text-zinc-400">{{ $quote->customer_phone }}</p>
                            @if($quote->customer_email)
                                <p class="text-sm text-gray-600 dark:text-zinc-400">{{ $quote->customer_email }}</p>
                            @endif
                        @else
                            <p class="text-sm text-gray-400 dark:text-zinc-500 italic">No customer info yet</p>
                        @endif
                    </div>
                    
                    <!-- Vehicle Info -->
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 dark:text-zinc-300 mb-1">Vehicle</h4>
                        @if($quote->vehicle_year || $quote->vehicle_make || $quote->vehicle_model)
                            <p class="text-sm text-gray-900 dark:text-zinc-100">
                                {{ $quote->vehicle_year }} {{ $quote->vehicle_make }} {{ $quote->vehicle_model }}
                            </p>
                        @else
                            <p class="text-sm text-gray-400 dark:text-zinc-500 italic">Not specified</p>
                        @endif
                        
                        @if($quote->problem)
                            @php
                                $problemLabels = [
                                    'flat_tire' => 'Flat Tire',
                                    'dead_battery' => 'Dead Battery',
                                    'locked_out' => 'Locked Out',
                                    'out_of_gas' => 'Out of Gas',
                                    'accident' => 'Accident',
                                    'wont_start' => "Won't Start",
                                    'other' => $quote->problem_other ?? 'Other',
                                ];
                                $problemLabel = $problemLabels[$quote->problem] ?? $quote->problem;
                            @endphp
                            <p class="text-sm text-gray-600 dark:text-zinc-400">
                                <span class="font-medium">Problem:</span> {{ $problemLabel }}
                            </p>
                        @endif
                    </div>
                    
                    <!-- Route Info -->
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 dark:text-zinc-300 mb-1">Route</h4>
                        <div class="space-y-1">
                            <p class="text-sm text-gray-600 dark:text-zinc-400">
                                <span class="font-medium">From:</span> <span class="text-gray-900 dark:text-zinc-100">{{ $quote->from_address }}</span>
                            </p>
                            <p class="text-sm text-gray-600 dark:text-zinc-400">
                                <span class="font-medium">To:</span> <span class="text-gray-900 dark:text-zinc-100">{{ $quote->to_address }}</span>
                            </p>
                            <p class="text-sm text-gray-500 dark:text-zinc-500">
                                {{ $quote->distance }} miles • {{ $quote->duration }} mins
                            </p>
                        </div>
                    </div>
                    
                    <!-- Price -->
                    <div class="pt-2 border-t border-gray-200 dark:border-zinc-700">
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-gray-700 dark:text-zinc-300">Total Price</span>
                            <span class="text-xl font-bold text-blue-600 dark:text-blue-400">
                                ${{ number_format($quote->total, 2) }}
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Footer -->
                <div class="px-4 py-3 bg-gray-50 dark:bg-zinc-900 border-t border-gray-200 dark:border-zinc-700">
                    <a href="{{ route('admin.quotes.show', $quote) }}" class="text-sm text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 font-medium">
                        View Details →
                    </a>
                </div>
            </div>
        @empty
            <div class="col-span-full">
                <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-sm border border-gray-200 dark:border-zinc-700 p-12 text-center">
                    <p class="text-gray-500 dark:text-zinc-400">No quotes found</p>
                </div>
            </div>
        @endforelse
    </div>
    
    <!-- Pagination -->
    @if($quotes->hasPages())
        <div class="mt-6">
            {{ $quotes->links() }}
        </div>
    @endif
</div>