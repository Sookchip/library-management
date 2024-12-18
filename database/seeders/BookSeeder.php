<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as Faker;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');
        foreach(range(1,10) as $index){
            Book::create([
                'name'=>$faker->sentence(),
                'author'=>$faker->name(),
                'category'=>$faker->sentence(),
                'year'=>$faker->year(),
                'quantity'=>$faker->numberBetween(0,100),
            ]);
        }
    }
}
