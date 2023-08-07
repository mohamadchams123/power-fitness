<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PowerFitness</title>
        @vite('resources/css/app.css')
        <script src="/alpine.js" defer></script>
    </head>
    <body class="bg-teal text-lavender">
        <section>
            <nav class="md:flex md:justify-between md:items-center px-6 bg-dark-teal text-lavender shadow shadow-black">
                <div>
                    <a href="/">
                        <img src="/images/PowerFitness-logo.png" alt="GymLogo" width="90" height="16">
                    </a>
                </div>
    
                <div class="mt-8 md:mt-0 flex items-center">
                    @auth
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button class="text-xs font-bold uppercase flex items-center">
                                    Welcome, {{auth()->user()->name}}
                                    <svg class="ml-2" width="24" height="24"><path d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8.009 8.009 0 0 1-8 8z"/><path d="M12 12.586 8.707 9.293l-1.414 1.414L12 15.414l4.707-4.707-1.414-1.414L12 12.586z"/></svg>
                                </button>
                            </x-slot>
                            <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>
                            <form id="logout-form" method="POST" action="/logout" class="hidden">
                                @csrf
                            </form>
                        </x-dropdown>
                    @else
                        <p class="uppercase font-semibold">Power Fitness</p>
                    @endauth
                </div>
            </nav>
            <header>
                {{-- buttons --}}
            </header>
            <x-flash />
            <main class="max-w-lg mx-auto mt-10 bg-dark-teal shadow shadow-black p-6 rounded-xl">
                {{$slot}}
            </main>
        </section>
    </body>
</html>