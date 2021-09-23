<div>
    <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 xxl:col-start-auto xxl:row-start-auto mt-3">
        <div class="intro-x flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-auto">Announcements</h2>
            <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-4 h-4"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-4 h-4"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
        </div>
        @foreach ($announcements as $announcement)
        <div class="mt-5 intro-x">
            <div class="box zoom-in">
                <div class="tns-outer" >
                    <div id="" class="tns-ovh">
                        <div class="tns-inner">
                            <div class="tiny-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" style="transform: translate3d(-20%, 0px, 0px); transition-duration: 0s;">
                                <div class="p-5 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <div class="text-base font-medium truncate">{{ $announcement->title }}</div>
                                    <div class="text-gray-500 mt-1">{{ $announcement->created_at->diffForHumans() }}</div>
                                    <div class="text-gray-600 text-justify mt-1">{{ $announcement->content }}</div>
                                    <div class="font-medium flex mt-5">
                                        <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                        @if ($announcement->is_important == true)
                                        <button type="button" class="btn btn-danger py-1 px-2 ml-auto ml-auto">Important</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
