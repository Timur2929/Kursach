@extends('admin.layouts.app')

@section('title', isset($category) ? 'Edit Category' : 'Create Category')

@section('content')
<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">{{ isset($category) ? 'Edit' : 'Create' }} Category</h1>
        </div>
    </div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="{{ isset($category) ? route('admin.categories.update', $category->id) : route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($category))
                @method('PUT')
            @endif
            
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="nom" class="block text-sm font-medium text-gray-700">Category Name</label>
                            <input type="text" name="nom" id="nom" value="{{ old('nom', $category->nom ?? '') }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('nom')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Image Upload Field -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Category Image
                        </label>
                        <div class="mt-1 flex items-center">
                            @if(isset($category) && $category->image)
                                <img id="image-preview" src="{{ asset('storage/' . $category->image) }}" alt="Current category image" class="h-20 w-20 object-cover rounded-md">
                            @else
                                <img id="image-preview" src="" alt="Image preview" class="h-20 w-20 object-cover rounded-md hidden">
                            @endif
                            <div class="ml-4">
                                <input type="file" name="image" id="image" class="hidden" accept="image/*">
                                <label for="image" class="cursor-pointer bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ isset($category) && $category->image ? 'Change' : 'Upload' }} Image
                                </label>
                                @if(isset($category) && $category->image)
                                    <button type="button" id="remove-image" class="ml-2 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-red-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        Remove
                                    </button>
                                @endif
                                <input type="hidden" name="remove_image" id="remove-image-flag" value="0">
                            </div>
                        </div>
                        @error('image')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-2 text-sm text-gray-500">
                            Upload a square image for best results (recommended: 500x500px).
                        </p>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ isset($category) ? 'Update' : 'Save' }} Category
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const imageInput = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');
        const removeImageBtn = document.getElementById('remove-image');
        const removeImageFlag = document.getElementById('remove-image-flag');

        // Handle image selection
        imageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        });

        // Handle image removal
        if (removeImageBtn) {
            removeImageBtn.addEventListener('click', function() {
                imagePreview.src = '';
                imagePreview.classList.add('hidden');
                imageInput.value = '';
                removeImageFlag.value = '1';
                this.classList.add('hidden');
            });
        }
    });
</script>
@endpush
@endsection

