<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::factory(13)->sequence(
            ['name'=>'Auvergne-Rhône-Alpes'],
            ['name'=>'Bourgogne-Franche-Comté'],
            ['name'=>'Bretagne'],
            ['name'=>'Centre-Val de Loire'],
            ['name'=>'Aquitaine'],
            ['name'=>'Grand Est'],
            ['name'=>'Hauts-de-France'],
            ['name'=>'Ile-de-France'],
            ['name'=>'Normandie'],
            ['name'=>'Nouvelle-Aquitaine'],
            ['name'=>'Occitanie'],
            ['name'=>'Pays de la Loire'],
            ['name'=>'Provence-Alpes-Côte d’Azur'],
        )->create();
    }
}
