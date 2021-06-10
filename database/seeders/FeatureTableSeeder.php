<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeatureTableSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {
  //
  \App\Models\feature::factory()->count(10)->create();
 }
}
