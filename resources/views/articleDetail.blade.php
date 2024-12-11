@extends('layouts.app')

@section('content')
    <div class="rounded-md px-4 py-2 bg-acc space-y-6">
        <div class="">
            <h1 class="font-bold text-4xl">{{ $article->title }}</h1>
            <h4 class="font-medium text-lg">Written by {{ $article->author }} | {{ $article->category->name }}</h4>
        </div>

        <div class="flex items-center justify-center">
            <img src="{{ asset('storage/' . $article->photo) }}" alt="" class="w-[600px]">
        </div>

        <p class="text-justify text-xl indent-8">
            {{ $article->content }}
        </p>
    </div>
@endsection
