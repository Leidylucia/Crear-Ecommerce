<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* CELULARES Y TABLES */
            [
                'category_id' => 1,
                'name' => 'Smartphone',
                'slug' => Str::slug('Smartphone'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares'),
                
            ],
            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
                
            ],
            /* TV Y Audio */
            [
                'category_id' => 2,
                'name' => 'Tv',
                'slug' => Str::slug('Tv'),
                
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
                
            ],
            [
                'category_id' => 2,
                'name' => 'Audios para autos',
                'slug' => Str::slug('Audios para autos'),
                
            ],
            /* Consola y videojuegos */
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
                
            ],
            [
                'category_id' => 3,
                'name' => 'PlayStation',
                'slug' => Str::slug('PlayStation'),
                
            ],
            [
                'category_id' => 3,
                'name' => 'Videojuegos para Pc',
                'slug' => Str::slug('Videojuegos para Pc'),
               
            ],
            /* Computacion */
            [
                'category_id' => 4,
                'name' => 'Portatiles',
                'slug' => Str::slug('Portatiles'),
               
            ],
            [
                'category_id' => 4,
                'name' => 'Pc escritorio',
                'slug' => Str::slug('Pc escritorio'),
                
            ],
            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento'),
                
            ],
            [
                'category_id' => 4,
                'name' => 'Accesorios Computadoras',
                'slug' => Str::slug('Accesorios Computadoras'),
                
            ],
            /* Moda */
            [
                'category_id' => 5,
                'name' => 'Mujer',
                'slug' => Str::slug('Mujer'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color' => true,
                'size' => true
                
            ],
            [
                'category_id' => 5,
                'name' => 'lentes',
                'slug' => Str::slug('lentes'),
                
            ],
            /* Deporte y Entretenimiento */
            [
                'category_id' => 6,
                'name' => 'Futbol',
                'slug' => Str::slug('Futbol'),
                'color' => true
            ],
            [
                'category_id' => 6,
                'name' => 'Natacion',
                'slug' => Str::slug('Natacion'),
                
            ],
            [
                'category_id' => 6,
                'name' => 'Ciclismo',
                'slug' => Str::slug('Ciclismo'),
                
            ]
        ];

        foreach ($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
