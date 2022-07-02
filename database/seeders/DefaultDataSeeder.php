<?php

namespace Database\Seeders;

use App\Models\Airline;
use App\Models\City;
use App\Models\Route;
use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Desacticar todas las claves foraneas
        DB::statement('SET foreign_key_checks=0');
        City::truncate();
        Airline::truncate();
        Route::truncate();
        Ticket::truncate();

        City::factory()->count(70)->make();
        Airline::factory()->count(50)->make();
        Route::factory()->count(20)->make();
        Ticket::factory()->count(100)->create();
    }
}
