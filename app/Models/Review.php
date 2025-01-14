<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kit_id',
        'product_id',
        'rating',
        'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kit()
    {
        return $this->belongsTo(Kit::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
