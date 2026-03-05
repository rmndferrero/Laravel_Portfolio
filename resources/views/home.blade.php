@extends('layouts.app')

@section('content')
<div class="row align-items-center mb-5 mt-4 p-5 bg-light rounded-3 shadow-sm">
    <div class="col-lg-10">
        <h1 class="display-4 fw-bold mb-3">Hello, I'm {{ $profile->name }}</h1>
        <h3 class="text-primary mb-3">{{ $profile->tagline }}</h3>
        <p class="lead text-secondary">{{ $profile->bio }}</p>
    </div>
</div>

<h4 class="mb-4 text-center border-bottom pb-2">Explore My Portfolio</h4>
<div class="row g-4 text-center">
    
    <div class="col-md-3">
        <a href="{{ route('skills') }}" class="text-decoration-none">
            <div class="card shadow-sm h-100 py-4 border-0 border-bottom border-primary border-4 bg-white">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">My Skills</h5>
                    <p class="text-muted small mb-0">Languages, frameworks, & tools</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3">
        <a href="{{ route('projects') }}" class="text-decoration-none">
            <div class="card shadow-sm h-100 py-4 border-0 border-bottom border-success border-4 bg-white">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">Projects</h5>
                    <p class="text-muted small mb-0">Games, apps, & research</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3">
        <a href="{{ route('experience') }}" class="text-decoration-none">
            <div class="card shadow-sm h-100 py-4 border-0 border-bottom border-warning border-4 bg-white">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">Experience</h5>
                    <p class="text-muted small mb-0">Education & background</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-3">
        <a href="{{ route('contact') }}" class="text-decoration-none">
            <div class="card shadow-sm h-100 py-4 border-0 border-bottom border-info border-4 bg-white">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">Contact</h5>
                    <p class="text-muted small mb-0">Let's get in touch</p>
                </div>
            </div>
        </a>
    </div>

</div>
@endsection