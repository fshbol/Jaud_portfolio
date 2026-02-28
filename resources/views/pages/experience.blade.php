@extends('layouts.content')

@section('title', 'Experience')

@section('content')

<div class="container my-5">
    <h1 class="text-center mb-4 scroll-animate">My Experience</h1>
    <div class="row">
        @foreach($experience as $experience)
            <div class="col-md-4 mb-4 scroll-animate">
                <div class="card h-100 shadow-sm p-3">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title text-center mb-3">{{ $experience->title }}</h4>
                        <p class="card-text flex-grow-1">{{ $experience->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h2 class="CardPrev scroll-animate">Project Previews</h2>
    <div class="card1-container">
        <div class="card1 scroll-animate">
            <img src="{{ asset('assets/lccb.png') }}" alt="lccb">
        </div>
        <div class="card1 scroll-animate">
            <img src="{{ asset('assets/stjo.png') }}" alt="usls">
        </div>
        <div class="card1 scroll-animate">
            <img src="{{ asset('assets/usls.jpg') }}" alt="stjo">
        </div>
    </div>
</div>

<script>
    
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
