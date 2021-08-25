@props(['formAction' => false])

    @if($formAction)
        <form wire:submit.prevent="{{ $formAction }}">
            {{-- @csrf --}}
    @endif
    <div\ tabindex="0" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    @if (isset($title))
                        <h2 class="font-medium text-base mr-auto">{{ $title }}</h2>
                    @endif
                    @if(isset($description))
                    <button class="btn btn-outline-secondary hidden sm:flex">
                        <i data-feather="file" class="w-4 h-4 mr-2"></i> {{ $description }}
                        </button>
                    @endif
                    {{-- <div class="dropdown sm:hidden">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false">
                            <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-600"></i>
                        </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->

                    @if (isset($content))
                            {{ $content }}
                    @endif

                        <!-- END: Modal Body -->
                        <!-- BEGIN: Modal Footer -->
                        <div class="modal-footer text-right">
                            {{ $buttons }}
                        </div>
                <!-- END: Modal Footer -->
            </div>
        </div>
    </div>
    @if($formAction)
        </form>
    @endif
    @if (isset($scripts))
        @once
            @push('scripts')
                {{ $scripts }}
            @endpush
        @endonce
    @endif
