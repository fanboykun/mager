<div>
    <div class="tab-content">
        <div
          id="chats"
          class="tab-pane active"
          role="tabpanel"
          aria-labelledby="chats-tab"
        >
          <div class="pr-1">
            <div class="box px-5 pt-5 pb-5 lg:pb-0 mt-5">
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
                  placeholder="Search for users..."
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
              <div class="overflow-x-auto scrollbar-hidden">
                <div class="flex mt-5">
                    @foreach ($grouped as $user)
                    <a role="button" href="javascript:void(0)" wire:click="$emit('beginChat', {{ $user->id }})" class="w-10 mr-4 cursor-pointer">
                      <div
                        class="w-10 h-10 flex-none image-fit rounded-full"
                      >
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
                      <div
                        class="
                          text-xs text-gray-600
                          truncate
                          text-center
                          mt-2
                        "
                      >
                        {{ $user->name }}
                      </div>
                    </a>
                    @endforeach
                </div>
              </div>
            </div>
          </div>
          <div
            class="
              chat__chat-list
              overflow-y-auto
              scrollbar-hidden
              pr-1
              pt-1
              mt-4
            "
          >
          @foreach ($conversations as $conversation)
          <div
          class="
            intro-x
            cursor-pointer
            box
            relative
            flex
            items-center
            p-5
            mt-5
          "
        >
          <div class="w-12 h-12 flex-none image-fit mr-1">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="{{ $conversation->toUser->id === auth()->id() ? $conversation->user->profile_photo_url : $conversation->toUser->profile_photo_url }}"
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
          <div class="ml-2 overflow-hidden" id="chatbox">
            <div class="flex items-center">
              <a href="javascript:;" wire:click="$emit('beginConversation', {{ $conversation->id }})" class="font-medium"
                >{{ $conversation->toUser->id === auth()->id() ? $conversation->user->name : $conversation->toUser->name }}</a
              >
              <div class="text-xs text-gray-500 ml-auto">
                  <span>
                      {{ $conversation->latestMessage->published }}
                  </span>
              </div>
            </div>
            <div class="w-full truncate text-gray-600 mt-0.5">
              {{ $conversation->latestMessage->body }}
            </div>
          </div>
          <div
          class="
            w-5
            h-5
            flex
            items-center
            justify-center
            absolute
            top-0
            right-0
            text-xs text-white
            rounded-full
            bg-theme-1
            font-medium
            -mt-1
            -mr-1
          "
        >
          {{ $loop->iteration }}
        </div>
        </div>
          @endforeach

          </div>
        </div>
      </div>

    </div>

    {{-- @section('scripts')
    <script>
        $wire.on('some-event', (foo, bar) => {
            var element = document.getElementById("chatbox");
            element.scrollTop = element.scrollHeight;
        })
    </script>
    @endsection --}}
