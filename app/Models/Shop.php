<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $with = ['ad'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = ['user_id', 'logo', 'name', 'slug', 'location', 'certificate_number', 'verified', 'verified_at'];

    /**
     * Relationships
     *
     * @var function<string, string>
     */
    public function ad()
    {
        return $this->hasMany(Ad::class);
    }

    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationships
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
