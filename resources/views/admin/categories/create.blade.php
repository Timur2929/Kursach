@extends('admin.layouts.app')

@section('title', isset($category) ? 'Редактирование категории' : 'Создание категории')

@section('content')
<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">{{ isset($category) ? 'Редактировать' : 'Создать' }} категорию</h1>
        </div>
    </div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{ isset($category) ? route('admin.categories.update', $category->id) : route('admin.categories.store') }}" 
            method="POST" 
            enctype="multipart/form-data">
          @csrf
          @if(isset($category))
              @method('PUT')
          @endif
          
          <!-- Rest of your form -->
    
            
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="nom" class="block text-sm font-medium text-gray-700">Название категории</label>
                            <input type="text" name="nom" id="nom" value="{{ old('nom', $category->nom ?? '') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('nom')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image" class="block text-sm font-medium text-gray-700">Изображение категории</label>
                        <input type="file" name="image" id="image" class="mt-1 block w-full">
                        @error('image')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ isset($category) ? 'Обновить' : 'Сохранить' }} категорию
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection