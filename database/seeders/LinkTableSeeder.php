<?php

namespace Database\Seeders;

use App\Models\link;
use Illuminate\Database\Seeder;

class LinkTableSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 { //

  \App\Models\link::factory()->count(5)->create();
 }
}
