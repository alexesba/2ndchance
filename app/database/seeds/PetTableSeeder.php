<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PetTableSeeder extends Seeder {

  public function run()
  {

    DB::table('pets')->truncate();
    $faker = Faker::create();

    foreach(range(1, 10) as $index)
    {
      Pet::create([
        'name'        => $faker->name,
        'race'        => $faker->colorName,
        'description' => $faker->text(200)
        ]);
    }
  }

}
