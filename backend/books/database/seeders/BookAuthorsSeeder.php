<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookAuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = \App\Models\Book::all();

        foreach ($books as $book) {

            $amount = rand(1, 3);
            $authors = collect();

            while ($authors->count() < $amount) {

                $author = \App\Models\Author::inRandomOrder()->first();

                if (!$authors->contains($author)) {
                    $authors->push($author);
                }
            }

            $book->authors()->saveMany($authors);
        }
    }
}
