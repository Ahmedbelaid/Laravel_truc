<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product'; // Specify the table name if it's different from the model's plural name
    use HasFactory;

    protected $fillable = [
        'product_name',
        'weight',
        'category',
        'price',
        'units',
        'description',
        'address',
        'image',
        'status', // If 'status' is part of the form data
    ];
    public function reviewRatings()
    {
        return $this->hasMany(ReviewRating::class);
    }
    public function annonce()
    {
        return $this->belongsTo(Annonce::class, 'annonce_id');
    }
    
    protected $guarded = ['_token'];
}
