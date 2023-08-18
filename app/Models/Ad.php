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

    protected $fillable = ['user_id', 'name', 'price', 'shop_id'];

    /**
     * Relationships
     *
     * @var function<string, string>
     */
    public function shop()
    {
        $this->belongsTo(Shop::class);
    }
}
