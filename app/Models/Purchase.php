<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

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
}
