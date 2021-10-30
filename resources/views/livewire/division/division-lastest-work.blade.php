<div>
    <div class="tab-content mt-5">
        <div id="profile" class="tab-pane active" role="tabpanel" aria-labelledby="profile-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Lastest Project -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">Lastest Project</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal w-5 h-5 text-gray-600 dark:text-gray-300"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a id="work-in-progress-new-tab" href="javascript:;" data-toggle="tab" data-target="#work-in-progress-new" class="block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                                    <a id="work-in-progress-last-week-tab" href="javascript:;" data-toggle="tab" data-target="#work-in-progress-last-week" class="block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" role="tab" aria-selected="false">Last Week</a>
                                </div>
                            </div>
                        </div>
                        <div class="nav nav-tabs ml-auto hidden sm:flex" role="tablist">
                            <a id="work-in-progress-mobile-new-tab" data-toggle="tab" data-target="#work-in-progress-new" href="javascript:;" class="py-5 ml-6 active" role="tab" aria-selected="true">New</a>
                            <a id="week-work-in-progress-mobile-last-week-tab" data-toggle="tab" data-target="#work-in-progress-last-week" href="javascript:;" class="py-5 ml-6" role="tab" aria-selected="false">Last Week</a>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                            @forelse ($lastest_project as $project)
                            <div class="relative flex items-center {{ $loop->first ? '' : 'mt-5' }}">
                                <div class="ml-4 mr-auto">
                                    <a href="" class="font-medium">{{ $project->title }}</a>
                                    <div class="text-gray-600 mr-5 sm:mr-5">{{ $project->created_at->format('d F Y') }}</div>
                                </div>
                                <a href="{{ route('projects.show', $project) }}" class="font-medium text-gray-700 dark:text-gray-600">View</a>
                            </div>
                            @empty
                                No Data !!!
                            @endforelse
                                <a href="{{ route('projects') }}" class="btn btn-secondary block w-40 mx-auto mt-5">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END:  Lastest Project -->

                <!-- BEGIN:  Lastest Task -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">Lastest Task</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal w-5 h-5 text-gray-600 dark:text-gray-300"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a id="work-in-progress-new-tab" href="javascript:;" data-toggle="tab" data-target="#work-in-progress-new" class="block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                                    <a id="work-in-progress-last-week-tab" href="javascript:;" data-toggle="tab" data-target="#work-in-progress-last-week" class="block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md" role="tab" aria-selected="false">Last Week</a>
                                </div>
                            </div>
                        </div>
                        <div class="nav nav-tabs ml-auto hidden sm:flex" role="tablist">
                            <a id="work-in-progress-mobile-new-tab" data-toggle="tab" data-target="#work-in-progress-new" href="javascript:;" class="py-5 ml-6 active" role="tab" aria-selected="true">New</a>
                            <a id="week-work-in-progress-mobile-last-week-tab" data-toggle="tab" data-target="#work-in-progress-last-week" href="javascript:;" class="py-5 ml-6" role="tab" aria-selected="false">Last Week</a>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                @forelse ($lastest_task as $task)
                                <div class="relative flex items-center {{ $loop->first ? '' : 'mt-5' }}">
                                    <div class="ml-4 mr-auto">
                                        <a href="" class="font-medium">{{ $task->title }}</a>
                                        <div class="text-gray-600 mr-5 sm:mr-5">{{ $task->created_at->format('d F Y') }}</div>
                                    </div>
                                    <a href="{{ route('projects.show', $task->project_id) }}" class="font-medium text-gray-700 dark:text-gray-600">View</a>
                                </div>
                                @empty
                                    No Data!!!
                                @endforelse
                                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END:  Lastest Task -->

            </div>
        </div>
    </div>
</div>
