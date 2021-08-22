<?php

namespace Database\Seeders;

use App\Models\Playlist;
use App\Models\UserPlaylists;
use Illuminate\Database\Seeder;

class UserPlaylistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $playlists = Playlist::query()
            ->where('user_id')
            ->get();

        foreach ($playlists as $playlist) {
            UserPlaylists::create(
                [
                    'user_id' => '',
                    'playlist_id' => '',
                ]
            );
        }
    }
}
