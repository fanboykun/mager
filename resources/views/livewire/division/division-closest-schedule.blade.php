<div>
    <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3">
        <div class="intro-x flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">Recent Activities</h2>
            <a href="" class="ml-auto text-theme-1 dark:text-theme-10 truncate">Show More</a>
        </div>
        <div class="report-timeline mt-5 relative">
            @foreach ($user_schedules as $user_schedule)
            <div class="intro-x relative flex items-center mb-3">
                <div class="report-timeline__image">
                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                        <img alt="Rubick Tailwind HTML Admin Template" src="{{ $user_schedule->profile_photo_url }}">
                    </div>
                </div>
                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                    <div class="flex items-center">
                        <div class="font-medium">{{ $user_schedule->name }}</div>
                        <div class="text-xs text-gray-500 ml-auto">{{ $user_schedule->schedules->first()->start_at }}</div>
                    </div>
                    <div class="text-gray-600 mt-1">{{ $user_schedule->schedules->first()->title }}</div>
                </div>
            </div>
            @endforeach
            {{-- <div class="intro-x relative flex items-center mb-3">
                <div class="report-timeline__image">
                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                        <img alt="Rubick Tailwind HTML Admin Template" src="http://rubrick.test/dist/images/profile-2.jpg">
                    </div>
                </div>
                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                    <div class="flex items-center">
                        <div class="font-medium">Tom Cruise</div>
                        <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                    </div>
                    <div class="text-gray-600">
                        <div class="mt-1">Added 3 new photos</div>
                        <div class="flex mt-2">
                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="http://rubrick.test/dist/images/preview-4.jpg">
                            </div>
                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="http://rubrick.test/dist/images/preview-8.jpg">
                            </div>
                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-md border border-white" src="http://rubrick.test/dist/images/preview-15.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-x text-gray-500 text-xs text-center my-4">12 November</div>
            <div class="intro-x relative flex items-center mb-3">
                <div class="report-timeline__image">
                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                        <img alt="Rubick Tailwind HTML Admin Template" src="http://rubrick.test/dist/images/profile-4.jpg">
                    </div>
                </div>
                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                    <div class="flex items-center">
                        <div class="font-medium">Robert De Niro</div>
                        <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                    </div>
                    <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1 dark:text-theme-10" href="">Samsung Galaxy S20 Ultra</a> price and description</div>
                </div>
            </div>
            <div class="intro-x relative flex items-center mb-3">
                <div class="report-timeline__image">
                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                        <img alt="Rubick Tailwind HTML Admin Template" src="http://rubrick.test/dist/images/profile-9.jpg">
                    </div>
                </div>
                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                    <div class="flex items-center">
                        <div class="font-medium">Tom Cruise</div>
                        <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                    </div>
                    <div class="text-gray-600 mt-1">Has changed <a class="text-theme-1 dark:text-theme-10" href="">Sony A7 III</a> description</div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
