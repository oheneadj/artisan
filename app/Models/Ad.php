<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = ['user_id', 'name', 'slug', 'price', 'sale', 'sale_price', 'shop_id', 'category_id', 'description', 'status'];

    /**
     * Relationships
     *
     * @var function<string, string>
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    /**
     * Relationships
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * image
     *
     * @return void
     */
    public function image()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * image
     *
     * @return void
     */
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
