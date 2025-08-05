<?php

namespace App\Livewire\Admin;

use App\Models\Quote;
use Livewire\Component;
use Livewire\WithPagination;

class QuotesTable extends Component
{
    use WithPagination;
    
    public $search = '';
    public $status = '';
    public $sortField = 'quoted_at';
    public $sortDirection = 'desc';
    public $perPage = 25;
    
    protected $queryString = ['search', 'status', 'sortField', 'sortDirection'];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function updatingStatus()
    {
        $this->resetPage();
    }
    
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }
    
    public function updateStatus($quoteId, $newStatus)
    {
        $quote = Quote::find($quoteId);
        if ($quote) {
            $quote->update(['status' => $newStatus]);
            
            // Set appropriate timestamps based on status
            switch ($newStatus) {
                case 'booked':
                    $quote->update(['booked_at' => now()]);
                    break;
                case 'confirmed':
                    $quote->update(['confirmed_at' => now()]);
                    break;
                case 'dispatched':
                    $quote->update(['dispatched_at' => now()]);
                    break;
                case 'en_route':
                    $quote->update(['en_route_at' => now()]);
                    break;
                case 'arrived':
                    $quote->update(['arrived_at' => now()]);
                    break;
                case 'completed':
                    $quote->update(['completed_at' => now()]);
                    break;
                case 'cancelled':
                    $quote->update(['cancelled_at' => now()]);
                    break;
            }
        }
    }
    
    public function render()
    {
        $quotes = Quote::query()
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('quote_number', 'like', '%' . $this->search . '%')
                      ->orWhere('customer_name', 'like', '%' . $this->search . '%')
                      ->orWhere('customer_phone', 'like', '%' . $this->search . '%')
                      ->orWhere('customer_email', 'like', '%' . $this->search . '%')
                      ->orWhere('from_address', 'like', '%' . $this->search . '%')
                      ->orWhere('to_address', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->status, function ($query) {
                $query->where('status', $this->status);
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);
            
        return view('livewire.admin.quotes-table', [
            'quotes' => $quotes
        ]);
    }
}
