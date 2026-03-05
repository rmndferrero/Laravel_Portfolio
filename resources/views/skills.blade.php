@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h2 class="mb-4 border-bottom pb-2">My Skills</h2>
    </div>
</div>

<div class="row">
    @foreach($skills as $skill)
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">{{ $skill->name }}</h5>
                    <span class="badge bg-primary rounded-pill px-3 py-2">
                        {{ $skill->proficiency_level }}
                    </span>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection