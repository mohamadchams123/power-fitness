<x-layout>
    <div>
        <h1 class="text-center text-xl uppercase">Log In!</h1>
        <form method="POST" action="/login" class="mt-10">
            @csrf
            <x-form.text name="email" type="email" />
            <x-form.text name="password" type="password" />
            <x-form.button name="login" />
        </form>
    </div>
</x-layout>