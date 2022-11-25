<x-app-layout>
    <div class="min-h-screen w-full top-[64px] bg-neutral-800">
        <div class="flex flex-col pt-16">
            <div class="xs:flex xs:justify-center lg:block">
                <iframe class="lg:w-4/6 aspect-video sm:w-11/12 xs:w-full "
                    src="https://player.twitch.tv/?channel=esl_csgo&parent=127.0.0.1&parent=localhost"
                    allowfullscreen="true">
                </iframe>
            </div>

            <div class="xs:flex xs:justify-center lg:block">
                <iframe class="h-96 lg:fixed right-0 bottom-0 lg:h-[calc(100%_-_63px)] sm:w-11/12 lg:w-2/6 xs:w-full"
                    id="twitch-chat-embed"
                    src="https://www.twitch.tv/embed/esl_csgo/chat?darkpopout&parent=127.0.0.1&parent=localhost"
                    width="340px">

                </iframe>
            </div>

        </div>

        <div class="pt-10 pb-4 grid grid-rows-2 grid-flow-col gap-4 justify-around lg:w-4/6">
            <div><a href="https://twitter.com/FightersTf" target="_blank"><img src="images/twitter.png"
                        alt="twitter" /></div></a>
            <div><a href="https://www.facebook.com/True.Fighters.Gaming" target="_blank"><img src="images/facebook.png"
                        alt="facebook" /></div></a>
            <div><a href="https://www.youtube.com/channel/UCI_-n-bkaTPJssgGHhAGM7Q" target="_blank"><img
                        src="images/youtube.png" alt="youtube" /></div></a>
            <div><a href="http://"><img src="images/design.png" alt="design" /></div></a>
        </div>
    </div>

</x-app-layout>



{{-- position: absolute;
width: 340px;
right: 0px;
bottom: 0px;
transition: all 0.25s ease-out 0s;
z-index: 200;
pointer-events: all;
height: 100%; --}}

{{-- height: calc(100% - 150px);
position: absolute;
top: 150px;
width: 100%;
/* pointer-events: none; */ --}}

{{-- class="fixed right-0 bottom-0" --}}
