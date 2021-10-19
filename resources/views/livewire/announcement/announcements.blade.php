<div>
    <div class="intro-y mt-5">
        <h2 class="text-lg font-medium truncate mr-auto">Announcements</h2>
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2">Add New Announcement</button>

            <div class="hidden md:block mx-auto text-gray-600">
                <span>Showing Announcements Data</span>
            </div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-gray-700 dark:text-gray-300">
                    <input type="text"
                        class="form-control w-56 box pr-10 placeholder-theme-13" placeholder="Search..." />
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 xxl:col-start-auto xxl:row-start-auto mt-3">
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
                                        <a href="{{ route('announcements.show', $announcement->id) }}" class="btn btn-secondary py-1 px-2">View Notes</a>
                                        <button type="button" class="btn btn-secondary py-1 px-2 ml-2"><i class="w-4 h-4" data-feather="trash"></i></button>
                                        <button type="button" class="btn btn-secondary py-1 px-2 ml-2"><i class="w-4 h-4" data-feather="edit-3"></i></button>
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
