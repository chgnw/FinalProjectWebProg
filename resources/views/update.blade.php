@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">Edit Article</h2>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="/article/{{ $article->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-lg font-medium text-text">Title*</label>
            <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-acc"/>
        </div>

        <div class="mb-4">
            <label for="desc" class="block text-lg font-medium text-text">Description*</label>
            <input type="text" name="desc" id="desc" value="{{ old('desc', $article->desc) }}" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-acc"/>
        </div>

        <div class="mb-4">
            <label for="photo" class="block text-lg font-medium text-text">New Photo (Optional)</label>
            <input type="file" name="photo" id="photo" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-text"/>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-lg font-medium text-text">Content*</label>
            <textarea name="content" id="content" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-acc">{{ old('content', $article->content) }}</textarea>
        </div>

        <div class="mb-4">
            <label for="author" class="block text-lg font-medium text-text">Author*</label>
            <input type="text" name="author" id="author" value="{{ old('author', $article->author) }}" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-acc"/>
        </div>

        <div class="mb-4 flex flex-col">
            <label for="category_id" class="block text-lg font-medium text-text">Category*</label>
            <select name="category_id" id="category_id" class="mt-1 block w-full border rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-acc">
                <option value="">Choose the category</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="mt-4 bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700">
            Update Article
        </button>
    </form>
</div>
@endsection
