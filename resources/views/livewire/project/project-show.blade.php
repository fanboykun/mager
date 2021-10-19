<div>
    <div class="grid grid-cols-12 gap-6 mt-8"></div>
        <div class="col-span-12 lg:col-span-9 xxl:col-span-10">
            <!-- BEGIN: Inbox Filter -->
            <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700 dark:text-gray-300"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <input type="text" class="form-control w-full sm:w-64 box px-10 text-gray-700 dark:text-gray-300 placeholder-theme-13" placeholder="Search mail">
                </div>
                <div class="w-full sm:w-auto flex">
                    <button class="btn btn-primary shadow-md mr-2">Add New Task To This Project</button>
                </div>
            </div>
            <!-- END: Inbox Filter -->
            <!-- BEGIN: Inbox Content -->
            <div class="intro-y inbox box mt-5">
                <div class="p-5 flex flex-col-reverse sm:flex-row text-gray-600 border-b border-gray-200 dark:border-dark-1">
                    <div class="flex items-center mt-3 sm:mt-0 border-t sm:border-0 border-gray-200 pt-5 sm:pt-0 mt-5 sm:mt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
                        <div class="dark:text-gray-300">{{ Str::title($project->title) }}</div>
                    </div>
                    <div class="flex items-center sm:ml-auto">
                        <div class="dark:text-gray-300">Due Date: {{ $project->due_date }}</div>
                        {{-- <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center dark:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-4 h-4"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </a>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center dark:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-4 h-4"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a> --}}
                        {{-- <div class="mt-5 mx-5 px-5"> --}}
                            <a href="javascript:;" class="ml-5 inline:block items-center justify-center dark:text-gray-300">
                                <span class="mr-2">View Unfinished Only  </span> <input class="form-check-input flex-none" type="checkbox" wire:model="unfinished">
                            </a>
                        {{-- </div> --}}
                    </div>
                </div>
                <div class="overflow-x-auto sm:overflow-x-visible">
                    @forelse ($project->tasks as $task)
                    <div class="intro-y">
                        <div class="inbox__item {{ $task->is_finished == false ? 'inbox__item--active' : '' }} inline-block sm:block text-gray-700 dark:text-gray-500 bg-gray-100 dark:bg-dark-1 border-b border-gray-200 dark:border-dark-1">
                            <div class="flex px-5 py-3">
                                    <input class="form-check-input flex-none" type="checkbox" wire:click="completeTask({{ $task->id }})" {{ $task->completed_at != null ? 'checked' : '' }}>
                                    <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star w-4 h-4"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                    </a>
                                    <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark w-4 h-4"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                    </a>
                                    <div class="w-full sm:w-auto">
                                        <span class="inbox__item--sender ml-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ipsum elit, iaculis ut gravida eu, cursus non libero. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed sodales ligula in nisi ullamcorper, id condimentum eros viverra. Nulla egestas ipsum id metus pulvinar mollis. Mauris ut neque interdum, pharetra magna id, feugiat justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla vehicula nulla eget dui mollis, nec cursus dui venenatis. Proin eget pellentesque ipsum, vitae luctus mauris. Ut at pellentesque lectus. Maecenas eros tortor, blandit tincidunt lacus eget, accumsan accumsan nulla. Proin vestibulum accumsan iaculis. </span>
                                    </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-gray-600">
                        <div class="dark:text-gray-300">No Data To Show</div>
                    </div>
                    @endforelse
            </div>
            <!-- END: Inbox Content -->
        </div>
    </div>
</div>
