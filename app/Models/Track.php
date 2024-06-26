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

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
