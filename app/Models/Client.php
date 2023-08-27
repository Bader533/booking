<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name',
        'l_name',
        'phone',
        'nationality',
        'client_kind',
        'id_kind',
        'id_copy',
        'visa_number',
        'sign_in',
        'entry_time',
        'duration',
        'arrival_destination',
        'slug', 'created_at'
    ];

    protected $attributes = [
        'slug' => '',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($client) {
            $client->slug = $client->generateSlug($client->f_name);
            $client->save();
        });
    }

    private function generateSlug($f_name)
    {
        if (static::whereSlug($slug = Str::slug($f_name))->exists()) {
            $max = static::where('f_name', $f_name)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
