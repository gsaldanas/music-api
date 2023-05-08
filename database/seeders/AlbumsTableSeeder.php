<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Album::create([
            'title' => 'Thriller',
            'artist' => 'Michael Jackson',
            'cover' => 'https://example.com/thriller.jpg',
            'likes' => 1000,
        ]);

        Album::create([
            'title' => 'Back in Black',
            'artist' => 'AC/DC',
            'cover' => 'https://example.com/back_in_black.jpg',
            'likes' => 900,
        ]);

        Album::create([
            'title' => 'The Dark Side of the Moon',
            'artist' => 'Pink Floyd',
            'cover' => 'https://example.com/dark_side_of_the_moon.jpg',
            'likes' => 800,
        ]);

        Album::create([
            'title' => 'Appetite for Destruction',
            'artist' => 'Guns N\' Roses',
            'cover' => 'https://example.com/appetite_for_destruction.jpg',
            'likes' => 700,
        ]);

        Album::create([
            'title' => 'Nevermind',
            'artist' => 'Nirvana',
            'cover' => 'https://example.com/nevermind.jpg',
            'likes' => 600,
        ]);

        Album::create([
            'title' => 'Abbey Road',
            'artist' => 'The Beatles',
            'cover' => 'https://example.com/abbey_road.jpg',
            'likes' => 500,
        ]);

        Album::create([
            'title' => 'Led Zeppelin IV',
            'artist' => 'Led Zeppelin',
            'cover' => 'https://example.com/led_zeppelin_iv.jpg',
            'likes' => 400,
        ]);

        Album::create([
            'title' => 'Purple Rain',
            'artist' => 'Prince',
            'cover' => 'https://example.com/purple_rain.jpg',
            'likes' => 300,
        ]);

        Album::create([
            'title' => 'The Joshua Tree',
            'artist' => 'U2',
            'cover' => 'https://example.com/joshua_tree.jpg',
            'likes' => 200,
        ]);

        Album::create([
            'title' => 'Sgt. Pepper\'s Lonely Hearts Club Band',
            'artist' => 'The Beatles',
            'cover' => 'https://example.com/sgt_pepper.jpg',
            'likes' => 100,
        ]);
    }
}
