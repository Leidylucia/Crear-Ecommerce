<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Celulares y Tablets',
                'slug' => Str::slug('Celulares y Tablets'),
                'icon' => '<i class="fas fa-mobile"></i>'
            ],
            [
                'name' => 'TV y Audio',
                'slug' => Str::slug('TV y Audio'),
                'icon' => '<i class="fas fa-tv"></i>'
            ],
            [
                'name' => 'Consola y Videojuegos',
                'slug' => Str::slug('Consola y Videojuegos'),
                'icon' => '<i class="fas fa-gamepad"></i>'
            ],
            [
                'name' => 'Computación',
                'slug' => Str::slug('Computación'),
                'icon' => '<i class="fas fa-laptop-code"></i>'
            ],
            [
                'name' => 'Moda',
                'slug' => Str::slug('Moda'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ],
            
            [
                'name' => 'Deporte y Entretenimiento',
                'slug' => Str::slug('Deporte y Entretenimiento'),
                'icon' => '<i class="fas fa-football-ball"></i>'
            ]
        ];

        foreach ($categories as $category){
            $category = Category::factory(1)->create($category)->first();
            $brands = Brand::factory(4)->create();

            foreach($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
} 