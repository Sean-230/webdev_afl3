<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','name','description','price','stock','is_instock','image_path'];
    
    protected $appends = ['average_rating', 'review_count'];
    
    public $incrementing = true;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Accessor for average rating
    public function getAverageRatingAttribute()
    {
        if (!$this->relationLoaded('reviews')) {
            return $this->reviews()->avg('rating') ?? 0;
        }
        return $this->reviews->avg('rating') ?? 0;
    }

    // Accessor for review count
    public function getReviewCountAttribute()
    {
        if (!$this->relationLoaded('reviews')) {
            return $this->reviews()->count();
        }
        return $this->reviews->count();
    }
}
