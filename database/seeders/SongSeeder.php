<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songs = Song::all();

        if ($songs->isEmpty()) {
            Song::insert([
                [
                    'name' => 'Someone Like you',
                    'artist' => 'Adele',
                    'album' => '21',
                    'duration' => '4:45',
                    'file' => '/audios/AdeleSomeoneLikeYou.mp3',
                    'image' => '/images/songs/to.jpg',
                ],
                [
                    'name' => 'everything i wanted',
                    'artist' => 'Billie Eilish',
                    'album' => 'everything i wanted',
                    'duration' => '4:05',
                    'file' => '/audios/BillieEilisheverythingiwanted.mp3',
                    'image' => '/images/songs/eee.jpg',
                ],
                [
                    'name' => 'ilomilo',
                    'artist' => 'Billie Eilish',
                    'album' => 'WHEN WE ALL FALL ASLEEP, WHERE DO WE GO?',
                    'duration' => '2:36',
                    'file' => '/audios/BillieEilishilomilo.mp3',
                    'image' => '/images/songs/eiw.jpg',
                ],
                [
                    'name' => 'Finesse (Remix) [feat. Cardi B]',
                    'artist' => 'Bruno Mars',
                    'album' => 'Finesse (Remix) [feat. Cardi B]',
                    'duration' => '3:37',
                    'file' => '/audios/BrunoMarsFinesseRemixfeatCardiB.mp3',
                    'image' => '/images/songs/fr.jpg',
                ],
                [
                    'name' => 'It Will Rain',
                    'artist' => 'Bruno Mars',
                    'album' => 'It Will Rain',
                    'duration' => '4:17',
                    'file' => '/audios/BrunoMarsItWillRain.mp3',
                    'image' => '/images/songs/iwr.jpg',
                ],
                [
                    'name' => 'Hymn for the Weekend',
                    'artist' => 'Coldplay',
                    'album' => 'A Head Full of Dreams',
                    'duration' => '4:18',
                    'file' => '/audios/ColdplayHymnForTheWeekend.mp3',
                    'image' => '/images/songs/ahfod.jpg',
                ],
                [
                    'name' => 'Break My Heart Again',
                    'artist' => 'FINNEAS',
                    'album' => 'Blood Harmony',
                    'duration' => '3:58',
                    'file' => '/audios/FINNEASBreakMyHeartAgain.mp3',
                    'image' => '/images/songs/bh.jpg',
                ],
                [
                    'name' => 'Better',
                    'artist' => 'Khalid',
                    'album' => 'Better',
                    'duration' => '3:49',
                    'file' => '/audios/KhalidBetter.mp3',
                    'image' => '/images/songs/btt.jpg',
                ],
                [
                    'name' => 'Firestone',
                    'artist' => 'Kygo',
                    'album' => 'Cloud Nine',
                    'duration' => '4:31',
                    'file' => '/audios/KygoFirestoneftConradSewell.mp3',
                    'image' => '/images/songs/cn.jpg',
                ],
                [
                    'name' => 'Mónaco',
                    'artist' => 'LAGOS, Danny Ocean',
                    'album' => 'Clásicos',
                    'duration' => '3:12',
                    'file' => '/audios/LAGOSDannyOceanMónaco.mp3',
                    'image' => '/images/songs/cl.jpg',
                ],
                [
                    'name' => 'Passionfruit',
                    'artist' => 'Drake',
                    'album' => 'More Life',
                    'duration' => '4:48',
                    'file' => '/audios/Passionfruit.mp3',
                    'image' => '/images/songs/ml.jpg',
                ],
                [
                    'name' => 'I Have Nothing',
                    'artist' => 'Whitney Houston',
                    'album' => 'The Bodyguard',
                    'duration' => '4:49',
                    'file' => '/audios/WhitneyHoustonIHaveNothing.mp3',
                    'image' => '/images/songs/ihn.jpg',
                ],
            ]);
        }
    }
}
