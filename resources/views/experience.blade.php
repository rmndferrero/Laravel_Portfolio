@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h2 class="mb-4 border-bottom pb-2">Experience & Education</h2>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 mx-auto">
        @foreach($experiences as $experience)
            <div class="card shadow-sm mb-4 border-start border-4 border-primary">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h4 class="card-title text-primary mb-0">{{ $experience->title }}</h4>
                        <span class="badge bg-secondary">{{ $experience->type }}</span>
                    </div>
                    <h6 class="card-subtitle mb-3 text-muted">
                        <strong>{{ $experience->institution_or_company }}</strong> | 
                        {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }} - 
                        {{ $experience->end_date ? \Carbon\Carbon::parse($experience->end_date)->format('M Y') : 'Present' }}
                    </h6>
                    <p class="card-text">{{ $experience->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection