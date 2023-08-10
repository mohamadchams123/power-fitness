@auth
    <form method="POST" action="/comments">
        @csrf
        <header class="flex font-semibold text-xl items-center">
            <p>Would you like to leave a feedback ?</p>
        </header>
        <div class="mt-5">
            <x-form.textarea name="body" placeholder="Comment here !" />
        </div>
        <div class="flex justify-end mt-5 border-t border-lavender pt-6">
            <x-form.button name="post" />
        </div>
    </form>
@endauth