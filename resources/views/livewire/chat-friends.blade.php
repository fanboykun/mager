<div>
    <div id="friends" class="tab-pane" role="tabpanel" aria-labelledby="friends-tab">
        <div class="pr-1">
          <div class="box p-5 mt-5">
            <div class="relative text-gray-700 dark:text-gray-300">
              <input
                type="text"
                wire:model="search"
                class="
                  form-control
                  py-3
                  px-4
                  border-transparent
                  bg-gray-200
                  pr-10
                  placeholder-theme-13
                "
                placeholder="Search for messages or users..."
              />
              <i
                class="
                  w-4
                  h-4
                  hidden
                  sm:absolute
                  my-auto
                  inset-y-0
                  mr-3
                  right-0
                "
                data-feather="search"
              ></i>
            </div>
            <button type="button" class="btn btn-primary w-full mt-3">
              Invite Friends
            </button>
          </div>
        </div>
        <div class="chat__user-list overflow-y-auto scrollbar-hidden pr-1 pt-1">
        @foreach ($grouped as $key => $value)
        <div class="mt-4 text-gray-600">{{ $key }}
        </div>
        @foreach ($value as $k => $user)

        <div class="cursor-pointer box relative flex items-center p-5 mt-5">
          <div class="w-12 h-12 flex-none image-fit mr-1">
            <img
              alt="Rubick Tailwind HTML Admin Template"
              class="rounded-full"
              src="{{ $user->profile_photo_url }}"
            />
            <div
              class="
                w-3
                h-3
                bg-theme-9
                absolute
                right-0
                bottom-0
                rounded-full
                border-2 border-white
              "
            ></div>
          </div>
          <div class="ml-2 overflow-hidden">
            <div class="flex items-center">
              <a href="javascript:void(0)" role="button"
              wire:click="$emit('beginChat', {{ $user->id }})" class="font-medium">{{ $user->name }}</a>
            </div>
            <div class="w-full truncate text-gray-600 mt-0.5">
              {{ $user->identity->status }}
            </div>
          </div>
          <div class="dropdown ml-auto">
            <a
              class="dropdown-toggle w-5 h-5 block"
              href="javascript:void(0);"
              aria-expanded="false"
            >
              <i
                data-feather="more-horizontal"
                class="w-5 h-5 text-gray-600 dark:text-gray-300"
              ></i>
            </a>
            <div class="dropdown-menu w-40">
              <div
                class="dropdown-menu__content box dark:bg-dark-1 p-2"
              >
                <a
                  href=""
                  class="
                    flex
                    items-center
                    block
                    p-2
                    transition
                    duration-300
                    ease-in-out
                    bg-white
                    dark:bg-dark-1
                    hover:bg-gray-200
                    dark:hover:bg-dark-2
                    rounded-md
                  "
                >
                  <i data-feather="share-2" class="w-4 h-4 mr-2"></i>
                  Share Contact
                </a>
                <a
                  href=""
                  class="
                    flex
                    items-center
                    block
                    p-2
                    transition
                    duration-300
                    ease-in-out
                    bg-white
                    dark:bg-dark-1
                    hover:bg-gray-200
                    dark:hover:bg-dark-2
                    rounded-md
                  "
                >
                  <i data-feather="copy" class="w-4 h-4 mr-2"></i>
                  Copy Contact
                </a>
              </div>
            </div>
          </div>
        </div>

        @endforeach

        @endforeach
        </div>
      </div>
</div>
