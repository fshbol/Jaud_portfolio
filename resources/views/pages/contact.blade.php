@extends('layouts.content')

@section('title', 'Contacts')

@section('content')

<div class="container my-5">
    <div class="row text-center">
        @foreach($contact as $contact)
        <div class="col-md-4 mb-4 scroll-animate">
            <div class="square-card p-3 shadow-sm d-flex flex-column h-100">
                <img src="{{ asset($contact->image) }}"
                     alt="{{ $contact->title }}"
                     class="mb-3 mx-auto"
                     style="width:80px; height:auto;">
                <h3>{{ $contact->title }}</h3>
                <p class="mt-auto">
                    @if($contact->title === 'Email')
                        {{-- Show email as plain text (not clickable) --}}
                        {{ $contact->description }}
                    @else
                        {{-- Make other links clickable --}}
                        <a href="{{ $contact->description }}" target="_blank">
                            {{ $contact->description }}
                        </a>
                    @endif
                </p>
            </div>
        </div>
        @endforeach
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
