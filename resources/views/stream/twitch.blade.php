<x-app-layout>      
    <div class="bg-neutral-800 flex flex-wrap justify-around ">
        <div class="flex flex-col mt-20 overflow-x-auto scrollbar-hide">
            <div>
                <iframe
                    src="https://player.twitch.tv/?channel=esl_csgo&parent=127.0.0.1&parent=localhost"
                    height="720"
                    width="100%"
                    allowfullscreen="true">
                </iframe>
            </div>

            <div class="grid grid-cols-4 gap-4 mt-4 p-12">
                <div><img src="images/twitter.png" alt="twitter"/></div>
                <div><img src="images/facebook.png" alt="facebook"/></div>
                <div><img src="images/discord.png" alt="discord"/></div>
                <div><img src="images/youtube.png" alt="youtube"/></div>
                <div><img src="images/design.png" alt="design"/></div>         
            </div>
            
        </div>
        <div>
            <iframe class="fixed right-0 bottom-0 h-[calc(100%_-_66px)]" id="twitch-chat-embed "
            src="https://www.twitch.tv/embed/akito_soma/chat?darkpopout&parent=127.0.0.1&parent=localhost"
            height="100%"
            width="330">
            </iframe>
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