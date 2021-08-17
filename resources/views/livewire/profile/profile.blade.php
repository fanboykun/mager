<div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Update Profile</h2>
    </div>
      <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
          <div class="intro-y box mt-5">
            <div class="relative flex items-center p-5">
              <div class="w-12 h-12 image-fit">
                <img
                  alt="{{ $user->name }}"
                  class="rounded-full"
                  src="{{ $user->profile_photo_url }}"
                />
              </div>
              <div class="ml-4 mr-auto">
                <div class="font-medium text-base">{{ auth()->user()->name }}</div>
                <div class="text-gray-600">Frontend Engineer</div>
              </div>
              <div class="dropdown">
                <a
                  class="dropdown-toggle w-5 h-5 block"
                  href="javascript:;"
                  aria-expanded="false"
                >
                  <i
                    data-feather="more-horizontal"
                    class="w-5 h-5 text-gray-600 dark:text-gray-300"
                  ></i>
                </a>
                <div class="dropdown-menu w-56">
                  <div class="dropdown-menu__content box dark:bg-dark-1">
                    <div
                      class="
                        p-4
                        border-b border-gray-200
                        dark:border-dark-5
                        font-medium
                      "
                    >
                      Export Options
                    </div>
                    <div class="p-2">
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
                          data-feather="activity"
                          class="
                            w-4
                            h-4
                            text-gray-700
                            dark:text-gray-300
                            mr-2
                          "
                        ></i>
                        English
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
                        <i
                          data-feather="box"
                          class="
                            w-4
                            h-4
                            text-gray-700
                            dark:text-gray-300
                            mr-2
                          "
                        ></i>
                        Indonesia
                        <div
                          class="
                            text-xs text-white
                            px-1
                            rounded-full
                            bg-theme-6
                            ml-auto
                          "
                        >
                          10
                        </div>
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
                        <i
                          data-feather="layout"
                          class="
                            w-4
                            h-4
                            text-gray-700
                            dark:text-gray-300
                            mr-2
                          "
                        ></i>
                        English
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
                        <i
                          data-feather="sidebar"
                          class="
                            w-4
                            h-4
                            text-gray-700
                            dark:text-gray-300
                            mr-2
                          "
                        ></i>
                        Indonesia
                      </a>
                    </div>
                    <div
                      class="
                        px-3
                        py-3
                        border-t border-gray-200
                        dark:border-dark-5
                        font-medium
                        flex
                      "
                    >
                      <button type="button" class="btn btn-primary py-1 px-2">
                        Settings
                      </button>
                      <button
                        type="button"
                        class="btn btn-secondary py-1 px-2 ml-auto"
                      >
                        View Profile
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-5 border-t border-gray-200 dark:border-dark-5">
              {{-- <a
                class="
                  flex
                  items-center
                  text-theme-1
                  dark:text-theme-10
                  font-medium
                "
                href=""
              >
                <i data-feather="activity" class="w-4 h-4 mr-2"></i> Costumize Your Profile
              </a> --}}
                <a wire:click="changeTab(1)" class="flex items-center mt-5 {{ $tab == 1 ? 'text-theme-1 dark:text-theme-10 font-medium' : ''}}" href="javascript:;">
                    <i data-feather="settings" class="w-4 h-4 mr-2"></i> Personal information
              </a>
              <a wire:click="changeTab(2)" class="flex items-center mt-5 {{ $tab == 2 ? 'text-theme-1 dark:text-theme-10 font-medium' : '' }}" href="javascript:;">
                <i data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password
              </a>
              <a wire:click="changeTab(3)" class="flex items-center mt-5 {{ $tab == 3 ? 'text-theme-1 dark:text-theme-10 font-medium' : '' }}" href="javascript:;">
                <i data-feather="box" class="w-4 h-4 mr-2"></i> Display Information
              </a>
            </div>
            <div class="p-5 border-t border-gray-200 dark:border-dark-5 flex">
              <button type="button" wire:click="see()"class="btn btn-primary py-1 px-2">
                New Group
              </button>
              <button
                type="button"
                class="btn btn-outline-secondary py-1 px-2 ml-auto"
              >
                New Quick Link
              </button>
            </div>
          </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
            @if ($tab == 1)
            @livewire('profile.personal-information')
            @elseif ($tab == 2)
            @livewire('profile.change-password')
            @else
            @livewire('profile.display-information')
            @endif
        </div>
    </div>
</div>
