<div class="min-h-screen bg-neutral-900 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <img class="h-full w-full fixed blur object-contain" src="{{asset('/images/logo_TF_transp.png')}}" alt="">
    <div>
        {{ $logo }}
    </div>
    
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 z-50 bg-stone-600 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
