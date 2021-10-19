<div>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Chat</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
          <a href="javascript:;"
          {{-- onclick="Livewire.emit('openModal', 'category.categories')" --}}
           {{-- wire:click='$emit("openModal", "category.categories")' --}}
           {{-- data-toggle="modal" --}}
           {{-- data-target="#superlarge-modal-size-preview" --}}
           class="btn btn-primary shadow-md mr-2">
            Start New Chat
          </a>
          <a href="javascript:;"
           data-toggle="modal"
           data-target="#superlarge-modal-size-preview"
           class="btn btn-primary shadow-md mr-2">
            Template Modal
          </a>
          <div class="dropdown ml-auto sm:ml-0">
            <button
              class="
                dropdown-toggle
                btn
                px-2
                box
                text-gray-700
                dark:text-gray-300
              "
              aria-expanded="false"
            >
              <span class="w-5 h-5 flex items-center justify-center">
                <i class="w-4 h-4" data-feather="plus"></i>
              </span>
            </button>
            <div class="dropdown-menu w-40">
              <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
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
                  <i data-feather="users" class="w-4 h-4 mr-2"></i> Create
                  Group
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
      <div class="intro-y chat grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Chat Side Menu -->
        <div class="col-span-12 lg:col-span-4 xxl:col-span-3">
          <div class="intro-y pr-1">
            <div class="box p-2">
              <div
                class="chat__tabs nav nav-tabs justify-center"
                role="tablist"
              >
                <a
                  wire:click="openTab('chat')"
                  href="javascript:;"
                  class="flex-1 py-2 rounded-md text-center {{ $tab === 'chat' ? 'active' : '' }}"
                  role="tab"
                  aria-controls="chats"
                  aria-selected="true"
                  >Chats
                </a>
                <a
                wire:click="openTab('friends')"
                  href="javascript:;"
                  class="flex-1 py-2 rounded-md text-center {{ $tab === 'friends' ? 'active' : '' }}"
                  role="tab"
                  aria-controls="friends"
                  aria-selected="false"
                  >Friends
                </a>
                <a
                wire:click="openTab('profile')"
                  href="javascript:;"
                  class="flex-1 py-2 rounded-md text-center {{ $tab === 'profile' ? 'active' : '' }}"
                  role="tab"
                  aria-controls="profile"
                  aria-selected="false"
                  >Profile
                  </a>
              </div>
            </div>
          </div>
          @if ($tab === 'chat')
            @livewire('chat.chat-users')
          @elseif($tab === 'friends')
            @livewire('chat.chat-friends')
          @else
            @livewire('chat.chat-profile')
          @endif
        </div>
        <!-- END: Chat Side Menu -->
        <!-- BEGIN: Chat Content -->
        <div class="intro-y col-span-12 lg:col-span-8 xxl:col-span-9">
            @livewire('chat.chat-box')
            {{-- @livewire('chat-messenger') --}}
        </div>
        <!-- END: Chat Content -->
      </div>
      {{-- Modal --}}
      <div id="superlarge-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body p-10 text-center"> This is totally awesome superlarge modal! </div>
            </div>
        </div>
    </div>
    {{-- End Modal --}}
</div>
