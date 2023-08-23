<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lounge extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'address',
        'description',
        'night',
        'night_price',
        'slug'
    ];

    protected $attributes = [
        'slug' => '',
    ];

    protected static function boot()
    {
        parent::boot();
        static::created(function ($lounge) {
            $lounge->slug = $lounge->generateSlug($lounge->name);
            $lounge->save();
        });
    }

    private function generateSlug($name)
    {
        if (static::whereSlug($slug = Str::slug($name))->exists()) {
            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'object', 'object_type', 'object_id', 'id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
