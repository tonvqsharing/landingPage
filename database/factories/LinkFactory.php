<?php

namespace Database\Factories;

use App\Models\link;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class LinkFactory extends Factory
{
 /**
  * The name of the factory's corresponding model.
  *
  * @var string
  */
 protected $model = link::class;

 /**
  * Define the model's default state.
  *
  * @return array
  */
 public function definition()
 {

  return [
   'title'       => substr($this->faker->sentence(2), 0, -1),
   'url'         => $this->faker->url,
   'description' => $this->faker->paragraph,
  ];
 }

}
