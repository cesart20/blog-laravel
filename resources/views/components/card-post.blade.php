{{-- @props(['post']) --}}

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="imagen de prueba">
    <div class="px-6 py-4">
        <h1 class="text-xl font-bold mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>
        <div class="text-gray-700 text-base">
            {{ $post->extract }}
        </div>

        <div class="px-6 pt-4 pb-4">
            @foreach ($post->tags as $tag)
                <a 
                    href="#"
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2"
                >
                    {{ $tag->name }}
                </a>
            @endforeach

        </div>
    </div>
</article>