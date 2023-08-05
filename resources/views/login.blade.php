<x-layout>
    <div class="max-w-lg mx-auto mt-10 bg-dark-teal shadow shadow-black p-6 rounded-xl">
        <h1 class="text-center text-xl uppercase">Log In!</h1>
        <form method="POST" action="/login" class="mt-10">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs" for="email">
                    Email
                </label>
                <input type="email" name="email" id="email" value="{{old('email')}}" required class="bg-lavender text-dark-teal p-2 w-full">
                @error('email')
                    <p class="text-red text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                    Password
                </label>
                <input type="password" name="password" id="password" required class="bg-lavender text-dark-teal p-2 w-full">
                @error('password')
                    <p class="text-red text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <input type="submit" value="Login" class="font-bold uppercase text-xs bg-lavender text-dark-teal rounded py-2 px-4 hover:bg-light-teal">
            </div>
        </form>
    </div>
</x-layout>