<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = ['name', 'ad_id'];

    /**
     * ad
     *
     * @return void
     */
    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}
