<?php

namespace Database\Seeders;

use App\Models\Playlist;
use App\Models\PlaylistSongs;
use App\Models\Song;
use Illuminate\Database\Seeder;

class PlaylistSongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Playlist::all() as $playlist) {
            foreach (Song::all() as $song) {
                PlaylistSongs::insert([
                    [
                        'playlist_id' => $playlist->id,
                        'song_id' => $song->id,
                    ],
                ]);
            }
        }

    }
}
