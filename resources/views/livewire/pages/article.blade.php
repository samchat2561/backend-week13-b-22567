<div class="py-12 space-y-3">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white dark:bg-gray-800 shadow rounded">
            <article class="mx-auto prose p-6">
                <h1>{{ $article?->title }}</h1>

                {{-- {{ $article?->image->path }} --}}
                <img class="rounded-sm" src="/storage/{{ $article->image->path }}" alt="{{ $article->image->alt_text }}">

                {!! $article?->content !!}

            </article>
        </div>
    </div>

    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="p-5 bg-white dark:bg-gray-800 shadow rounded overflow-hidden">
            <livewire:comments :model="$article" :emojis="['👍', '👎', '❤️', '😂', '😯', '😢', '😡']" />
        </div>
    </div>

</div>
