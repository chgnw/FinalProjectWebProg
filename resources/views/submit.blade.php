@extends('layouts.app')
@section('content')
    <form class="space-y-4" method="POST" enctype="multipart/form-data" action="/submit/store" id="articleForm">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-lg font-medium text-text">Title*</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-acc"/>
        </div>

        <div class="mb-4">
            <label for="desc" class="block text-lg font-medium text-text">Description*</label>
            <input type="text" name="desc" id="desc" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-acc"/>
        </div>

        <div class="mb-4">
            <label for="photo" class="block text-lg font-medium text-text">Photo*</label>
            <input type="file" name="photo" id="photo" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-text"/>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-lg font-medium text-text">Content*</label>
            <textarea name="content" id="content" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-acc"></textarea>
        </div>

        <div class="mb-4">
            <label for="author" class="block text-lg font-medium text-text">Author*</label>
            <input type="text" name="author" id="author" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-acc"/>
        </div>

        <div class="mb-4 flex flex-col">
            <label for="category_id" class="block text-lg font-medium text-text">Category*</label>
            <select name="category_id" id="category_id" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-acc">
                <option value="">Choose the category</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div id="warningMessage" class="hidden text-red-500 mb-4 p-2 border border-red-500 rounded-md bg-red-100">
            Please fill in all required fields.
        </div>

        <button type="submit" class="mt-4 bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700">
            Submit New Article
        </button>
    </form>

    {{-- <script>
        document.getElementById('articleForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const requiredFields = ['title', 'short_desc', 'content', 'author_id', 'category_id'];
            let allFilled = true;

            requiredFields.forEach(function(field) {
                const input = document.getElementById(field);
                if (!input.value) {
                    allFilled = false;
                }
            });

            const warningMessage = document.getElementById('warningMessage');
            if (!allFilled) {
                warningMessage.classList.remove('hidden');
            } else {
                warningMessage.classList.add('hidden');
                this.submit();
            }
        });
    </script> --}}
@endsection
