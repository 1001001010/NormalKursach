<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'genre',
        'music_file',
        'cover_file',
    ];

    public function tracks() {
        return $this->hasMany(Track::class);
    }
}
