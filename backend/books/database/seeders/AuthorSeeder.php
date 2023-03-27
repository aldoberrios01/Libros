<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = \App\Models\Author::factory(25)->make();

        foreach ($authors as $author) {
            if ((rand(1, 3)) === 1) {
                $author->deceased_at = new DateTime('-3 weeks');
            }
            $author->save();
        }
    }
}
