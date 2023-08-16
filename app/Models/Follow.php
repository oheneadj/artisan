<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    public function shop()
    {
        $this->belongsToMany(Shop::class);
    }

    public function user()
    {
        $this->belongsToMany(User::class);
    }
}
