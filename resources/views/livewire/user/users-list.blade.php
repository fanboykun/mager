<div>
    <h2 class="intro-y text-lg font-medium mt-10">Users List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2">Add New User</button>
            {{-- <div class="dropdown">
                <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="users" class="w-4 h-4 mr-2"></i>
                            Add Group
                        </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="message-circle" class="w-4 h-4 mr-2"></i>
                            Send Message
                        </a>
                    </div>
                </div>
            </div> --}}
            <div class="hidden md:block mx-auto text-gray-600">
                Showing 1 to {{ $load }} of {{ $total_user }} entries
            </div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-gray-700 dark:text-gray-300">
                    <input type="text" wire:model.debounce.500ms="search"
                        class="form-control w-56 box pr-10 placeholder-theme-13" placeholder="Search..." />
                    <span wire:ignore><i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i></span>
                </div>
            </div>
        </div>
        <!-- BEGIN: Users Layout -->
        @foreach ($users as $user)
        <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
            <div class="box">
                <div class="flex items-start px-5 pt-5">
                    <div class="w-full flex flex-col lg:flex-row items-center">
                        <div class="w-16 h-16 image-fit">
                            <img alt="{{ $user->name }}" class="rounded-full" src="{{ $user->profile_photo_url }}" />
                        </div>
                        <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                            <a href="" class="font-medium">{{ $user->name }}</a>
                            <div class="text-gray-600 text-xs mt-0.5">
                                Role
                            </div>
                        </div>
                    </div>
                    <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false">
                            <span wire:ignore><i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i></span>
                        </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href=""
                                    class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <span wire:ignore><i data-feather="edit-2" class="w-4 h-4 mr-2"></i></span>
                                    Edit
                                </a>
                                <a href=""
                                    class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <span wire:ignore><i data-feather="trash" class="w-4 h-4 mr-2"></i></span>
                                    Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center lg:text-left p-5">
                    <div>{{ $user->identity->description }}</div>
                    <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-5">
                    <span wire:ignore><i data-feather="mail" class="w-3 h-3 mr-2"></i></span>
                        {{ $user->email }}
                    </div>
                    <div class="flex items-center justify-center lg:justify-start text-gray-600 mt-1">
                    <span wire:ignore><i data-feather="instagram" class="w-3 h-3 mr-2"></i></span>
                        {{ $user->identity->instagram }}
                    </div>
                </div>
                <div class="text-center lg:text-right p-5 border-t border-gray-200 dark:border-dark-5">
                    <button class="btn btn-primary py-1 px-2 mr-2">
                        Message
                    </button>
                    <button class="btn btn-outline-secondary py-1 px-2">
                        Profile
                    </button>
                </div>
            </div>
        </div>
        @endforeach

        <!-- END: Users Layout -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <button class="btn btn-primary shadow-md mr-2" role="button" wire:click="loadMore">
                Load More
            </button>
        </div>
        <!-- END: Pagination -->
    </div>
</div>
