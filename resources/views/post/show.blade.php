<x-app-layout>
    <div class="h-full w-full mt-16 text-white ">
        <div class="grid grid-cols-1 place-items-center pt-4">
            <div class="lg:w-2/4 sm:w-4/6">
                <img class="" src="{{ asset('/storage/' . $post->image) }}" alt="image">
            </div>
            <div class="">
                <h2 class="font-semibolf text-xl leading-tight">
                    {{ $post->title }}
                </h2>
            </div>

            {{ $post->content }}
        </div>
    </div>


</x-app-layout>
