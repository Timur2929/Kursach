@extends('admin.layouts.app')

@section('title', 'Управление скидками')

@section('content')

<div class="px-4 sm:px-6 lg:px-8"> <div class="sm:flex sm:items-center"> <div class="sm:flex-auto"> <h1 class="text-xl font-semibold text-gray-900">Управление скидками</h1> <p class="mt-2 text-sm text-gray-700">Управляйте всеми промокодами и акциями</p> </div> <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none"> <a href="{{ route('admin.discounts.create') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"> Добавить скидку </a> </div> </div>

<div class="mt-8 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Код
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Сумма
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Тип
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Дата окончания
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Статус
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Действия
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Действия</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse ($discounts as $discount)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-medium text-gray-900">
                        <span class="font-mono bg-gray-100 px-2 py-1 rounded">{{ $discount->code }}</span>
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">
                        @if($discount->type === 'percentage')
                            {{ $discount->montant_remise }}%
                        @else
                            {{ number_format($discount->montant_remise, 2) }}₽
                        @endif
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">
                        {{ ucfirst($discount->type === 'percentage' ? 'Процент' : 'Фиксированная сумма') }}
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">
                        {{ $discount->date_expiration ? $discount->date_expiration->format('d/m/Y') : 'Без срока' }}
                    </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                        @if($discount->isActive()) bg-green-100 text-green-800
                        @else bg-red-100 text-red-800
                        @endif">
                        {{ $discount->isActive() ? 'Активна' : 'Истекла' }}
                    </span>
                </td>
            
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href=""
                        class="text-indigo-600 hover:text-indigo-900 mr-3">Изменить</a>
                        <form action=""
                            method="POST" class="inline">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Вы уверены, что хотите удалить эту скидку?')">Удалить</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500">
                    Скидки не найдены. <a href="{{ route('admin.discounts.create') }}" class="text-indigo-600 hover:text-indigo-900">Создать скидку</a>.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $discounts->links() }}
</div>
</div> @endsection