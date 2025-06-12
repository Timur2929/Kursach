@extends('layouts.app')

@section('content')

<div class="bg-emerald-50 py-12"> <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> <!-- Заголовок --> <div class="text-center mb-12"> <h1 class="text-3xl font-bold text-emerald-800 mb-4">Доставка и возврат</h1> <p class="text-lg text-gray-600 max-w-2xl mx-auto"> Ознакомьтесь с нашей политикой доставки и возврата для спокойных покупок. </p> </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Доставка -->
        <div class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100">
            <div class="flex items-center mb-6">
                <div class="bg-emerald-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-emerald-800">Доставка</h2>
            </div>

            <div class="space-y-6">
                <div>
                    <h3 class="font-medium text-emerald-700 mb-2">Сроки доставки</h3>
                    <ul class="list-disc pl-5 space-y-1 text-gray-600">
                        <li>По России: 3-5 рабочих дней</li>
                        <li>СНГ: 5-7 рабочих дней</li>
                        <li>Международная доставка: 7-14 рабочих дней</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-medium text-emerald-700 mb-2">Стоимость доставки</h3>
                    <ul class="list-disc pl-5 space-y-1 text-gray-600">
                        <li>Бесплатная стандартная доставка при заказе от 10 000 ₽</li>
                        <li>По России: 290 ₽ (стандарт), 590 ₽ (экспресс)</li>
                        <li>СНГ: 790 ₽ (стандарт), 1 490 ₽ (экспресс)</li>
                        <li>Международная: 1 290 ₽ (стандарт), 2 490 ₽ (экспресс)</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-medium text-emerald-700 mb-2">Отслеживание заказа</h3>
                    <p class="text-gray-600">
                        Все заказы отправляются с номером для отслеживания. Вы получите email с подтверждением и номером отслеживания, как только ваш заказ будет отправлен.
                    </p>
                </div>
            </div>
        </div>

        <!-- Возврат -->
        <div class="bg-white p-8 rounded-xl shadow-lg border border-emerald-100">
            <div class="flex items-center mb-6">
                <div class="bg-emerald-100 p-3 rounded-full mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-emerald-800">Возврат и обмен</h2>
            </div>

            <div class="space-y-6">
                <div>
                    <h3 class="font-medium text-emerald-700 mb-2">Политика возврата</h3>
                    <p class="text-gray-600 mb-3">
                        У вас есть 14 дней с момента получения заказа, чтобы вернуть товар, если он вам не подошел.
                    </p>
                    <ul class="list-disc pl-5 space-y-1 text-gray-600">
                        <li>Товары должны быть новыми, неиспользованными и в оригинальной упаковке</li>
                        <li>Персонализированные товары возврату не подлежат</li>
                        <li>Расходы по возврату оплачиваются покупателем</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-medium text-emerald-700 mb-2">Процесс возврата</h3>
                    <ol class="list-decimal pl-5 space-y-2 text-gray-600">
                        <li>Войдите в свой аккаунт и перейдите в раздел "Мои заказы"</li>
                        <li>Выберите товар для возврата и следуйте инструкциям</li>
                        <li>Распечатайте предоставленную этикетку возврата</li>
                        <li>Отправьте посылку в течение 7 дней после запроса на возврат</li>
                    </ol>
                </div>

                <div>
                    <h3 class="font-medium text-emerald-700 mb-2">Возврат средств</h3>
                    <p class="text-gray-600">
                        После получения и проверки возврата мы отправим вам email с подтверждением одобрения возврата. Средства будут возвращены в течение 5 рабочих дней на исходный способ оплаты.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Раздел FAQ -->

</div>
</div> @endsection