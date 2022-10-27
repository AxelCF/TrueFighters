<div class="hidden w-4/12 -mx-8 lg:block">
    <div class="px-8">
        <h1 class="mb-4 text-xl font-bold text-neutral-50">Auteurs</h1>
        <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-indigo-900 rounded-lg shadow-md">
            <ul class="-mx-4">
                @foreach ($authors as $author)
                    <li class="flex items-center py-1 "><img
                        src={{ $author->profile_photo_path ?? 'https://ui-avatars.com/api/?name=?&color=7F9CF5&background=EBF4FF' }}
                        alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                    <p><a href="#" class="mx-1 font-bold text-white hover:underline">{{ ucfirst($author->name) }}</a><span

                            class="text-sm font-light text-white">a créé {{ $author->post }} Article(s)</span></p>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
    <div class="px-8 mt-10">
        <h1 class="mb-4 text-xl font-bold text-neutral-50">Categories</h1>
        <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-indigo-900 rounded-lg shadow-md">
            <ul>
                @foreach ($categories as $category)
                    <li><a href="#" class="mx-1 font-bold text-white hover:text-gray-600 hover:underline">-
                        {{ $category->name }}</a></li>
                @endforeach
                
            </ul>
        </div>
    </div>
    <div class="px-8 mt-10">
        <h1 class="mb-4 text-xl font-bold text-neutral-50">dernier article</h1>

        @foreach ($lastPost as $post)
            
        <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-indigo-900 rounded-lg shadow-md">
            <div class="flex items-center justify-center"><a href="#"
                    class="px-2 py-1 text-sm text-white bg-gray-600 rounded hover:bg-gray-500">{{ $post->category->name }}</a>
            </div>
            <div class="mt-4"><a href="#" class="text-lg font-medium text-white hover:underline">{{ $post->title }}</a></div>
            <div class="flex items-center justify-between mt-4">
                <div class="flex items-center"><img
                        src="{{ $post->user->profile_photo_path ?? 'https://ui-avatars.com/api/?name=?&color=7F9CF5&background=EBF4FF' }}"
                        alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#"
                        class="mx-3 text-sm text-white hover:underline">{{ ucfirst($post->user->name) }}</a></div><span
                    class="text-sm font-light text-white">{{$post->created_at->format('d M Y') }}</span>
          </div>
        </div>

        @endforeach 
    </div>
</div>