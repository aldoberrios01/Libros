<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EditionSeeder extends Seeder
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
            $amount = rand(1, 5);
            $editorial = \App\Models\Editorial::inRandomOrder()->first();

            for ($i = 1; $i <= $amount; $i++) {
                $edition = \App\Models\Edition::factory()->make();
                $edition->editorial()->associate($editorial);
                $edition->book()->associate($book);
                $edition->save();
            }
        }
    }
}
