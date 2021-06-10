<?php

namespace Database\Seeders;

use App\Models\Link;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run(Faker $faker)
 {
  //
  for ($i = 0; $i < 4; $i++) {
   # code...
   Link::create([
    'url'         => $faker->url(),
    'description' => $faker->domainWord(),
    'created_at'  => Carbon::now(),
    'updated_at'  => Carbon::now(),
   ]);
  }

 }
}
