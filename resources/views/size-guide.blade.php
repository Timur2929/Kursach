@extends('layouts.app')

@section('content')
<div class="bg-emerald-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Заголовок -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-emerald-800 mb-4">Руководство по размерам</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Найдите идеальный размер для ваших украшений Emeraude Jewelry
            </p>
        </div>

        <!-- Навигация по разделам -->
        <div class="mb-8 flex flex-wrap justify-center gap-2">
            <a href="#bagues" class="px-4 py-2 bg-emerald-600 text-white rounded-full text-sm font-medium">Кольца</a>
            <a href="#colliers" class="px-4 py-2 bg-white text-emerald-700 border border-emerald-200 rounded-full text-sm font-medium hover:bg-emerald-50">Ожерелья</a>
            <a href="#bracelets" class="px-4 py-2 bg-white text-emerald-700 border border-emerald-200 rounded-full text-sm font-medium hover:bg-emerald-50">Браслеты</a>
            <a href="#boucles" class="px-4 py-2 bg-white text-emerald-700 border border-emerald-200 rounded-full text-sm font-medium hover:bg-emerald-50">Серьги</a>
        </div>

        <!-- Раздел для колец -->
        <div id="bagues" class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100 mb-12">
            <div class="flex items-center mb-6">
                <div class="bg-emerald-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6m6-6v12m6-6a2 2 0 100-4 2 2 0 000 4z" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-emerald-800">Руководство по размерам колец</h2>
            </div>

            <div class="mb-6">
                <h3 class="font-medium text-emerald-700 mb-3">Как измерить размер пальца</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-emerald-50 p-4 rounded-lg">
                        <h4 class="font-medium text-emerald-800 mb-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                            </svg>
                            Способ 1: С помощью кольцемера
                        </h4>
                        <p class="text-gray-600 text-sm">Используйте наш печатный кольцемер или примерьте разные размеры в ювелирном магазине.</p>
                    </div>
                    <div class="bg-emerald-50 p-4 rounded-lg">
                        <h4 class="font-medium text-emerald-800 mb-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                            </svg>
                            Способ 2: Измерьте палец
                        </h4>
                        <p class="text-gray-600 text-sm">Оберните полоску бумаги вокруг пальца, отметьте место соединения и измерьте длину в мм.</p>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <h3 class="font-medium text-emerald-700 mb-3">Таблица международных размеров</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-emerald-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-emerald-800 uppercase tracking-wider">Россия</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-emerald-800 uppercase tracking-wider">Диаметр (мм)</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-emerald-800 uppercase tracking-wider">Окружность (мм)</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-emerald-800 uppercase tracking-wider">США/Канада</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-emerald-800 uppercase tracking-wider">Великобритания/Австралия</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">44</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14.0 мм</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">44.0 мм</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">F½</td>
                        </tr>
                        <tr class="bg-emerald-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">46</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14.6 мм</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">46.0 мм</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">H</td>
                        </tr>
                        <!-- Дополнительные строки при необходимости -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Раздел для ожерелий -->
        <div id="colliers" class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100 mb-12">
            <div class="flex items-center mb-6">
                <div class="bg-emerald-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 15.536c-1.171 1.952-3.07 1.952-4.242 0-1.172-1.953-1.172-5.119 0-7.072 1.171-1.952 3.07-1.952 4.242 0M8 10.5h4m-4 3h4m9-1.5a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-emerald-800">Руководство по размерам ожерелий</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-medium text-emerald-700 mb-3">Стандартные длины</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">38 см</span>
                            <span>Ожерелье-чокер (плотно облегает шею)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">42-45 см</span>
                            <span>Принцесса (на уровне ключицы)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">50-60 см</span>
                            <span>Матине (достигает области между грудями)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">70-90 см</span>
                            <span>Опера (можно носить в два оборота)</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium text-emerald-700 mb-3">Как выбрать</h3>
                    <div class="bg-emerald-50 p-4 rounded-lg">
                        <p class="text-gray-600 mb-3">Чтобы определить идеальную длину:</p>
                        <ol class="list-decimal pl-5 space-y-1 text-sm">
                            <li>Измерьте обхват шеи сантиметровой лентой</li>
                            <li>Добавьте 5-10 см в зависимости от желаемого эффекта</li>
                            <li>Для подвесок учитывайте их дополнительную длину</li>
                        </ol>
                        <p class="mt-3 text-gray-600 text-sm">Наши ожерелья регулируются на ±2 см для большего удобства.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Раздел для браслетов -->
        <div id="bracelets" class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100 mb-12">
            <div class="flex items-center mb-6">
                <div class="bg-emerald-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 15.536c-1.171 1.952-3.07 1.952-4.242 0-1.172-1.953-1.172-5.119 0-7.072 1.171-1.952 3.07-1.952 4.242 0M8 10.5h4m-4 3h4m9-1.5a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-emerald-800">Руководство по размерам браслетов</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-medium text-emerald-700 mb-3">Стандартные размеры</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">14 см</span>
                            <span>Детский размер</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">16-17 см</span>
                            <span>Женский размер (тонкое запястье)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">18-19 см</span>
                            <span>Стандартный женский размер</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">20-22 см</span>
                            <span>Мужской размер</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium text-emerald-700 mb-3">Как измерить</h3>
                    <div class="bg-emerald-50 p-4 rounded-lg">
                        <p class="text-gray-600 mb-3">Для определения размера запястья:</p>
                        <ol class="list-decimal pl-5 space-y-1 text-sm">
                            <li>Измерьте обхват запястья в самой узкой части</li>
                            <li>Добавьте 1-2 см для комфортной посадки</li>
                            <li>Для браслетов-цепей учитывайте их конструкцию</li>
                        </ol>
                        <p class="mt-3 text-gray-600 text-sm">Большинство наших браслетов регулируются по длине.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Раздел для серег -->
        <div id="boucles" class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100 mb-12">
            <div class="flex items-center mb-6">
                <div class="bg-emerald-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 15.536c-1.171 1.952-3.07 1.952-4.242 0-1.172-1.953-1.172-5.119 0-7.072 1.171-1.952 3.07-1.952 4.242 0M8 10.5h4m-4 3h4m9-1.5a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-emerald-800">Руководство по размерам серег</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="font-medium text-emerald-700 mb-3">Размеры серег</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">5-10 мм</span>
                            <span>Маленькие гвоздики или мини-подвески</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">15-25 мм</span>
                            <span>Средние серьги (стандартный размер)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">30-50 мм</span>
                            <span>Крупные серьги (длинные подвески)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">50+ мм</span>
                            <span>Очень длинные серьги (до плеч)</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium text-emerald-700 mb-3">Как выбрать</h3>
                    <div class="bg-emerald-50 p-4 rounded-lg">
                        <p class="text-gray-600 mb-3">При выборе серег учитывайте:</p>
                        <ol class="list-decimal pl-5 space-y-1 text-sm">
                            <li>Форма лица - длинные серьги удлиняют, круглые - смягчают</li>
                            <li>Толщина мочки - для тонких мочек лучше легкие серьги</li>
                            <li>Повседневность или особый случай</li>
                        </ol>
                        <p class="mt-3 text-gray-600 text-sm">Все наши серьги имеют гипоаллергенную фурнитуру.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Секция помощи -->
        <div class="text-center bg-white p-8 rounded-xl shadow-lg border border-emerald-100">
            <h3 class="text-lg font-medium text-emerald-800 mb-4">Нужна помощь в выборе размера?</h3>
            <p class="text-gray-600 mb-6">Наши консультанты готовы помочь вам.</p>
            <a href="{{ route('contact.show') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                Связаться с нами
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 -mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection