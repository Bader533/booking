<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'count_night',
        'price',
        'pay_way',
        'start_date',
        'end_date',
        'client_id',
        'lounge_id', 'created_at'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function lounge()
    {
        return $this->belongsTo(Lounge::class);
    }
}
