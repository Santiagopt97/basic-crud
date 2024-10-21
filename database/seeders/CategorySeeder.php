<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Asegúrate de importar el modelo

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
                'name' => 'electronic',
                'description' => 'dispositivos y gadgets.',
            ],
            [
                'name' => 'books',
                'description' => 'una amplia gama de libros.',
            ],
            [
                'name' => 'clothing',
                'description' => 'ropa para todas las edades.',
            ],
            // Agrega más categorías aquí si lo deseas
        ];

        // Inserta las categorías
        foreach ($categories as $category) {
            Category::firstOrCreate(['name' => $category['name']], ['description' => $category['description']]);
        }
    }
}

