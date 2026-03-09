@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-5xl px-6 py-16 md:py-24" id="home">
    <div class="flex flex-col items-center text-center">

        {{-- Social Media Icons --}}
        <div class="mb-8 flex justify-center gap-4">
            <a class="group flex h-12 w-12 items-center justify-center rounded-full bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-primary hover:text-white transition-all shadow-sm"
               href="{{ route('projects') }}">
                <span class="material-symbols-outlined">code</span>
            </a>
            <a class="group flex h-12 w-12 items-center justify-center rounded-full bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-primary hover:text-white transition-all shadow-sm"
               href="{{ route('contact') }}">
                <span class="material-symbols-outlined">alternate_email</span>
            </a>
        </div>

        {{-- Profile Image --}}
        <div class="relative mb-10">
            <div class="absolute -inset-1 rounded-full bg-gradient-to-tr from-primary to-blue-400 blur opacity-30"></div>
            <div class="relative h-48 w-48 md:h-64 md:w-64 overflow-hidden rounded-full border-4 border-white dark:border-slate-900 shadow-xl bg-slate-100">
                @if(isset($profile->avatar))
                    <img alt="{{ $profile->name }} Portrait"
                         class="h-full w-full object-cover"
                         src="{{ asset('storage/' . $profile->avatar) }}"/>
                @else
                    <div class="flex h-full w-full items-center justify-center bg-slate-200 dark:bg-slate-800">
                        <span class="material-symbols-outlined text-6xl text-slate-400">person</span>
                    </div>
                @endif
            </div>
        </div>

        {{-- Introduction --}}
        <div class="max-w-2xl">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight md:text-6xl text-slate-900 dark:text-slate-50">
                {{ $profile->name }}
            </h1>
            <p class="text-lg md:text-xl font-semibold text-primary mb-3">
                {{ $profile->tagline }}
            </p>
            <p class="text-base md:text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                {{ $profile->bio }}
            </p>
        </div>

        {{-- CTA Buttons --}}
        <div class="mt-10 flex flex-wrap justify-center gap-4">
            <a href="{{ route('projects') }}"
               class="rounded-xl bg-primary px-8 py-4 text-base font-bold text-white shadow-lg hover:bg-primary/90 transition-all">
                View My Work
            </a>
            <a href="{{ route('contact') }}"
               class="rounded-xl bg-slate-200 dark:bg-slate-800 px-8 py-4 text-base font-bold text-slate-900 dark:text-slate-100 hover:bg-slate-300 dark:hover:bg-slate-700 transition-all">
                Get In Touch
            </a>
        </div>

        {{-- Portfolio Navigation Cards --}}
        <div class="mt-20 w-full grid grid-cols-2 md:grid-cols-4 gap-4 text-left">

            <a href="{{ route('skills') }}" class="group rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm hover:shadow-md hover:border-primary transition-all">
                <span class="material-symbols-outlined text-primary mb-3 block">psychology</span>
                <h5 class="font-bold text-slate-900 dark:text-slate-100 mb-1">My Skills</h5>
                <p class="text-xs text-slate-500 dark:text-slate-400">Languages, frameworks, & tools</p>
            </a>

            <a href="{{ route('projects') }}" class="group rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm hover:shadow-md hover:border-green-500 transition-all">
                <span class="material-symbols-outlined text-green-500 mb-3 block">rocket_launch</span>
                <h5 class="font-bold text-slate-900 dark:text-slate-100 mb-1">Projects</h5>
                <p class="text-xs text-slate-500 dark:text-slate-400">Games, apps, & research</p>
            </a>

            <a href="{{ route('experience') }}" class="group rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm hover:shadow-md hover:border-amber-500 transition-all">
                <span class="material-symbols-outlined text-amber-500 mb-3 block">work_history</span>
                <h5 class="font-bold text-slate-900 dark:text-slate-100 mb-1">Experience</h5>
                <p class="text-xs text-slate-500 dark:text-slate-400">Education & background</p>
            </a>

            <a href="{{ route('contact') }}" class="group rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 shadow-sm hover:shadow-md hover:border-cyan-500 transition-all">
                <span class="material-symbols-outlined text-cyan-500 mb-3 block">contact_mail</span>
                <h5 class="font-bold text-slate-900 dark:text-slate-100 mb-1">Contact</h5>
                <p class="text-xs text-slate-500 dark:text-slate-400">Let's get in touch</p>
            </a>

        </div>

    </div>
</section>
@endsection