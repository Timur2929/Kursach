@extends('layouts.app')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow rounded-lg p-8 text-center">
            <svg class="mx-auto h-12 w-12 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            
            <h1 class="mt-4 text-3xl font-bold text-gray-900">Заказ подтверждён</h1>
            <p class="mt-2 text-lg text-gray-600">Спасибо за покупку!</p>
            
            <div class="mt-6">
                <p class="text-sm text-gray-500">Номер заказа</p>
                <p class="text-lg font-medium text-gray-900">{{ $orderId }}</p>
            </div>
            
            <div class="mt-8">
                <p class="text-gray-600">Мы отправили письмо с подтверждением на <span class="font-medium">{{ auth()->user()->email }}</span>.</p>
                <p class="text-gray-600 mt-2">Вы получите уведомление, когда заказ будет отправлен.</p>
            </div>
            
            <div class="mt-8">
                <a href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-emerald-600 hover:bg-emerald-700">
                    Вернуться на главную
                </a>
            </div>
        </div>
    </div>
</div>
@endsection