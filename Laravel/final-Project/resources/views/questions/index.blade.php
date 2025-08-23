<x-layout>
    <h1 class="text-2xl font-bold mb-4">Latest Questions</h1>

    <a href="/create" class="bg-blue-500 text-white px-4 py-2 rounded">Ask Question</a>

    <div class="mt-6 space-y-4">
        @forelse($questions as $q)
            <div class="border p-4 rounded">
                <h2 class="text-xl font-semibold">
                    <a href="{{ route('questions.show', $q) }}">{{ $q->title }}</a>
                </h2>
                <p class="text-gray-600">Asked by {{ $q->user->name }}</p>
                <p class="mt-2">{{ Str::limit($q->body, 150) }}</p>
                <div class="mt-2">
                    @foreach($q->tags as $tag)
                        <span class="bg-gray-200 px-2 py-1 text-sm rounded">{{ $tag->name }}</span>
                    @endforeach
                </div>
            </div>
        @empty
            <p>No questions yet. <a href="{{ route('questions.create') }}" class="text-blue-500">Be the first to ask!</a></p>
        @endforelse
    </div>
</x-layout>
