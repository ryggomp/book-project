<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'The Pragmatic Programmer',
                'author' => 'Andrew Hunt',
                'year' => 1999
            ],
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'year' => 2008
            ],
            [
                'title' => 'Introduction to Algorithms',
                'author' => 'Thomas H. Cormen',
                'year' => 2009
            ]
        ]);
    }
}