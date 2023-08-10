<x-layout>
    <div class="max-w-lg mx-auto mt-10 bg-dark-teal shadow shadow-black p-6 rounded-xl">
        <p class="text-xl font-semibold">Your subscription end date :</p>
    </div>
    <div class="max-w-lg mx-auto mt-10 bg-dark-teal shadow shadow-black p-6 rounded-xl">
        @include('_add-comment-form')
    </div>
    <section class="max-w-lg mx-auto mt-10 bg-dark-teal shadow shadow-black p-6 rounded-xl mb-10">
        @foreach ($comments as $comment)
        <p>test</p>
            <x-comment :comment="$comment" />
        @endforeach
    </section>
</x-layout>