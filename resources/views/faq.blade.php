@extends('layouts.app')

@section('content')

<div class="bg-emerald-50 py-12"> <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8"> <!-- Заголовок --> <div class="text-center mb-12"> <h1 class="text-3xl font-bold text-emerald-800 mb-4">Часто задаваемые вопросы</h1> <p class="text-lg text-gray-600"> Найдите ответы на самые распространенные вопросы о наших украшениях, заказах и услугах. </p> </div>

    <!-- Аккордеон FAQ -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden border border-emerald-100">
        <!-- Раздел "Заказы" -->
        <div class="border-b border-gray-200">
            <h3 class="px-6 py-4 bg-emerald-50 text-emerald-800 font-semibold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                </svg>
                Заказы
            </h3>
            
            <div class="divide-y divide-gray-200">
                <!-- Вопрос 1 -->
                <div x-data="{ open: false }" class="px-6 py-4">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left">
                        <span class="font-medium text-emerald-700">Как отследить мой заказ?</span>
                        <svg :class="{ 'transform rotate-180': open }" class="h-5 w-5 text-emerald-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="mt-2 text-gray-600">
                        <p>Как только ваш заказ будет отправлен, вы получите электронное письмо с подтверждением, содержащее номер для отслеживания. Вы можете отслеживать статус доставки, перейдя по ссылке в письме или введя номер на сайте транспортной компании.</p>
                    </div>
                </div>
                
                <!-- Вопрос 2 -->
                <div x-data="{ open: false }" class="px-6 py-4">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left">
                        <span class="font-medium text-emerald-700">Могу ли я изменить или отменить заказ?</span>
                        <svg :class="{ 'transform rotate-180': open }" class="h-5 w-5 text-emerald-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="mt-2 text-gray-600">
                        <p>Вы можете изменить или отменить заказ в течение 1 часа после оформления. По истечении этого срока, пожалуйста, немедленно свяжитесь с нами по email <a href="mailto:vk.com/kamenika" class="text-emerald-600 hover:underline">vk.com/kamenika</a> или по телефону +79099099988. Мы сделаем все возможное, чтобы учесть ваши пожелания.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Раздел "Доставка" -->
        <div class="border-b border-gray-200">
            <h3 class="px-6 py-4 bg-emerald-50 text-emerald-800 font-semibold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                </svg>
                Доставка
            </h3>
            
            <div class="divide-y divide-gray-200">
                <!-- Вопрос 1 -->
                <div x-data="{ open: false }" class="px-6 py-4">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left">
                        <span class="font-medium text-emerald-700">Какие сроки доставки?</span>
                        <svg :class="{ 'transform rotate-180': open }" class="h-5 w-5 text-emerald-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="mt-2 text-gray-600">
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Россия: 2-3 рабочих дня</li>
                            <li>Европа: 3-5 рабочих дней</li>
                            <li>Международные заказы: 5-10 рабочих дней</li>
                        </ul>
                        <p class="mt-2">Сроки доставки отсчитываются с момента отправки заказа. Вы получите уведомление по email, когда заказ будет отправлен.</p>
                    </div>
                </div>
                
                <!-- Вопрос 2 -->
                <div x-data="{ open: false }" class="px-6 py-4">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left">
                        <span class="font-medium text-emerald-700">Вы осуществляете международную доставку?</span>
                        <svg :class="{ 'transform rotate-180': open }" class="h-5 w-5 text-emerald-500 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" x-collapse class="mt-2 text-gray-600">
                        <p>Да, мы доставляем по всему миру. Стоимость и сроки доставки зависят от страны назначения:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Европа: 9,90€ (стандартная), 19,90€ (экспресс)</li>
                            <li>Северная Америка: 14,90€ (стандартная), 29,90€ (экспресс)</li>
                            <li>Азия/Океания: 19,90€ (стандартная), 39,90€ (экспресс)</li>
                        </ul>
                        <p class="mt-2">Международные заказы могут облагаться таможенными пошлинами и налогами, которые оплачивает получатель.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Блок контактов -->
        <div class="text-center p-8 bg-emerald-50">
            <h3 class="text-lg font-medium text-emerald-800 mb-4">Не нашли ответ на свой вопрос?</h3>
            <p class="text-gray-600 mb-6">Наша служба поддержки готова вам помочь.</p>
            <a href="{{ route('contact.show') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                Связаться с нами
                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 -mr-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</div>
</div><!-- AlpineJS для работы аккордеона --><script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection