@extends('layouts.app')
@section('content')
<div class="flex justify-center items-center h-screen">
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-white-700">
        About Us
    </h1>
</div>
<div class="flex">
    <div class="w-1/2 p-4">
        <img class="max-w-[500px] max-h-[300px] w-full h-auto object-contain" src="{{ asset('images/Cartoon-illustration-online-learning-vector.jpg') }}" alt="Learning Image">
    </div>
    <div class="w-1/2 p-4">
        <div class="p-10  text-white">
            <p class="text-3xl"><strong>Who are We?</strong></p>
            <p class="text-lg leading-relaxed">
                <strong>Brand ini merupakan platform pembelajaran online</strong> yang menyediakan <span class="text-red-500">artikel-artikel berkualitas</span> untuk membantu pelajar dan pendidik dalam meningkatkan pemahaman mereka. 
                Dengan fokus pada pembelajaran yang efektif dan interaktif, kami menawarkan berbagai topik mulai dari sains, matematika, hingga keterampilan praktis lainnya. 
                Misi kami adalah menyediakan <span class="text-red-500">sumber daya</span> yang dapat
            </p>
        </div>    
    </div>
</div>

@endsection