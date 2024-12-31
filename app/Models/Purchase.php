<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Ticket;
use App\Models\Customer;

class Purchase extends Model
{
    use HasUuids;

    protected $fillable = [
        'ticket_id',
        'customer_id',
        'ticket_code',
        'purchased_at',
        'checked_in_at'
    ];

    public $timestamps = false;

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class)
                    ->with('event');
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
