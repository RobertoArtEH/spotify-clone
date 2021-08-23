<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PlaylistController extends Controller
{
    public function index($id)
    {
        $playlist = Playlist::with(['user', 'songs'])->find($id);

        return Inertia::render('Spotify/Playlist', [
            'playlist' => $playlist
        ]);
    }
}
