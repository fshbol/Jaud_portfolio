@extends('layouts.content')

@section('title', 'Projects')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 scroll-animate">My Projects</h1>

    <div class="d-flex justify-content-center scroll-animate">
        <div class="card text-center shadow-sm" style="width: 24rem;">
            @foreach($project as $p)
                <div class="project-item @if($loop->first) active @else d-none @endif">
                    <img src="{{ asset($p->image) }}" class="card-img-top" alt="{{ $p->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->title }}</h5>
                        <p class="card-text">{{ $p->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="text-center mt-3 scroll-animate">
        <button class="btn btn-dark me-2" id="prevBtn">❮</button>
        <button class="btn btn-dark" id="nextBtn">❯</button>
    </div>
</div>

<script>
const projects = document.querySelectorAll('.project-item');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
let index = 0;

function showProject(i) {
    projects.forEach((proj, idx) => {
        if(idx === i){
            proj.classList.remove('d-none');
            proj.classList.add('active');
        } else {
            proj.classList.add('d-none');
            proj.classList.remove('active');
        }
    });
}

prevBtn.addEventListener('click', () => {
    index = (index - 1 + projects.length) % projects.length;
    showProject(index);
});

nextBtn.addEventListener('click', () => {
    index = (index + 1) % projects.length;
    showProject(index);
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
