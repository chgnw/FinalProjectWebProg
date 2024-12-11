@extends('layouts.app')
@section('content')
<div class="flex justify-center items-center h-screen">
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl text-white-700">
        About Us
    </h1>
</div>
<div class="flex flex-wrap md:flex-nowrap">
    <div class="w-full md:w-1/2 p-4 flex justify-center items-center">
        <img class="max-w-full h-auto object-contain" src="{{ asset('images/Cartoon-illustration-online-learning-vector.jpg') }}" alt="Learning Image">
    </div>
    <div class="w-full md:w-1/2 p-4">
        <div class="p-6 text-white">
            <p class="text-3xl mb-4"><strong>Who are We?</strong></p>
            <p class="text-lg leading-relaxed">
                <strong>Brand ini merupakan platform pembelajaran online</strong> yang menyediakan <span class="text-red-500">artikel-artikel berkualitas</span> untuk membantu pelajar dan pendidik dalam meningkatkan pemahaman mereka. 
                Dengan fokus pada pembelajaran yang efektif dan interaktif, kami menawarkan berbagai topik mulai dari sains, matematika, hingga keterampilan praktis lainnya. 
                Misi kami adalah menyediakan <span class="text-red-500">sumber daya</span> yang dapat diakses oleh siapa saja, kapan saja, dan di mana saja untuk mendukung pembelajaran yang inklusif dan berkualitas. Kami percaya bahwa pendidikan 
                adalah kunci untuk masa depan yang lebih baik, dan dengan menyediakan konten yang relevan dan mudah dipahami, kami berkomitmen untuk membantu pelajar dan pendidik mencapai tujuan mereka.
            </p>
        </div>
    </div>
</div>

@endsection