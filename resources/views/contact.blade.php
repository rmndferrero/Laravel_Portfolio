@extends('layouts.app')

@section('content')
<main class="mx-auto w-full max-w-4xl flex-1 px-6 py-12 md:py-20">

    {{-- Hero Section --}}
    <div class="mb-16 text-center md:text-left">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary w-fit mb-4">
            <span class="material-symbols-outlined text-sm">contact_mail</span>
            <span class="text-xs font-bold uppercase tracking-wider">Get In Touch</span>
        </div>
        <h1 class="text-4xl font-extrabold tracking-tight md:text-5xl lg:text-6xl mb-4">
            Let's <span class="text-primary">Connect</span>
        </h1>
        <p class="max-w-2xl text-lg text-slate-600 dark:text-slate-400">
            Whether you have a project in mind, a question, or just want to say hello — my inbox is always open.
        </p>
    </div>

    {{-- Contact Cards Grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-16">

        {{-- Toast Notification --}}
        <div id="copy-toast"
             class="fixed bottom-6 left-1/2 -translate-x-1/2 z-50 flex items-center gap-2 px-5 py-3 rounded-xl bg-slate-900 text-white text-sm font-semibold shadow-xl opacity-0 pointer-events-none transition-all duration-300">
            <span class="material-symbols-outlined text-green-400 text-base">check_circle</span>
            <span id="copy-toast-msg">Copied!</span>
        </div>

        {{-- Email --}}
        <div onclick="copyToClipboard('{{ $contact->email }}', 'Email address copied!')"
             class="group flex items-center gap-5 p-6 rounded-2xl bg-white dark:bg-slate-900/50 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md hover:border-primary transition-all duration-300 cursor-pointer select-none">
            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-all">
                <span class="material-symbols-outlined">mail</span>
            </div>
            <div class="min-w-0">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">Email <span class="normal-case font-normal text-slate-300 dark:text-slate-600">· click to copy</span></p>
                <p class="text-base font-semibold text-slate-900 dark:text-slate-100 truncate">{{ $contact->email }}</p>
            </div>
            <span class="material-symbols-outlined text-slate-300 dark:text-slate-700 group-hover:text-primary ml-auto transition-colors">content_copy</span>
        </div>

        {{-- Phone --}}
        @if($contact->phone)
        <div onclick="copyToClipboard('{{ $contact->phone }}', 'Phone number copied!')"
             class="group flex items-center gap-5 p-6 rounded-2xl bg-white dark:bg-slate-900/50 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md hover:border-primary transition-all duration-300 cursor-pointer select-none">
            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-all">
                <span class="material-symbols-outlined">call</span>
            </div>
            <div class="min-w-0">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">Phone <span class="normal-case font-normal text-slate-300 dark:text-slate-600">· click to copy</span></p>
                <p class="text-base font-semibold text-slate-900 dark:text-slate-100">{{ $contact->phone }}</p>
            </div>
            <span class="material-symbols-outlined text-slate-300 dark:text-slate-700 group-hover:text-primary ml-auto transition-colors">content_copy</span>
        </div>
        @else
        <div class="group flex items-center gap-5 p-6 rounded-2xl bg-white dark:bg-slate-900/50 border border-slate-200 dark:border-slate-800 shadow-sm">
            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-400">
                <span class="material-symbols-outlined">call</span>
            </div>
            <div class="min-w-0">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">Phone</p>
                <p class="text-base font-semibold text-slate-400">Not provided</p>
            </div>
        </div>
        @endif

        {{-- GitHub --}}
        <a href="{{ $contact->github_url }}" target="_blank"
           class="group flex items-center gap-5 p-6 rounded-2xl bg-white dark:bg-slate-900/50 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md hover:border-primary transition-all duration-300">
            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-all">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                </svg>
            </div>
            <div class="min-w-0">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">GitHub</p>
                <p class="text-base font-semibold text-slate-900 dark:text-slate-100 truncate">{{ $contact->github_url }}</p>
            </div>
            <span class="material-symbols-outlined text-slate-300 dark:text-slate-700 group-hover:text-primary ml-auto transition-colors">arrow_forward</span>
        </a>

        {{-- LinkedIn --}}
        <a href="{{ $contact->linkedin_url }}" target="_blank"
           class="group flex items-center gap-5 p-6 rounded-2xl bg-white dark:bg-slate-900/50 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md hover:border-primary transition-all duration-300">
            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-all">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
            </div>
            <div class="min-w-0">
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">LinkedIn</p>
                <p class="text-base font-semibold text-slate-900 dark:text-slate-100 truncate">{{ $contact->linkedin_url }}</p>
            </div>
            <span class="material-symbols-outlined text-slate-300 dark:text-slate-700 group-hover:text-primary ml-auto transition-colors">arrow_forward</span>
        </a>

    </div>

    {{-- CTA Banner --}}
    <div class="p-8 rounded-2xl bg-primary/5 dark:bg-primary/10 border border-primary/20 text-center">
        <div class="flex justify-center mb-4">
            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-primary text-white shadow-lg shadow-primary/30">
                <span class="material-symbols-outlined">waving_hand</span>
            </div>
        </div>
        <h3 class="text-2xl font-bold mb-3">Ready to work together?</h3>
        <p class="text-slate-600 dark:text-slate-400 mb-8 max-w-lg mx-auto">
            I'm currently open to new opportunities and exciting collaborations. Drop me a message anytime.
        </p>
        <a href="mailto:{{ $contact->email }}"
           class="inline-flex items-center gap-2 px-8 py-3 bg-primary text-white font-bold rounded-xl hover:bg-primary/90 transition-all shadow-md hover:shadow-lg active:scale-95">
            <span class="material-symbols-outlined">mail</span>
            Send Me an Email
        </a>
    </div>

</main>
<script>
    function copyToClipboard(text, message) {
        navigator.clipboard.writeText(text).then(() => {
            const toast = document.getElementById('copy-toast');
            const msg = document.getElementById('copy-toast-msg');
            msg.textContent = message;
            toast.classList.remove('opacity-0', 'pointer-events-none');
            toast.classList.add('opacity-100');
            setTimeout(() => {
                toast.classList.remove('opacity-100');
                toast.classList.add('opacity-0', 'pointer-events-none');
            }, 2500);
        });
    }
</script>

@endsection