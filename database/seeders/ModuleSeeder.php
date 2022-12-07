<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Modules\Module;

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
            "name" => "Oferta academica"
        ]);

        Module::create([
            "name" => "Institucion"
        ]);

        Module::create([
            "name" => "Formacion integral"
        ]);

        Module::create([
            "name" => "Servicios universitarios"
        ]);

        Module::create([
            "name" => "Informacion publica"
        ]);


    }
}
