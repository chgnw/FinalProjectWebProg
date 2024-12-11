@extends('layouts.app')

@section('content')
    <h4 class="font-semibold text-3xl text-text leading-tight mb-4">All Articles</h4>

    @if ($articles->isEmpty())
        <div class="flex items-center justify-center font-bold text-text">
            Currently there's no article to show.
        </div>
    @else
        <div class="grid grid-cols-2 gap-4">
            @foreach ($articles as $article)
                <div class="max-w-2xl rounded-lg shadow px-4 py-2 bg-acc">
                    <div class="max-w-xl">
                        <img src="{{ asset('storage/' . $article->picture) }}" alt="{{ $article->title }}">
                    </div>

                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->title }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $article->short_desc }}</p>
                        <a href="{{ route('detail.articles', $article->id) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif



@endsection
