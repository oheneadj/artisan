<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description'];

    /**
     * ad
     *
     * @return void
     */
    public function ad()
    {
        return $this->belongsToMany(Ad::class);
    }

    /**
     * shop
     *
     * @return void
     */
    public function shop()
    {
        return $this->belongsToMany(Shop::class);
    }
}
