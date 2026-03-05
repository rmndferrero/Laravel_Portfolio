@extends('layouts.app')

@section('content')
<h2 class="mb-4">My Projects</h2>

<div class="row">
    @foreach($projects as $project)
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="{{ $project->github_link }}" class="btn btn-outline-primary btn-sm" target="_blank">View on GitHub</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection