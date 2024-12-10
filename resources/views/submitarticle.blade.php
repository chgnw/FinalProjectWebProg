@extends('layouts.app')
@section('content')
<form class="space-y-4"method='Post'encytype='multipart/form-data'action="{{route('storearticle')}}">
    @csrf
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-black" placeholder=""/>
    </div>

    <div class="mb-4">
        <label for="short_desc" class="block text-sm font-medium text-gray-700">Short Description</label>
        <input type="text" name="short_desc" id="short_desc" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-black" placeholder=""/>
    </div>

    <div class="mb-4">
        <label for="picture" class="block text-sm font-medium text-gray-700">Picture</label>
        <input type="file" name="picture" id="picture" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-black" placeholder=""/>
    </div>

    <div class="mb-4">
        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
        <input type="text" name="content" id="content" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-black" placeholder=""/>
    </div>

    <div class="mb-4">
        <label for="author_id" class="block text-sm font-medium text-gray-700">Author ID</label>
        <input type="number" name="author_id" id="author_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-black" placeholder=""/>
    </div>

    <div class="mb-4">
        <label for="category_id" class="block text-sm font-medium text-gray-700">Category ID</label>
        <input type="number" name="category_id" id="category_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500 text-black" placeholder=""/>
    </div>

    <div id="warningMessage" class="hidden text-red-500 mb-4 p-2 border border-red-500 rounded-md bg-red-100">
        Please fill in all required fields.
    </div>

    <input class="mt-4 bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700" type="submit" value="Submit New Article">
</form>

<script>
    document.getElementById('studentForm').addEventListener('submit', function(event) {
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
</script>
@endsection
