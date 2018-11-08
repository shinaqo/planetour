<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfil')->insert([
            'nombre' => 'Administrador',
            'estado' => 'Habilitado',
        ]);  

       DB::table('perfil')->insert([
            'nombre' => 'Trabajador',
            'estado' => 'Habilitado',
        ]); 

        DB::table('perfil')->insert([
            'nombre' => 'usuario',
            'estado' => 'Habilitado',
        ]);  

        DB::table('cargo')->insert([
            'nombre_cargo' => 'Jefe',
        ]);  

        DB::table('cargo')->insert([
            'nombre_cargo' => 'Marketing',
        ]);  

        DB::table('cargo')->insert([
            'nombre_cargo' => 'Diseñador',
        ]);  

        DB::table('pais')->insert([
            'nombre_pais' => 'Chile',
        ]); 

        DB::table('categoria')->insert([
            'nombre_categoria' => 'Tour',
        ]); 

       DB::table('users')->insert([
            'name' => 'Ian',
            'email' => 'ian@gmail.com',
            'password' => bcrypt('admin'),
            'perfil_id' => ('1'),
        ]);  

       DB::table('users')->insert([
            'name' => 'titi',
            'email' => 'titi@gmail.com',
            'password' => bcrypt('cac'),
            'perfil_id' => ('2'),

        ]); 
    }
}
