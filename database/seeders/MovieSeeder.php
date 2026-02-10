<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'Праздники',
                'genre' => 'комедия',
                'poster' => 'assets/images/image 4.png',
                'rating' => '12+',
                'badge' => 'ПРЕМЬЕРА',
                'showtimes' => [
                    ['time' => '15:35', 'meta' => '2D 1233 T', 'hall' => 'Зал 3'],
                    ['time' => '17:40', 'meta' => '2D 3080 T', 'hall' => 'Зал 6 VIP'],
                    ['time' => '19:15', 'meta' => '2D 1700 T', 'hall' => 'Зал 4'],
                    ['time' => '21:05', 'meta' => '2D 1700 T', 'hall' => 'Зал 3'],
                    ['time' => '21:40', 'meta' => '2D 4030 T', 'hall' => 'Зал 6 VIP'],
                    ['time' => '22:45', 'meta' => '2D 1700 T', 'hall' => 'Зал 3'],
                ]
            ],
            [
                'title' => 'Мег 2: Бездна',
                'genre' => 'экшен, триллер',
                'poster' => 'assets/images/Group 862.png',
                'rating' => '16+',
                'showtimes' => [
                    ['time' => '15:35', 'meta' => '2D 4030 T', 'hall' => 'Зал 6 VIP'],
                    ['time' => '17:40', 'meta' => '2D 3080 T', 'hall' => 'Зал 2 Auto'],
                    ['time' => '19:15', 'meta' => '2D 1700 T', 'hall' => 'Зал 4'],
                ]
            ],
            [
                'title' => 'Заложники',
                'genre' => 'экшен, триллер',
                'poster' => 'assets/images/Group 862 (1).png',
                'rating' => '16+',
                'showtimes' => [
                    ['time' => '16:10', 'meta' => '2D 4030 T', 'hall' => 'Зал 1'],
                    ['time' => '21:30', 'meta' => '2D 3080 T', 'hall' => 'Зал 1'],
                ]
            ],
            [
                'title' => 'Леди Баг и Супер-Кот: Пробуждение силы',
                'genre' => 'фэнтези, боевик, мелодрама',
                'poster' => 'assets/images/Group 862 (2).png',
                'rating' => '6+',
                'showtimes' => [
                    ['time' => '16:10', 'meta' => '2D 4030 T', 'hall' => 'Зал 1'],
                    ['time' => '21:30', 'meta' => '2D 3080 T', 'hall' => 'Зал 1'],
                ]
            ],
            [
                'title' => 'Когда не загрузилась афиша',
                'genre' => 'комедия',
                'poster' => 'assets/images/Group 862 (3).png',
                'rating' => null,
                'badge' => 'ПРЕМЬЕРА',
                'showtimes' => [
                    ['time' => '15:35', 'meta' => '2D 1233 T', 'hall' => 'Зал 3'],
                    ['time' => '17:40', 'meta' => '2D 3080 T', 'hall' => 'Зал 6 VIP'],
                ]
            ],
            [
                'title' => 'Руслан и Людмила. Больше, чем сказка',
                'genre' => 'анимационое приключение',
                'poster' => 'assets/images/Group 862 (4).png',
                'rating' => '6+',
                'badge' => 'ПРЕМЬЕРА',
                'showtimes' => [
                    ['time' => 'Завтра', 'meta' => 'Cеансы на', 'hall' => ''],
                ]
            ],
        ];

        foreach ($movies as $movieData) {
            $showtimes = $movieData['showtimes'];
            unset($movieData['showtimes']);
            
            $movie = \App\Models\Movie::create($movieData);
            
            foreach ($showtimes as $showtime) {
                $movie->showtimes()->create($showtime);
            }
        }
    }
}
