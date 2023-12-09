<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $with = ['shop'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'profile_picture',
        'name',
        'username',
        'gender',
        'date_of_birth',
        'location',
        'card_type',
        'card_number',
        'verified',
        'phone_number',
        'phone_number_verified_at',
        'user_type',
        'email',
        'password',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'number_verfied_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function generateUserName($name)
    {
        $username = Str::lower(Str::slug($name));
        if (User::where('username', '=', $username)->exists()) {
            $uniqueUserName = $username . '-' . Str::lower(Str::random(4));
            $username = $this->generateUserName($uniqueUserName);
        }
        return $username;
    }

    /**
     * Relationships
     *
     * @var function<string, string>
     */
    public function shop()
    {
        return $this->hasOne(Shop::class);
    }
}
