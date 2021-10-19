<div>
    @forelse ($ongoing_project as $project)
            <div class="col-span-12 lg:col-span-6 mt-5">
                <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <div class="w-72 flex-none flex items-center mr-5">
                            <a href="javascript:;" class="dropdown-togle w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star w-4 h-4"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </a>
                            <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark w-4 h-4"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                            </a>
                            <div class="inbox__item--sender truncate ml-3"><a href="{{ route('projects.show',$project->id) }}"> {{ Str::title($project->title) }} </a></div>
                        </div>
                        <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <label class="form-check-label ml-0 sm:ml-2" for="show-example-2">Mark Finished</label>
                            <input class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-6">
                    <div class="intro-y box">
                        <div id="boxed-accordion" class="p-5">
                            <div class="preview">
                                <div id="faq-accordion-2" class="accordion accordion-boxed">
                                    <div class="accordion-item">
                                    <div id="faq-accordion-content-1" class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5">
                                            {{ $project->description }}
                                        </button>
                                    </div>
                                    <div id="faq-accordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-1" data-bs-parent="#faq-accordion-2">
                                        <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                            Created At : {{ $project->created_at }} <br>
                                            Due Date : {{ $project->due_date }} <br>
                                            <a class="btn text-white dark:bg-theme-1 mt-1" href="{{ route('projects.show',$project->id) }}"> view tasks</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            No Data!!!
            @endforelse
</div>
