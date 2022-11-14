<x-app-layout>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot> --}}

    <div class="max-w-7xl pt-20 sm:px-6 lg:px-8">

        <div>
            @foreach ($errors->all() as $error)
                <span class="block text-red-500">{{ $error }}</span>
            @endforeach
        </div>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="mt-10">

            @csrf

            <x-label for="title" value="Titre de l'article" />
            <x-input id="title" name="title" />

            <x-label for="content" value="Contenu de l'article" />
            <textarea id="content" name="content"></textarea>

            <x-label for="image" value="image de l'article" />
            <x-input id="image" type="file" name="image" />

            <x-label for="category" value="categorie de l'article" />

            <select name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <x-button class="mt-5">Créer l'article</x-button>

        </form>

    </div>

</x-app-layout>
