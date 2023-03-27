<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Genre::factory(20)->create();

        $books = \App\Models\Book::all();

        foreach ($books as $book) {

            $amount = rand(1, 3);
            $genres = collect();

            while ($genres->count() < $amount) {

                $genre = \App\Models\Genre::inRandomOrder()->first();

                if (!$genres->contains($genre)) {
                    $genres->push($genre);
                }
            }

            $book->genres()->saveMany($genres);
        }
    }
}
