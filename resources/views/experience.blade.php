@extends('layouts.app')

@section('content')
<main class="mx-auto w-full max-w-4xl flex-1 px-6 py-12 md:py-20">

    {{-- Hero Section --}}
    <div class="mb-16 text-center md:text-left">
        <h1 class="text-4xl font-extrabold tracking-tight md:text-5xl lg:text-6xl mb-4">
            Experience & <span class="text-primary">Education</span>
        </h1>
        <p class="max-w-2xl text-lg text-slate-600 dark:text-slate-400">
            A comprehensive timeline of my career journey and academic background.
        </p>
    </div>

    {{-- Timeline --}}
    <div class="relative space-y-12 before:absolute before:inset-0 before:ml-5 before:-translate-x-px md:before:mx-auto md:before:translate-x-0 before:h-full before:w-0.5 before:bg-gradient-to-b before:from-transparent before:via-slate-300 dark:before:via-slate-700 before:to-transparent">

        @foreach($experiences as $experience)
        <div class="relative flex items-center justify-between md:justify-normal md:odd:flex-row-reverse group">

            {{-- Timeline Icon --}}
            <div class="flex items-center justify-center w-10 h-10 rounded-full border border-white dark:border-slate-800 bg-primary text-white shadow-lg shrink-0 md:order-1 md:group-odd:-translate-x-1/2 md:group-even:translate-x-1/2">
                @if(strtolower($experience->type) === 'education')
                    <span class="material-symbols-outlined text-sm">school</span>
                @else
                    <span class="material-symbols-outlined text-sm">work</span>
                @endif
            </div>

            {{-- Card --}}
            <div class="w-[calc(100%-4rem)] md:w-[45%] p-6 rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50 shadow-sm transition-all hover:shadow-md">

                {{-- Type Badge --}}
                <div class="mb-3">
                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold uppercase tracking-wide
                        {{ strtolower($experience->type) === 'education'
                            ? 'bg-amber-100 text-amber-700 dark:bg-amber-900/30 dark:text-amber-400'
                            : 'bg-primary/10 text-primary' }}">
                        {{ $experience->type }}
                    </span>
                </div>

                {{-- Title & Date --}}
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-2 gap-1">
                    <h3 class="text-lg font-bold text-primary">{{ $experience->title }}</h3>
                    <time class="text-sm font-medium text-slate-500 dark:text-slate-400 shrink-0">
                        {{ \Carbon\Carbon::parse($experience->start_date)->format('M Y') }} —
                        {{ $experience->end_date ? \Carbon\Carbon::parse($experience->end_date)->format('M Y') : 'Present' }}
                    </time>
                </div>

                {{-- Company / Institution --}}
                <p class="text-base font-semibold mb-4 text-slate-700 dark:text-slate-300">
                    {{ $experience->institution_or_company }}
                </p>

                {{-- Description --}}
                <div class="flex gap-3 text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                    <span class="material-symbols-outlined text-primary text-lg flex-shrink-0">check_circle</span>
                    <p>{{ $experience->description }}</p>
                </div>

            </div>
        </div>
        @endforeach

    </div>

    {{-- CTA Banner --}}
    <div class="mt-24 p-8 rounded-2xl bg-primary/5 dark:bg-primary/10 border border-primary/20 text-center">
        <h3 class="text-2xl font-bold mb-4">Looking for a collaborator?</h3>
        <p class="text-slate-600 dark:text-slate-400 mb-8 max-w-lg mx-auto">
            I'm currently open to new opportunities and interesting projects. Let's build something amazing together.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('contact') }}"
               class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-bold rounded-lg hover:bg-primary/90 transition-all shadow-md">
                <span class="material-symbols-outlined">mail</span>
                Hire Me
            </a>
        </div>
    </div>

</main>
@endsection