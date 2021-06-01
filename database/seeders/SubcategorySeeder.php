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
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
                'color' => true
            ],
            /* TV Y Audio */
            [
                'category_id' => 2,
                'name' => 'Tv',
                'slug' => Str::slug('Tv'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
                'color' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Audios para autos',
                'slug' => Str::slug('Audios para autos'),
                'color' => true
            ],
            /* Consola y videojuegos */
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
                'color' => true
            ],
            [
                'category_id' => 3,
                'name' => 'PlayStation',
                'slug' => Str::slug('PlayStation'),
                'color' => true
            ],
            [
                'category_id' => 3,
                'name' => 'Videojuegos para Pc',
                'slug' => Str::slug('Videojuegos para Pc'),
                'color' => true
            ],
            /* Computacion */
            [
                'category_id' => 4,
                'name' => 'Portatiles',
                'slug' => Str::slug('Portatiles'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Pc escritorio',
                'slug' => Str::slug('Pc escritorio'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento'),
                'color' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Accesorios Computadoras',
                'slug' => Str::slug('Accesorios Computadoras'),
                'color' => true
            ],
            /* Moda */
            [
                'category_id' => 5,
                'name' => 'Mujer',
                'slug' => Str::slug('Mujer'),
                'color' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color' => true
            ],
            [
                'category_id' => 5,
                'name' => 'lentes',
                'slug' => Str::slug('lentes'),
                'color' => true
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
                'color' => true
            ],
            [
                'category_id' => 6,
                'name' => 'Ciclismo',
                'slug' => Str::slug('Ciclismo'),
                'color' => true
            ]
        ];

        foreach ($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
