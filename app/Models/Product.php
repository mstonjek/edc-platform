<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image_url',
        'rating',
        'amazon_url',
    ];

    protected $casts = [
        'price' => 'float',
        'rating' => 'float',
    ];

    public function kits()
    {
        return $this->belongsToMany(Kit::class)->withTimestamps();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
