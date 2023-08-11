@props(['comment'])
<div>
    <header class="mb-4">
        {{-- <h3 class="font-semibold">{{ $comment->user->username ?? 'Unknown User' }}</h3> --}}
        {{-- <p class="text-xs">Posted <time>{{ $comment->created_at->diffForHumans() }}</time></p> --}}
    </header>
    {{-- <p>{{ $comment->body }}</p> --}}
</div>