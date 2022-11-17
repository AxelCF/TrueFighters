<x-app-layout>
    <div class="h-full w-full mt-16 text-white ">
        <div class="grid grid-cols-1 place-items-center pt-4">
            <div class="pb-3">
                <h2 class="font-semibold text-xl leading-tight">
                    {{ $post->title }}
                </h2>
            </div>
            <div class="lg:w-8/12 sm:w-5/6">
                <img class="" src="{{ asset('/storage/' . $post->image) }}" alt="image">
                <div class="m-4">
                    {{ $post->content }}
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
