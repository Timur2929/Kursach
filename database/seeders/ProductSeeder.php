<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Создаем категории с изображениями
        $categories = [
            [
                'nom' => 'Браслеты',
                'image' => 'Kamenika.jpg',
            ],
            [
                'nom' => 'Серьги',
                'image' => 'Kamenika.jpg',
            ],
            [
                'nom' => 'Колье',
                'image' => 'Kamenika.jpg',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Создаем товары
        $products = [
            // Браслеты (category_id = 1)
            [
                'nom' => 'Браслет "Элегантность"',
                'description' => 'Стильный серебряный браслет с гравировкой.',
                'prix' => 2000,
                'image' => '/public/bracelet1.jpg',
                'category_id' => 1,
            ],
            [
                'nom' => 'Браслет "Минимализм"',
                'description' => 'Простой и лаконичный браслет из кожи.',
                'prix' => 1600,
                'image' => '//bracelet2.jpg',
                'category_id' => 1,
            ],
            [
                'nom' => 'Браслет "Роскошь"',
                'description' => 'Золотой браслет с инкрустацией камнями.',
                'prix' => 5000,
                'image' => '//bracelet3.jpg',
                'category_id' => 1,
            ],

            // Серьги (category_id = 2)
            [
                'nom' => 'Серьги "Классика"',
                'description' => 'Серебряные серьги-гвоздики.',
                'prix' => 3000,
                'image' => '//earrings1.jpg',
                'category_id' => 2,
            ],
            [
                'nom' => 'Серьги "Геометрия"',
                'description' => 'Серьги необычной геометрической формы.',
                'prix' => 7000,
                'image' => '//earrings2.jpg',
                'category_id' => 2,
            ],
            [
                'nom' => 'Серьги "Бриллиант"',
                'description' => 'Золотые серьги с бриллиантами.',
                'prix' => 9000,
                'image' => '//earrings3.jpg',
                'category_id' => 2,
            ],

            // Ожерелья (category_id = 3)
            [
                'nom' => 'Ожерелье "Винтаж"',
                'description' => 'Винтажное ожерелье с жемчугом.',
                'prix' => 3000,
                'image' => '/public/necklace1.jpg',
                'category_id' => 3,
            ],
            [
                'nom' => 'Ожерелье "Модерн"',
                'description' => 'Современное ожерелье с цепочкой.',
                'prix' => 3000,
                'image' => '//necklace2.jpg',
                'category_id' => 3,
            ],
            [
                'nom' => 'Ожерелье "Королевское"',
                'description' => 'Роскошное ожерелье с драгоценными камнями.',
                'prix' => 7000,
                'image' => '//necklace3.jpg',
                'category_id' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}