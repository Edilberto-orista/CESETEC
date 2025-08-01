<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar registros a la tabla
        DB::table('clientes')->insert([
            [
                'nombres'=> 'edilberto',
                'apellidos'=> 'choque orista',
                'direccion'=> 'valle hermoso',
                'celular'=> '65486627',
                'nit'=>'3151555',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombres'=> 'marlene',
                'apellidos'=> 'otrillas villca',
                'direccion'=> 'valle hermoso',
                'celular'=> '5555',
                'nit'=>'2222',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
        ]);
    }
}
