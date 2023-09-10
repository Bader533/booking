<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_number',
        'count_night',
        'price',
        'pay_way',
        'start_date',
        'end_date',
        'client_id',
        'lounge_id', 'created_at'
    ];

    protected $attributes = [
        'slug' => '',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($booking) {
            $booking->slug = $booking->generateSlug($booking->start_date);
            $booking->save();
        });
    }

    private function generateSlug($start_date)
    {
        if (static::whereSlug($slug = Str::slug($start_date))->exists()) {
            $max = static::where('start_date', $start_date)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function lounge()
    {
        return $this->belongsTo(Lounge::class);
    }
}
