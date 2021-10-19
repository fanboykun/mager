<div>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">List Of Divisions</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Add New Divisions</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus w-4 h-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    </span>
                </button>
                {{-- <div class="dropdown-menu w-40">
                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-4 h-4 mr-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg> Share Post
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download w-4 h-4 mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> Download Post
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Blog Layout -->
        @forelse ($divisions as $division)
        <div class="intro-y col-span-12 md:col-span-6 xl:col-span-4 box">
            <div class="flex items-center border-b border-gray-200 dark:border-dark-5 px-5 py-4">
                {{-- <div class="w-10 h-10 flex-none image-fit">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="{{ $division->manager->profile_photo_url }}">
                </div> --}}
                <div class="ml-3 mr-auto">
                    <a href="{{ route('division.show', $division) }}" class="font-medium">{{ $division->name }}</a>
                    <div class="flex text-gray-600 truncate text-xs mt-0.5">
                        <p class="text-theme-1 dark:text-theme-10 inline-block truncate">Manager : {{ $division->manager->name }}</p>
                        {{-- <span class="mx-1">•</span> 51 seconds ago --}}
                    </div>
                </div>
                <div class="dropdown ml-3">
                    <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-600 dark:text-gray-300" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical w-4 h-4"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                    </a>
                    <div class="dropdown-menu w-40">
                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                            <a href="{{ route('division.edit', $division) }}" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 w-4 h-4 mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Edit Division
                            </a>
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash w-4 h-4 mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Delete Division
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <p class="block font-small text-base mt-5">{{ $division->description }}</p>
                <div class="text-gray-700 dark:text-gray-600 mt-2"> </div>
            </div>
            <div class="flex items-center px-5 py-3 border-t border-gray-200 dark:border-dark-5">
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-400 dark:border-dark-5 dark:bg-dark-5 dark:text-gray-300 text-gray-600 mr-2 tooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark w-3 h-3"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                </a>
                <div class="intro-x flex mr-2">
                    @foreach ($division->users as $member)
                    <div class="intro-x w-8 h-8 image-fit {{ $loop->iteration != 1 ? '-ml-4' : '' }}">
                        <img alt="error" class="rounded-full border border-white zoom-in tooltip" src="{{ $member->profile_photo_url }}">
                    </div>
                    @endforeach
                </div>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 dark:bg-dark-5 dark:text-gray-300 text-theme-10 ml-auto tooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 w-3 h-3"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                </a>
                <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share w-3 h-3"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path><polyline points="16 6 12 2 8 6"></polyline><line x1="12" y1="2" x2="12" y2="15"></line></svg>
                </a>
            </div>
            <div class="px-5 pt-3 pb-5 border-t border-gray-200 dark:border-dark-5">
                <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                    <div class="mr-2">
                        Users: <span class="font-medium">{{ $division->users_count }}</span>
                    </div>
                    <div class="mr-2">
                        Projects: <span class="font-medium">{{ $division->projects_count }}</span>
                    </div>
                    <div class="ml-auto">
                        Announcements: <span class="font-medium">{{ $division->announcements_count }}</span>
                    </div>
                </div>
            </div>
        </div>
        @empty
            No Data!!!
        @endforelse
                <!-- END: Blog Layout -->
        <!-- BEGIN: Pagination -->

        <!-- END: Pagination -->
    </div>
</div>
