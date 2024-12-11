@extends('layouts.app')


@section('content')
    <section class="mb-8 space-y-4">
        <h2 class="font-semibold text-3xl text-text leading-tight">
            Articles
        </h2>

        @if (isset($data))
            <h2 class="text-text font-semibold text-xl">Result for "{{ $data }}"</h2>

            @if ($articles -> isEmpty())
                <p class="text-center font-bold text-4xl">No related articles found.</p>
            @else
                <ul class="grid grid-cols-3 gap-4">
                    @foreach ($articles as $article)
                        <div class="max-w-lg rounded-lg shadow bg-gray-800 border-gray-700">
                            <a href="#" class="max-w-xl">
                                <img class="rounded-t-lg w-full h-72" src="{{ asset('storage/' . $article->photo) }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $article->title }}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $article->desc }}</p>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>

                                @auth
                                    <a href="/article/{{ $article->id }}/edit">
                                        <button  class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-200 bg-gray-500 mt-2 rounded-lg hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-700 transition">
                                            Update
                                        </button>
                                    </a>
                                    <form action="/articles/delete/{{ $article->id }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-200 bg-red-500 mt-2 rounded-lg hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-700 transition">
                                            Delete
                                        </button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    @endforeach
                </ul>
            @endif
        @endif
    </section>

@endsection
