<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = ['ad_id', 'user_id', 'comment_id', 'comment'];

    /**
     * ad
     *
     * @return void
     */
    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }

    /**
     * ad
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * ad
     *
     * @return void
     */
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
