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

         DB::table('cargo')->insert([
            'nombre_cargo' => 'Informatico',
        ]);

        DB::table('pais')->insert([
            'nombre_pais' => 'Chile',
        ]); 

        DB::table('pais')->insert([
            'nombre_pais' => 'Brazil',
        ]); 

        DB::table('pais')->insert([
            'nombre_pais' => 'Argentina',
        ]); 

        DB::table('pais')->insert([
            'nombre_pais' => 'Peru',
        ]); 

        DB::table('pais')->insert([
            'nombre_pais' => 'Bolivia',
        ]); 

        DB::table('pais')->insert([
            'nombre_pais' => 'Uruguay',
        ]); 

        DB::table('pais')->insert([
            'nombre_pais' => 'Paraguay',
        ]); 

        DB::table('categoria')->insert([
            'nombre_categoria' => 'Promociones',
            'tipo_categoria' => '1',
        ]); 

        DB::table('categoria')->insert([
            'nombre_categoria' => 'Giras de Estudio',
            'tipo_categoria' => '2',
        ]); 

        DB::table('categoria')->insert([
            'nombre_categoria' => 'Sudamerica',
            'tipo_categoria' => '0',
        ]); 

        DB::table('categoria')->insert([
            'nombre_categoria' => 'Caribe',
            'tipo_categoria' => '0',
        ]); 

        DB::table('categoria')->insert([
            'nombre_categoria' => 'Norte America' ,
            'tipo_categoria' => '0',
        ]); 

        DB::table('categoria')->insert([
            'nombre_categoria' => 'Europa',
            'tipo_categoria' => '0',
        ]); 

        DB::table('categoria')->insert([
            'nombre_categoria' => 'Chile',
            'tipo_categoria' => '0',
        ]); 

        DB::table('categoria')->insert([
            'nombre_categoria' => 'Destinos Lejanos',
            'tipo_categoria' => '0',
        ]); 

        DB::table('users')->insert([
            'name' => 'Ian',
            'email' => 'ian.vinales26@gmail.com',
            'password' => bcrypt('admin'),
            'perfil_id' => ('1'),
        ]);  


    }
}
