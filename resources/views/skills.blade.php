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
            A comprehensive overview of my technical expertise, ranging from full-stack web development to specialized tools and frameworks.
        </p>
    </div>

    @php
        $languages       = $skills->filter(fn($s) => strtolower($s->type) === 'language');
        $frameworks      = $skills->filter(fn($s) => strtolower($s->type) === 'framework');
        $specializations = $skills->filter(fn($s) => strtolower($s->type) === 'specialization');
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

        {{-- Left Column --}}
        <div class="flex flex-col gap-10">

            {{-- Languages --}}
            @if($languages->count())
            <section>
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">language</span>
                    <h2 class="text-2xl font-bold tracking-tight">Languages</h2>
                </div>
                @php
                    $langIcons = [
                        'python'     => ['svg' => '<svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor"><path d="M11.914 0C5.82 0 6.2 2.656 6.2 2.656l.007 2.752h5.814v.826H3.9S0 5.789 0 11.969c0 6.18 3.403 5.963 3.403 5.963h2.03v-2.868s-.109-3.402 3.35-3.402h5.762s3.239.052 3.239-3.13V3.13S18.271 0 11.914 0zm-3.2 1.812a1.039 1.039 0 1 1 0 2.077 1.039 1.039 0 0 1 0-2.077z"/><path d="M12.086 24c6.094 0 5.714-2.656 5.714-2.656l-.007-2.752h-5.814v-.826h8.121S24 18.211 24 12.031c0-6.18-3.403-5.963-3.403-5.963h-2.03v2.868s.109 3.402-3.35 3.402H9.455s-3.239-.052-3.239 3.13v5.402S5.729 24 12.086 24zm3.2-1.812a1.039 1.039 0 1 1 0-2.077 1.039 1.039 0 0 1 0 2.077z"/></svg>', 'color' => 'text-blue-500'],
                        'html'       => ['svg' => '<svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/></svg>', 'color' => 'text-orange-500'],
                        'php'        => ['svg' => '<svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor"><path d="M11.987 0C5.372 0 0 5.373 0 12s5.372 12 11.987 12C18.614 24 24 18.627 24 12S18.614 0 11.987 0zM8.25 15.667H6.808l.372-1.877H5.742l-.372 1.877H3.928l1.307-6.583h3.273c1.2 0 1.865.636 1.865 1.69 0 1.68-1.122 2.757-2.123 2.757zM6.43 9.75h1.23l-.379 1.906H6.05zm6.554 5.917h-1.44l.372-1.877h-1.44l-.372 1.877H8.662l1.307-6.583h3.273c1.2 0 1.865.636 1.865 1.69 0 1.68-1.122 2.757-2.123 2.757zm-1.818-5.917h1.23l-.379 1.906h-1.23zm7.07 0h-1.23l-.99 4.98h-1.44l.99-4.98h-1.23l.317-1.603h3.9z"/></svg>', 'color' => 'text-indigo-500'],
                        'css'        => ['svg' => '<svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z"/></svg>', 'color' => 'text-blue-400'],
                        'javascript' => ['svg' => '<svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor"><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"/></svg>', 'color' => 'text-yellow-400'],
                        'c#'         => ['svg' => '<svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor"><path d="M1.125 0C.502 0 0 .502 0 1.125v21.75C0 23.498.502 24 1.125 24h21.75c.623 0 1.125-.502 1.125-1.125V1.125C24 .502 23.498 0 22.875 0zm17.363 9.75c.612 0 1.154.037 1.627.111a6.38 6.38 0 0 1 1.306.34v2.458a3.95 3.95 0 0 0-.643-.361 5.093 5.093 0 0 0-.717-.26 5.453 5.453 0 0 0-1.426-.2c-.3 0-.573.028-.819.086a2.1 2.1 0 0 0-.623.242c-.17.104-.3.229-.393.374a.888.888 0 0 0-.14.49c0 .196.053.373.156.529.104.156.252.304.443.444s.423.276.696.41c.273.135.582.274.926.416.47.197.892.407 1.266.628.374.222.695.473.963.753.268.279.472.598.614.957.142.359.214.776.214 1.253 0 .657-.125 1.21-.373 1.656a3.033 3.033 0 0 1-1.012 1.085 4.38 4.38 0 0 1-1.487.596c-.566.12-1.163.18-1.79.18a9.916 9.916 0 0 1-1.84-.164 5.544 5.544 0 0 1-1.512-.493v-2.63a5.033 5.033 0 0 0 3.237 1.2c.333 0 .624-.03.872-.09.249-.06.456-.144.623-.25.166-.108.29-.234.373-.38a1.023 1.023 0 0 0-.074-1.089 2.12 2.12 0 0 0-.537-.5 5.597 5.597 0 0 0-.807-.444 27.72 27.72 0 0 0-1.007-.436c-.918-.383-1.602-.852-2.053-1.405-.45-.553-.676-1.222-.676-2.005 0-.614.123-1.141.369-1.582.246-.441.58-.804 1.004-1.089a4.494 4.494 0 0 1 1.47-.629 7.536 7.536 0 0 1 1.77-.201zm-15.113.188h9.563v2.166H9.506v9.646H6.789v-9.646H3.375z"/></svg>', 'color' => 'text-purple-600'],
                    ];
                @endphp
                <div class="flex flex-wrap gap-3">
                    @foreach($languages as $skill)
                    @php
                        $key = strtolower($skill->skill);
                        $icon = $langIcons[$key] ?? ['svg' => '<svg viewBox="0 0 24 24" class="w-5 h-5" fill="currentColor"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>', 'color' => 'text-primary'];
                    @endphp
                    <div class="group relative flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white dark:bg-slate-800 shadow-sm border border-slate-200 dark:border-slate-700 cursor-default hover:border-primary transition-all">
                        <span class="{{ $icon['color'] }}">{!! $icon['svg'] !!}</span>
                        <span class="font-semibold text-sm">{{ $skill->skill }}</span>
                        {{-- Tooltip --}}
                        <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 w-48 px-3 py-2 rounded-lg bg-slate-900 text-white text-xs leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-10 shadow-lg">
                            {{ $skill->description }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
            @endif

            {{-- Frameworks --}}
            @if($frameworks->count())
            <section>
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">inventory_2</span>
                    <h2 class="text-2xl font-bold tracking-tight">Frameworks & Libraries</h2>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    @foreach($frameworks as $skill)
                    <div class="p-4 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex flex-col gap-2 hover:border-primary transition-all">
                        <div class="text-primary font-bold">{{ $skill->skill }}</div>
                        <div class="text-xs text-slate-500 dark:text-slate-400">{{ $skill->description }}</div>
                    </div>
                    @endforeach
                </div>
            </section>
            @endif

        </div>

        {{-- Right Column: Specialization Spotlight --}}
        <div class="flex flex-col gap-6">
            <section class="h-full">
                <div class="flex items-center gap-3 mb-6">
                    <span class="material-symbols-outlined text-primary">star</span>
                    <h2 class="text-2xl font-bold tracking-tight">Specialized Skills</h2>
                </div>

                @if($specializations->count())
                    @php $spotlight = $specializations->first(); @endphp
                    <div class="relative overflow-hidden p-8 rounded-3xl bg-primary text-white flex flex-col h-[400px] justify-between shadow-2xl shadow-primary/30">
                        <div class="absolute top-0 right-0 p-10 opacity-10 scale-150">
                            <span class="material-symbols-outlined text-[160px]">deployed_code</span>
                        </div>
                        <div class="relative z-10 flex flex-col gap-4">
                            <div class="bg-white/20 backdrop-blur-md rounded-lg p-2 w-fit">
                                <span class="material-symbols-outlined">star</span>
                            </div>
                            <h3 class="text-4xl font-black">{{ $spotlight->skill }}</h3>
                            <div class="w-16 h-1 bg-white/40 rounded-full"></div>
                        </div>
                        <div class="relative z-10 flex flex-col gap-6">
                            <p class="text-white/90 text-lg leading-relaxed">
                                {{ $spotlight->description }}
                            </p>
                            @if($specializations->count() > 1)
                            <div class="flex gap-3 flex-wrap">
                                @foreach($specializations->skip(1) as $tag)
                                <div class="px-3 py-1 rounded-full border border-white/20 bg-white/10 text-xs font-semibold backdrop-blur-sm">
                                    {{ $tag->skill }}
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                @else
                    <div class="relative overflow-hidden p-8 rounded-3xl bg-primary text-white flex flex-col h-[400px] justify-center items-center shadow-2xl shadow-primary/30">
                        <span class="material-symbols-outlined text-6xl mb-4 opacity-60">psychology</span>
                        <p class="text-white/80 text-center">No specializations added yet.</p>
                    </div>
                @endif

            </section>
        </div>

    </div>

    {{-- Stats Bar --}}
    <div class="mt-20 border-t border-slate-200 dark:border-slate-800 pt-12 flex flex-col md:flex-row justify-between items-center gap-8">
        <div class="flex items-center gap-8">
            <div class="flex flex-col">
                <span class="text-2xl font-bold text-primary">{{ $skills->count() }}</span>
                <span class="text-sm text-slate-500 uppercase tracking-tighter">Technologies</span>
            </div>
            <div class="w-[1px] h-10 bg-slate-200 dark:bg-slate-800"></div>
            <div class="flex flex-col">
                <span class="text-2xl font-bold text-primary">{{ $languages->count() }}</span>
                <span class="text-sm text-slate-500 uppercase tracking-tighter">Languages</span>
            </div>
            <div class="w-[1px] h-10 bg-slate-200 dark:bg-slate-800"></div>
            <div class="flex flex-col">
                <span class="text-2xl font-bold text-primary">{{ $frameworks->count() }}</span>
                <span class="text-sm text-slate-500 uppercase tracking-tighter">Frameworks</span>
            </div>
        </div>
        <a href="{{ route('contact') }}"
           class="px-8 py-3 bg-primary text-white font-bold rounded-xl hover:shadow-lg transition-all active:scale-95">
            Get In Touch
        </a>
    </div>

</main>
@endsection