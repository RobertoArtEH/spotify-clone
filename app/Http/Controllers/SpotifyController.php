<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SpotifyController extends Controller
{
    public function index()
    {
        $public = Playlist::PublicPlaylists()->orderBy('id', 'desc')->get();
        $user   = Playlist::UserPlaylists()->orderBy('id', 'desc')->get();

        return Inertia::render('Spotify/Home', [
            'playlists' => [
                'public' => $public,
                'user' => $user,
            ]
        ]);
    }

    public function playlists()
    {
        return Inertia::render('Spotify/Home', []);
    }
}
