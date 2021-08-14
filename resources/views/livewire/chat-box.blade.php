<div>
    <div class="chat__box box">
        <!-- BEGIN: Chat Active -->
        @if ($chat == true)

        <div class="h-full flex flex-col">
          <div
            class="
              flex flex-col
              sm:flex-row
              border-b border-gray-200
              dark:border-dark-5
              px-5
              py-4
            "
          >
            <div class="flex items-center">
              <div
                class="
                  w-10
                  h-10
                  sm:w-12 sm:h-12
                  flex-none
                  image-fit
                  relative
                "
              >
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="{{ asset('profile-14.jpg') }}"
                />
              </div>
              <div class="ml-3 mr-auto">
                <div class="font-medium text-base">{{ $user != null ? $user->name : '' }}</div>
                <div class="text-gray-600 text-xs sm:text-sm">
                  Hey, I am using chat <span class="mx-1">•</span> Online
                </div>
              </div>
            </div>
            <div
              class="
                flex
                items-center
                sm:ml-auto
                mt-5
                sm:mt-0
                border-t
                sm:border-0
                border-gray-200
                pt-3
                sm:pt-0
                -mx-5
                sm:mx-0
                px-5
                sm:px-0
              "
            >
              <a href="javascript:;" class="w-5 h-5 text-gray-600">
                <i data-feather="search" class="w-5 h-5"></i>
              </a>
              <a href="javascript:;" class="w-5 h-5 text-gray-600 ml-5">
                <i data-feather="user-plus" class="w-5 h-5"></i>
              </a>
              <div class="dropdown ml-auto sm:ml-3">
                <a
                  href="javascript:;"
                  class="dropdown-toggle w-5 h-5 text-gray-600"
                  aria-expanded="false"
                >
                  <i data-feather="more-vertical" class="w-5 h-5"></i>
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
                      <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                      Settings
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="overflow-y-scroll scrollbar-hidden px-5 pt-5 flex-1">

            <!-- Begin Message -->

          {{-- <div class="text-gray-500 dark:text-gray-600 text-xs text-center mb-10 mt-5">
            12 June 2020
          </div> --}}
          @foreach ($conversation->messages as $message)
          @if ($message->user_id == auth()->id())

          <div class="chat__box__text-box flex items-end float-right mb-4">
            <div class="hidden sm:block dropdown mr-3 my-auto">
              <a
                href="javascript:;"
                class="dropdown-toggle w-4 h-4 text-gray-600"
                aria-expanded="false"
              >
                <i data-feather="more-vertical" class="w-4 h-4"></i>
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
                    <i
                      data-feather="corner-up-left"
                      class="w-4 h-4 mr-2"
                    ></i>
                    Reply
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
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i>
                    Delete
                  </a>
                </div>
              </div>
            </div>
            <div
              class="
                bg-theme-1
                px-4
                py-3
                text-white
                rounded-l-md rounded-t-md
              "
            >
              {{ $message->body }}
              <div class="mt-1 text-xs text-theme-21">{{ $message->published }}</div>
            </div>
            <div
              class="
                w-10
                h-10
                hidden
                sm:block
                flex-none
                image-fit
                relative
                ml-5
              "
            >
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/profile-14.jpg"
              />
            </div>
          </div>
          <div class="clear-both"></div>

          @else

          <div class="chat__box__text-box flex items-end float-left mb-4">
            <div
              class="
                w-10
                h-10
                hidden
                sm:block
                flex-none
                image-fit
                relative
                mr-5
              "
            >
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/profile-1.jpg"
              />
            </div>
            <div
              class="
                bg-gray-200
                dark:bg-dark-5
                px-4
                py-3
                text-gray-700
                dark:text-gray-300
                rounded-r-md rounded-t-md
              "
            >
              {{ $message->body }}
              <div class="mt-1 text-xs text-gray-600">{{ $message->published }}</div>
            </div>
            <div class="hidden sm:block dropdown ml-3 my-auto">
              <a
                href="javascript:;"
                class="dropdown-toggle w-4 h-4 text-gray-600"
                aria-expanded="false"
              >
                <i data-feather="more-vertical" class="w-4 h-4"></i>
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
                    <i
                      data-feather="corner-up-left"
                      class="w-4 h-4 mr-2"
                    ></i>
                    Reply
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
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i>
                    Delete
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="clear-both"></div>

          @endif
          @endforeach

            <!-- End Message -->
          </div>
          {{-- @livewire('chat-messenger',['conversation' => $conversation->id]) --}}
          <div class="pt-4 pb-10 sm:py-4 flex items-center border-t border-gray-200 dark:border-dark-5">
            <input
            wire:model="body"
            wire:keydown.enter="sendMessage()"
              class="
                chat__box__input
                form-control
                dark:bg-dark-3
                h-16
                resize-none
                border-transparent
                px-5
                py-3
                shadow-none
                focus:ring-0
              "
              rows="1"
              placeholder="Type your message..."
            >
        {{-- </input> --}}
    {{--
              <div
                class="
                  w-4
                  h-4
                  sm:w-5 sm:h-5
                  relative
                  text-gray-600
                  mr-3
                  sm:mr-5
                "
              >
                <i data-feather="paperclip" class="w-full h-full"></i>
                <input
                  type="file"
                  class="w-full h-full top-0 left-0 absolute opacity-0"
                />

            </div> --}}
            <a
              {{-- type="button" --}}
              href=""
              class="
              w-8
              h-8
              sm:w-10 sm:h-10
              block
              bg-theme-1
              text-white
              rounded-full
              flex-none flex
              items-center
              justify-center
              mr-5
              "
              wire:click.prevent="sendMessage()"
            >
              <i data-feather="send" class="w-4 h-4"></i>
            </a>
          </div>
        </div>
        <!-- END: Chat Active -->
        @else
        <!-- BEGIN: Chat Default -->
        <div class="h-full flex items-center">
          <div class="mx-auto text-center">
            <div
              class="
                w-16
                h-16
                flex-none
                image-fit
                rounded-full
                overflow-hidden
                mx-auto
              "
            >
              <img
                alt="Rubick Tailwind HTML Admin Template"
                src="http://rubick-laravel.left4code.com/dist/images/profile-1.jpg"
              />
            </div>
            <div class="mt-3">
              <div class="font-medium">Hey, Russell Crowe!</div>
              <div class="text-gray-600 mt-1">
                Please select a chat to start messaging.
              </div>
            </div>
          </div>
        </div>
        <!-- END: Chat Default -->
        @endif
      </div>
</div>
