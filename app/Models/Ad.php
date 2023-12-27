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

    protected $fillable = ['user_id', 'name', 'slug', 'price', 'sale', 'sale_price', 'shop_id', 'category_id', 'description', 'status', 'published_at'];

    /**
     * Relationships
     *
     * @var function<string, string>
     */
    public function shop(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

    /**
     * Relationships
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * image
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function image(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Image::class);
    }

    /**
     * image
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comment(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function scopeFilter ($query, array $filters){
        if($filters['search'] ?? false) {
            $query->where('name', 'like', '%'. request('search') . '%')
            ->orWhere('description', 'like', '%'. request('search') . '%');
        }
    }
}
