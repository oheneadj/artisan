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

    protected $fillable = ['user_id', 'logo', 'name', 'slug', 'location', 'phone_number', 'description', 'video_url', 'certificate_number', 'status', 'verified', 'verified_at'];

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

    public function scopeFilter ($query, array $filters){
        if($filters['search'] ?? false) {
            $query->where('name', 'like', '%'. request('search') . '%')
                ->orWhere('description', 'like', '%'. request('search') . '%');
        }
    }
}
