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
            <div>
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
                                    <button class="text-xs font-bold uppercase">Welcome, {{auth()->user()->name}}</button>
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
            </div>

            <main class="max-w-lg mx-auto mt-10 bg-dark-teal shadow shadow-black p-6 rounded-xl">
                {{$slot}}
            </main>
        </section>
        <x-flash />
    </body>
</html>