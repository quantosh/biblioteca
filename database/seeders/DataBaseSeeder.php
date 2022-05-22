<?php

namespace Database\Seeders;

use App\Models\Autore;
use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autore::factory(20)->create();
        Libro::factory(20)->create();
    }
}
