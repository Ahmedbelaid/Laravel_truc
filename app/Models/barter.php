<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barter extends Model
{
    use HasFactory;
    protected $fillable = [
        'type', 
        'postal_code', 
        'city', 
        'street_number', 
        'street_name',
        'address_visible', 
        'images',
        'title', 
        'description', 
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function barterRequests()
{
    return $this->hasMany(BarterRequest::class);
}
  }
