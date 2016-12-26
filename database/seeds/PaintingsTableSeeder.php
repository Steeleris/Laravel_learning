<?php


use App\Painting;
use Illuminate\Database\Seeder;

class PaintingsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: Implement run() method.
        $faker = Faker\Factory::create();

        Painting::truncate();

        for ($i = 0; $i <= 50; $i++) {
            $painting = Painting::create(array(
                'title' => $faker->realText(rand(20, 40)),
                'author' => $faker->name,
                'description' => $faker->realText(rand(100, 125)),
                'year' => $faker->year
            ));
        }
    }
}