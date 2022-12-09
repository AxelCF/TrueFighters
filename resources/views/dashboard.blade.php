<x-app-layout>

    <div class="py-12 pt-28">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                {{ session('success') }}
            @endif
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($posts as $post)
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 mx-auto bg-stone-500 rounded-lg shadow-md">
                            <div class="flex items-center justify-between">
                                <span class="font-light text-white">{{ $post->created_at->format('d M Y') }}</span>
                                <div class="w-48 flex justify-around items-center">
                                    <h1 class="font-bold text-white">
                                        {{ ucfirst($post->user->name) }}</h1>
                                    <p class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded text-center">
                                        {{ $post->category->name }}</p>
                                </div>
                            </div>
                            <div class="mt-2">
                                <p class="text-2xl font-bold text-white">{{ $post->title }}</p>
                                <div class="flex items-center justify-between">
                                    <p class="mt-2 text-white">{{ Str::limit($post->content, 120) }}</p>
                                    <div class="pt-2 flex ">
                                        <a href="{{ route('posts.edit', $post) }}"
                                            class="mr-2 bg-yellow-500 px-2 py-3 block rounded-lg">
                                            Modifier</a>
                                        <a href="#" class="bg-red-500 px-2 py-3 block rounded-lg"
                                            onclick="event.preventDefault;
                                        document.getElementById('destroy-post-form-{{ $post->id }}').submit();
                                    ">
                                            Supprimer</a>

                                        <form action="{{ route('posts.destroy', $post) }}" method="post"
                                            id="destroy-post-form-{{ $post->id }}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>
