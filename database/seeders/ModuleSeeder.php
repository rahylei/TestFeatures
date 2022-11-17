<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Module::create([
            "name" => "Oferta Academica",
            "route" => Str::slug("Oferta Academica", '_')
        ]);

        Module::create([
            "name" => "Institucion",
            "route" => Str::slug("Institucion", '_')
        ]);

        Module::create([
            "name" => "Formacion Integral",
            "route" => Str::slug("Formacion Integral", '_')
        ]);

        Module::create([
            "name" => "Servicios Universitarios",
            "route" => Str::slug("Servicios Universitarios", '_')
        ]);

        Module::create([
            "name" => "Informacion Publica",
            "route" => Str::slug("Informacion Publica", '_')
        ]);


    }
}
