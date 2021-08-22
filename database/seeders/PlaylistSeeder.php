<?php

namespace Database\Seeders;

use App\Models\Playlist;
use App\Models\User;
use Illuminate\Database\Seeder;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::query()
            ->select(['id'])
            ->with('playlists')
            ->get()
            ->toArray();

        foreach ($users as $user) {
            if (empty($user['playlists'])) {
                Playlist::insert([
                    [
                        'image' => '/images/playlists/boring.jpg',
                        'name' => 'The boring playlist',
                        'description' => 'Favorite songs.',
                        'user_id' => $user['id'],
                    ],
                    [
                        'image' => '/images/playlists/loop.jpg',
                        'name' => 'Loop',
                        'description' => 'Playlist to study/relax.',
                        'user_id' => $user['id'],
                    ],
                    [
                        'image' => '/images/playlists/code.jpg',
                        'name' => 'Code',
                        'description' => 'Keep calm and code.',
                        'user_id' => $user['id'],
                    ],
                    [
                        'image' => '/images/playlists/spiderman.jpg',
                        'name' => 'My playlist #4',
                        'description' => 'Greatest mixtape of movies.',
                        'user_id' => $user['id'],
                    ],
                    [
                        'image' => '/images/playlists/drive.jpg',
                        'name' => 'My playlist #5',
                        'description' => 'Containing the original soundtrack from the movie “Drive” plus other Synthwave and Synth-Pop personal choices',
                        'user_id' => $user['id'],
                    ],
                ]);
            }
        }

        $publicPlaylists = Playlist::query()
            ->whereNull('user_id')
            ->get()
            ->toArray();

        if (empty($publicPlaylists)) {
            Playlist::insert([
                [
                    'image' => '/images/playlists/familymix.png',
                    'name' => 'Family mix',
                    'description' => 'Listen together with the people on your Family Plan.',
                    'user_id' => null,
                ],
                [
                    'image' => '/images/playlists/mix-3.jpg',
                    'name' => 'Daily Mix',
                    'description' => 'A mix of news and music made for you.',
                    'user_id' => null,
                ],
                [
                    'image' => '/images/playlists/motivation-mix.jpg',
                    'name' => 'Motivation mix',
                    'description' => 'Uplifting and energetic music that helps you stay motivated',
                    'user_id' => null,
                ],
                [
                    'image' => '/images/playlists/10.jpg',
                    'name' => 'Top 10 Mix',
                    'description' => 'A mix of your 10 favorite artists.',
                    'user_id' => null,
                ],
                [
                    'image' => '/images/playlists/discover-weekly.jpg',
                    'name' => 'Discover weekly',
                    'description' => 'Your weekly mixtape of fresh music. Enjoy new music and deep cuts picked for you. Updates every Monday.',
                    'user_id' => null,
                ],
                [
                    'image' => '/images/playlists/lofi.jpg',
                    'name' => 'Lofi beats',
                    'description' => 'Beats to relax, study, and focus...',
                    'user_id' => null,
                ],
            ]);
        }
    }
}
