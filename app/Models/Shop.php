<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = ['user_id', 'name', 'slug', 'location', 'certificate_number', 'verified', 'verified_at'];

    /**
     * Relationships
     *
     * @var function<string, string>
     */
    public function service()
    {
        return $this->hasMany(Ad::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
