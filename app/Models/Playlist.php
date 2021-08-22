<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'description',
        'user_id',
    ];

    public function scopeUserPlaylists($query)
    {
        return $query->where('user_id', Auth::id());
    }

    public function scopePublicPlaylists($query)
    {
        return $query->whereNull('user_id');
    }

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function songs() {
        return $this->belongsToMany(
            Song::class,
            'playlist_songs',
            'playlist_id',
            'song_id'
        );
    }
}
