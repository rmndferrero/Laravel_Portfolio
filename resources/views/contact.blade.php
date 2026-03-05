@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <h2 class="mb-4 border-bottom pb-2">Contact Information</h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm text-center">
            <div class="card-body p-5">
                <h4 class="mb-4">Let's Connect</h4>
                
                <ul class="list-unstyled fs-5">
                    <li class="mb-3">
                        <strong>Email:</strong> <br>
                        <a href="mailto:{{ $contact->email }}" class="text-decoration-none">{{ $contact->email }}</a>
                    </li>
                    <li class="mb-3">
                        <strong>Phone:</strong> <br>
                        <span class="text-muted">{{ $contact->phone ?? 'Not provided' }}</span>
                    </li>
                    <li class="mb-3">
                        <strong>GitHub:</strong> <br>
                        <a href="{{ $contact->github_url }}" target="_blank" class="text-decoration-none">{{ $contact->github_url }}</a>
                    </li>
                    <li class="mb-3">
                        <strong>LinkedIn:</strong> <br>
                        <a href="{{ $contact->linkedin_url }}" target="_blank" class="text-decoration-none">{{ $contact->linkedin_url }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection