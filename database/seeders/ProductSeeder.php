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
                'image' => '//Kamenika.jpg',
            ],
            [
                'nom' => 'Серьги',
                'image' => '//Kamenika.jpg',
            ],
            [
                'nom' => 'Колье',
                'image' => '//Kamenika.jpg',
            ],
            [
                'nom' => 'Чокеры',
                'image' => '//Kamenika.jpg',
            ],
            [
                'nom' => 'Брошки',
                'image' => '//Kamenika.jpg',
            ],
            [
                'nom' => 'Сувениры',
                'image' => '//Kamenika.jpg',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Создаем товары
        $products = [
            // Браслеты (category_id = 1)
            [
                'nom' => 'Браслет «Милосердие анжумов»',
                'description' => 'Браслет из вулканической лавы и тектита на резинке.Фурнитура с покрытием родием.',
                'prix' => 2000,
                'image' => '//bracelet1.jpg',
                'category_id' => 1,
            ],
            [
                'nom' => 'Браслет «Богиня ночи»',
                'description' => 'Браслет из лазурита. Фурнитура с покрытием золотом 18К.',
                'prix' => 1600,
                'image' => '//bracelet2.jpg',
                'category_id' => 1,
            ],
            [
                'nom' => 'Браслет «Первоцветы»',
                'description' => 'Браслет из розового кварца и лунного камня (8 мм).',
                'prix' => 5000,
                'image' => '//bracelet3.jpg',
                'category_id' => 1,
            ],

            // Серьги (category_id = 2)
            [
                'nom' => 'Серьги с аметистом',
                'description' => 'Серьги-английский замок (латунь, позолота 18К) с аметистом и ювелирной цепью (латунь, позолота 18К).',
                'prix' => 3000,
                'image' => '//earrings1.jpg',
                'category_id' => 2,
            ],
            [
                'nom' => 'Серьги с малахитом',
                'description' => 'Серьги с малахитом, швензы-пусеты из серебра 925 пробы. Фурнитура с покрытием родием.',
                'prix' => 7000,
                'image' => '//earrings2.jpg',
                'category_id' => 2,
            ],
            [
                'nom' => 'Серьги «Жемчужный сказ»',
                'description' => 'Серьги-крючки с пресноводным и барочным жемчугом.Фурнитура из латуни, покрытие - серебро.',
                'prix' => 9000,
                'image' => 'earrings3.jpg',
                'category_id' => 2,
            ],

            // Ожерелья (category_id = 3)
            [
                'nom' => 'Колье «Клубничное мороженое»',
                'description' => 'Колье из розового кварца и позолоченной фурнитуры.',
                'prix' => 7000,
                'image' => '//necklace1.jpg',
                'category_id' => 3,
            ],
            [
                'nom' => 'Колье «Сумерки»',
                'description' => 'Двухрядное колье из кахолонга (магнезита) и ювелирной цепочки (ювелирный сплав, покрытие - родий).',
                'prix' => 4000,
                'image' => '//necklace2.jpg',
                'category_id' => 3,
            ],
            [
                'nom' => 'Колье «Чароитовая змейка»',
                'description' => 'Колье из натуральных камней: чароита и шпинели. Замок в виде головы и хвостика змеи из латуни, покрытие - родий, инкрустирован фианитами.',
                'prix' => 6500,
                'image' => '//necklace3.jpg',
                'category_id' => 3,
            ],

             // Чокеры (category_id = 4)
            [
                'nom' => 'Чокер «Орлиное гнездо»',
                'description' => 'Чокер из родонита. Фурнитура с покрытием золотом.',
                'prix' => 5000,
                'image' => '//chock1.jpg',
                'category_id' => 4,
            ],
            [
                'nom' => 'Чокер "Изумрудное цветение"',
                'description' => 'Невероятный изумрудный цвет и грация, лучшее украшение для вашей дамы.',
                'prix' => 5000,
                'image' => '//chock2.jpg',
                'category_id' => 4,
            ],
            [
                'nom' => 'Чокер "Бог Солнца"',
                'description' => 'Мифическое украшение заряженное силой добрых духов.',
                'prix' => 11000,
                'image' => '//chock3.jpg',
                'category_id' => 4,
            ],

             // Брошки (category_id = 5)
            [
                'nom' => 'Брошка "Булавка с Чароитом"',
                'description' => 'Фантастическая брошка с чароитом из натуральных камней с вод Байкала.',
                'prix' => 3500,
                'image' => '//brosh1.jpg',
                'category_id' => 5,
            ],
            [
                'nom' => 'Брошка "Булавка с Жемчугом"',
                'description' => 'Невероятный жемчуг и качественные материалы',
                'prix' => 3000,
                'image' => '//brosh2.jpg',
                'category_id' => 5,
            ],
            [
                'nom' => 'Брошка "Океанское наслаждение"',
                'description' => 'Энергия океана ваша!.',
                'prix' => 3000,
                'image' => '//brosh3.jpg',
                'category_id' => 5,
            ],

              // Сувениры (category_id = 6)
            [
                'nom' => 'Ловец снов 1',
                'description' => 'Ловец снов и добрых духов украшен натуральными камнями (байкальским нефритом, вулканической лавой), позолоченными бусинами и перьями.',
                'prix' => 2500,
                'image' => '//souvenir1.jpg',
                'category_id' => 6,
            ],
            [
                'nom' => 'Ловец снов «Агатовое солнышко»',
                'description' => 'Ловец снов и добрых духов украшен белым агатом, позолоченными кольцами, бусинами и перьями.',
                'prix' => 3000,
                'image' => '//souvenir2.jpg',
                'category_id' => 6,
            ],
            [
                'nom' => 'Ловец снов 3',
                'description' => 'Ловец снов и добрых духов украшен натуральными камнями (аметистом, вулканической лавой, агатом), родированными бусинами и перьями.',
                'prix' => 3000,
                'image' => '//souvenir3.jpg',
                'category_id' => 6,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}