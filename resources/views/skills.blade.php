@extends('layouts.app')

@section('content')
<main class="flex-1 w-full max-w-5xl mx-auto px-6 py-12">

    {{-- Hero Section --}}
    <div class="flex flex-col gap-4 mb-16">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary w-fit">
            <span class="material-symbols-outlined text-sm">psychology</span>
            <span class="text-xs font-bold uppercase tracking-wider">Expertise</span>
        </div>
        <h1 class="text-5xl font-black tracking-tight leading-tight">
            My Skills & <span class="text-primary">Capabilities</span>
        </h1>
        <p class="text-slate-600 dark:text-slate-400 text-lg max-w-2xl leading-relaxed">
            A comprehensive overview of my technical expertise across languages, frameworks, tools, and specialized platforms.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

        {{-- Left Column --}}
        <div class="flex flex-col gap-10">

            {{-- Expert / Advanced Skills --}}
            @php
                $expert = $skills->filter(fn($s) => in_array(strtolower($s->proficiency_level), ['expert', 'advanced']));
                $intermediate = $skills->filter(fn($s) => in_array(strtolower($s->proficiency_level), ['intermediate']));
                $beginner = $skills->filter(fn($s) => in_array(strtolower($s->proficiency_level), ['beginner', 'familiar']));
            @endphp

            @if($expert->count())
            <section>
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">workspace_premium</span>
                    <h2 class="text-2xl font-bold tracking-tight">Expert / Advanced</h2>
                </div>
                <div class="flex flex-wrap gap-3">
                    @foreach($expert as $skill)
                    <div class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white dark:bg-slate-800 shadow-sm border border-slate-200 dark:border-slate-700">
                        <span class="material-symbols-outlined text-primary">code</span>
                        <span class="font-semibold text-sm">{{ $skill->name }}</span>
                    </div>
                    @endforeach
                </div>
            </section>
            @endif

            {{-- Intermediate Skills --}}
            @if($intermediate->count())
            <section>
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">inventory_2</span>
                    <h2 class="text-2xl font-bold tracking-tight">Intermediate</h2>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    @foreach($intermediate as $skill)
                    <div class="p-4 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex flex-col gap-1">
                        <div class="text-primary font-bold">{{ $skill->name }}</div>
                        <div class="text-xs text-slate-500">{{ ucfirst($skill->proficiency_level) }}</div>
                    </div>
                    @endforeach
                </div>
            </section>
            @endif

            {{-- Beginner / Familiar Skills --}}
            @if($beginner->count())
            <section>
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">school</span>
                    <h2 class="text-2xl font-bold tracking-tight">Familiar</h2>
                </div>
                <div class="flex flex-wrap gap-3">
                    @foreach($beginner as $skill)
                    <div class="flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white dark:bg-slate-800 shadow-sm border border-slate-200 dark:border-slate-700">
                        <span class="material-symbols-outlined text-slate-400">circle</span>
                        <span class="font-semibold text-sm text-slate-600 dark:text-slate-300">{{ $skill->name }}</span>
                    </div>
                    @endforeach
                </div>
            </section>
            @endif

        </div>

        {{-- Right Column: Spotlight on top skill --}}
        <div class="flex flex-col gap-6">
            <section class="h-full">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">star</span>
                    <h2 class="text-2xl font-bold tracking-tight">Top Skill Spotlight</h2>
                </div>

                @php $spotlight = $skills->first(); @endphp

                @if($spotlight)
                <div class="relative overflow-hidden p-8 rounded-3xl bg-primary text-white flex flex-col h-[400px] justify-between shadow-2xl shadow-primary/30">
                    <div class="absolute top-0 right-0 p-10 opacity-10 scale-150">
                        <span class="material-symbols-outlined text-[160px]">deployed_code</span>
                    </div>
                    <div class="relative z-10 flex flex-col gap-4">
                        <div class="bg-white/20 backdrop-blur-md rounded-lg p-2 w-fit">
                            <span class="material-symbols-outlined">star</span>
                        </div>
                        <h3 class="text-4xl font-black">{{ $spotlight->name }}</h3>
                        <div class="w-16 h-1 bg-white/40 rounded-full"></div>
                    </div>
                    <div class="relative z-10 flex flex-col gap-6">
                        <p class="text-white/90 text-lg leading-relaxed">
                            Proficiency level: <span class="font-bold">{{ ucfirst($spotlight->proficiency_level) }}</span>.
                            One of the core competencies driving my development work and projects.
                        </p>
                        <div class="flex gap-4 flex-wrap">
                            @foreach($skills->take(3) as $tag)
                            <div class="px-3 py-1 rounded-full border border-white/20 bg-white/10 text-xs font-semibold backdrop-blur-sm">
                                {{ $tag->name }}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

            </section>
        </div>

    </div>

    {{-- Stats & Resume --}}
    <div class="mt-20 border-t border-slate-200 dark:border-slate-800 pt-12 flex flex-col md:flex-row justify-between items-center gap-8">
        <div class="flex items-center gap-8">
            <div class="flex flex-col">
                <span class="text-2xl font-bold text-primary">{{ $skills->count() }}</span>
                <span class="text-sm text-slate-500 uppercase tracking-tighter">Skills</span>
            </div>
            <div class="w-[1px] h-10 bg-slate-200 dark:bg-slate-800"></div>
            <div class="flex flex-col">
                <span class="text-2xl font-bold text-primary">{{ $expert->count() }}</span>
                <span class="text-sm text-slate-500 uppercase tracking-tighter">Expert Level</span>
            </div>
            <div class="w-[1px] h-10 bg-slate-200 dark:bg-slate-800"></div>
            <div class="flex flex-col">
                <span class="text-2xl font-bold text-primary">{{ $intermediate->count() }}</span>
                <span class="text-sm text-slate-500 uppercase tracking-tighter">Intermediate</span>
            </div>
        </div>
        <a href="{{ route('contact') }}"
           class="px-8 py-3 bg-primary text-white font-bold rounded-xl hover:shadow-lg transition-all active:scale-95">
            Get In Touch
        </a>
    </div>

</main>
@endsection