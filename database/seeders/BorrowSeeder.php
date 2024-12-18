<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Borrow;
use App\Models\Book;
use App\Models\Reader;
class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $books = Book::all();
        $readers = Reader::all();

        foreach(range(1,10) as $i){
            Borrow::create([
                'reader_id'=>$readers->random()->id(),
                'book_id'=>$books->random()->id(),
                'borrow_date'=>$faker->dateTimeBetween('-1 year','now'),
                
            ]);
        }

    }
}
