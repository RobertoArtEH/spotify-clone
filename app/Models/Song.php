<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'artist',
        'album',
        'duration',
    ];

    public function playlists()
    {
        return $this->belongsToMany(
            Playlist::class,
            'playlist_songs',
            'song_id',
            'playlist_id'
        );
    }
}
