<x-app-layout>


    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editer {{ $post->title }}
    </h2>

    <div class="min-h-screen bg-neutral-800 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 z-50 bg-stone-600 shadow-md overflow-hidden sm:rounded-lg">

            <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="mt-2">

                @method('put')
                @csrf
                <div class="pb-4">
                    <x-label for="title" value="Titre de l'article" />
                    <x-input id="title" class="block mt-1 w-full" name="title" value="{{ $post->title }}" />
                </div>

                <div class="pb-4">
                    <x-label for="content" value="Contenu de l'article" />
                    <textarea id="content" class="block mt-1 w-full" name="content">{{ $post->content }}</textarea>
                </div>

                <div class="pb-4">
                    <x-label for="image" value="image de l'article" />
                    <x-input id="image" type="file" name="image" />
                </div>

                <div>
                    <x-label for="category" value="categorie de l'article" />
                    <select name="category" id="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $post->category_id === $category->id ? 'selected' : '' }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <x-button class="mt-5">Modifier l'article</x-button>

            </form>
            <div>

                @foreach ($errors->all() as $error)
                    <span class="block text-red-500">{{ $error }}</span>
                @endforeach

            </div>
        </div>
    </div>

</x-app-layout>
