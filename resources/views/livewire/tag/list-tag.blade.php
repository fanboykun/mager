<div>
    <div class="col-span-12 mt-6">
        {{-- <div class="intro-y block sm:flex items-center h-10"> --}}
            <h2 class="intro-y text-lg font-medium mt-10">List Of Article Tags</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
      <div
        class="
          intro-y
          col-span-12
          flex flex-wrap
          sm:flex-nowrap
          items-center
          mt-2
        "
      >
        <button type="button" wire:click='$emit("openModal", "tag.tags",@json(["is_delete" => false]))' class="btn btn-primary shadow-md mr-2">Add New Tag</button>
        <div class="hidden md:block mx-auto text-gray-600">

        </div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
          <div class="w-56 relative text-gray-700 dark:text-gray-300">
            <input
              type="text"
              wire:model.debounce.500ms="search"
              class="form-control w-56 box pr-10 placeholder-theme-13"
              placeholder="Search..."
            />
            <i
              class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"
              data-feather="search"
            ></i>
          </div>
        </div>
      </div>

            {{-- <h2 class="text-lg font-medium truncate mr-5">List Of Article tags</h2> --}}
            {{-- <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                <button class="btn box flex items-center text-gray-700 dark:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text hidden sm:block w-4 h-4 mr-2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Export to Excel
                </button>
                <button class="ml-3 btn box flex items-center text-gray-700 dark:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text hidden sm:block w-4 h-4 mr-2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> Export to PDF
                </button>
            </div> --}}
        </div>
        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
            <table class="table table-report sm:mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">IMAGES</th>
                        <th class="whitespace-nowrap">TAG NAME</th>
                        <th class="text-center whitespace-nowrap">COUNT OF ARTICLE</th>
                        <th class="text-center whitespace-nowrap">UPDATED AT</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($tags as $tag)
                    <tr class="intro-x">
                            <td class="w-40">
                                <div class="flex">
                                    <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                        <img alt="error" class="tooltip rounded-full" src={{ url('https://ui-avatars.com/api/?name='.urlencode($tag->name).'&color=7F9CF5&background=EBF4FF') }}>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $tag->name }}</a>
                                {{-- <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Electronic</div> --}}
                            </td>
                            <td class="text-center">{{ $tag->articles_count }}</td>
                            <td class="w-40">
                                <div class="flex items-center justify-center text-theme-6">
                                    <i data-feather="clock" class="w-4 h-4 mr-2"></i>
                                    {{ $tag->updated_at->format('d-M-Y') }}
                                </div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" role="button" wire:click='$emit("openModal", "tag.tags", @json(["tag" => $tag, "is_delete" => false]))' href="javascript:void(0)" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-1">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a class="flex items-center text-theme-6" role="button" wire:click='$emit("openModal", "tag.tags", @json(["tag" => $tag, "is_delete" => true]))' href="javascript:void(0)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 w-4 h-4 mr-1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </td>
                    </tr>
                    @empty
                    No Data!
                    @endforelse

                </tbody>
            </table>
        </div>
        <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">

        </div>
    </div>
</div>
