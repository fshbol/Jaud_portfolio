@extends('layouts.content')

@section('title', 'Home')

@section('content')

<div class="hero-section">
    <div class="text-center header-image scroll-animate">
        <img src="{{ asset('assets/eriport.png') }}" 
            alt="Profile Header" 
            class="img-fluid" 
            style="max-width:600px; height:auto;">
    </div>
</div>

<div class="container my-5">

    @if($profiles->count() > 0)
    <div class="card mb-4 shadow-sm scroll-animate">
        <div class="row g-0 align-items-center">
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/me.jpg') }}" 
                     alt="{{ $profiles[0]->title }}" 
                     class="img-fluid rounded-circle" 
                     style="max-width:150px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2>{{ $profiles[0]->title }}</h2>
                    <p>{{ $profiles[0]->description }}</p>
                </div>
            </div>
        </div>
    </div>
    @endif


    <div class="text-center mb-5 scroll-animate">
        <h2 class="typing-title">
            I'm a <span class="type"></span>
        </h2>
    </div>

    <div class="row text-center">
        @foreach($profiles->skip(1)->take(3) as $profile)
        <div class="col-md-4 mb-4 scroll-animate">
            <div class="square-card p-3 shadow-sm d-flex flex-column h-100">
                <h3>{{ $profile->title }}</h3>
                <p class="mt-auto">{{ $profile->description }}</p>
            </div>
        </div>
        @endforeach
    </div>

</div>

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script>
    
    var typed = new Typed(".type", {
        strings: ["Artist.", "CS Student.", "Developer."],
        typeSpeed: 80,
        backSpeed: 60,
        loop: true,
    });

    document.addEventListener("DOMContentLoaded", function() {
        const elements = document.querySelectorAll(".scroll-animate");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    entry.target.classList.remove("hidden");
                } else {
                    entry.target.classList.remove("visible");
                    entry.target.classList.add("hidden");
                }
            });
        }, { threshold: 0.2 });

        elements.forEach(el => observer.observe(el));
    });
</script>

@endsection
