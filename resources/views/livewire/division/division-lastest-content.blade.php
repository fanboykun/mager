<div>
    <div class="col-span-12 mt-6">
        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
            <table class="table table-report sm:mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">AUTHOR</th>
                        <th class="whitespace-nowrap">ARTICLE & CATEGORY NAME</th>
                        {{-- <th class="text-center whitespace-nowrap">STOCK</th> --}}
                        <th class="text-center whitespace-nowrap">CREATED AT</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($user_articles as $user_article)
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                            <a href="" class="font-medium whitespace-nowrap">{{ $user_article->name }}</a>
                            </div>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap">{{ $user_article->articles()->first()->title }}</a>
                            <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">{{ $user_article->articles()->first()->category->name }}</div>
                        </td>
                        {{-- <td class="text-center">88</td> --}}
                        <td class="w-40">
                            <div class="flex items-center justify-center text-theme-2">
                                {{ $user_article->articles()->first()->created_at->format('d M Y') }}
                            </div>
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-1">
                                        <polyline points="9 11 12 14 22 4"></polyline>
                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                    </svg> Edit
                                </a>
                                <a class="flex items-center text-theme-6" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-trash-2 w-4 h-4 mr-1">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg> Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    No Data !!!
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
