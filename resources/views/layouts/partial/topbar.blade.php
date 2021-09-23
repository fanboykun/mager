<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    <div class="intro-x breadcrumb mr-auto hidden sm:flex">
      <a href="">Application</a>
      <i data-feather="chevron-right" class="breadcrumb__icon"></i>
      <a href="" class="breadcrumb--active">Dashboard</a>
    </div>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Search -->
    {{-- <div class="intro-x relative mr-3 sm:mr-6">
      <div class="search hidden sm:block">
        <input
          type="text"
          class="
            search__input
            form-control
            border-transparent
            placeholder-theme-13
          "
          placeholder="Search..."
        />
        <i
          data-feather="search"
          class="search__icon dark:text-gray-300"
        ></i>
      </div>
      <a class="notification sm:hidden" href="">
        <i
          data-feather="search"
          class="notification__icon dark:text-gray-300"
        ></i>
      </a>
      <div class="search-result">
        <div class="search-result__content">
          <div class="search-result__content__title">Pages</div>
          <div class="mb-5">
            <a href="" class="flex items-center">
              <div
                class="
                  w-8
                  h-8
                  bg-theme-18
                  text-theme-9
                  flex
                  items-center
                  justify-center
                  rounded-full
                "
              >
                <i class="w-4 h-4" data-feather="inbox"></i>
              </div>
              <div class="ml-3">Mail Settings</div>
            </a>
            <a href="" class="flex items-center mt-2">
              <div
                class="
                  w-8
                  h-8
                  bg-theme-17
                  text-theme-11
                  flex
                  items-center
                  justify-center
                  rounded-full
                "
              >
                <i class="w-4 h-4" data-feather="users"></i>
              </div>
              <div class="ml-3">Users & Permissions</div>
            </a>
            <a href="" class="flex items-center mt-2">
              <div
                class="
                  w-8
                  h-8
                  bg-theme-14
                  text-theme-10
                  flex
                  items-center
                  justify-center
                  rounded-full
                "
              >
                <i class="w-4 h-4" data-feather="credit-card"></i>
              </div>
              <div class="ml-3">Transactions Report</div>
            </a>
          </div>
          <div class="search-result__content__title">Users</div>
          <div class="mb-5">
            <a href="" class="flex items-center mt-2">
              <div class="w-8 h-8 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-2.jpg"
                />
              </div>
              <div class="ml-3">Al Pacino</div>
              <div
                class="
                  ml-auto
                  w-48
                  truncate
                  text-gray-600 text-xs text-right
                "
              >
                alpacino@left4code.com
              </div>
            </a>
            <a href="" class="flex items-center mt-2">
              <div class="w-8 h-8 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-7.jpg"
                />
              </div>
              <div class="ml-3">Kate Winslet</div>
              <div
                class="
                  ml-auto
                  w-48
                  truncate
                  text-gray-600 text-xs text-right
                "
              >
                katewinslet@left4code.com
              </div>
            </a>
            <a href="" class="flex items-center mt-2">
              <div class="w-8 h-8 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-10.jpg"
                />
              </div>
              <div class="ml-3">Al Pacino</div>
              <div
                class="
                  ml-auto
                  w-48
                  truncate
                  text-gray-600 text-xs text-right
                "
              >
                alpacino@left4code.com
              </div>
            </a>
            <a href="" class="flex items-center mt-2">
              <div class="w-8 h-8 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-14.jpg"
                />
              </div>
              <div class="ml-3">Kevin Spacey</div>
              <div
                class="
                  ml-auto
                  w-48
                  truncate
                  text-gray-600 text-xs text-right
                "
              >
                kevinspacey@left4code.com
              </div>
            </a>
          </div>
          <div class="search-result__content__title">Products</div>
          <a href="" class="flex items-center mt-2">
            <div class="w-8 h-8 image-fit">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/preview-15.jpg"
              />
            </div>
            <div class="ml-3">Sony Master Series A9G</div>
            <div
              class="
                ml-auto
                w-48
                truncate
                text-gray-600 text-xs text-right
              "
            >
              Electronic
            </div>
          </a>
          <a href="" class="flex items-center mt-2">
            <div class="w-8 h-8 image-fit">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/preview-13.jpg"
              />
            </div>
            <div class="ml-3">Samsung Galaxy S20 Ultra</div>
            <div
              class="
                ml-auto
                w-48
                truncate
                text-gray-600 text-xs text-right
              "
            >
              Smartphone &amp; Tablet
            </div>
          </a>
          <a href="" class="flex items-center mt-2">
            <div class="w-8 h-8 image-fit">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/preview-9.jpg"
              />
            </div>
            <div class="ml-3">Samsung Q90 QLED TV</div>
            <div
              class="
                ml-auto
                w-48
                truncate
                text-gray-600 text-xs text-right
              "
            >
              Electronic
            </div>
          </a>
          <a href="" class="flex items-center mt-2">
            <div class="w-8 h-8 image-fit">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/preview-9.jpg"
              />
            </div>
            <div class="ml-3">Sony A7 III</div>
            <div
              class="
                ml-auto
                w-48
                truncate
                text-gray-600 text-xs text-right
              "
            >
              Photography
            </div>
          </a>
        </div>
      </div>
    </div> --}}
    <!-- END: Search -->
    <!-- BEGIN: Notifications -->
    {{-- <div class="intro-x dropdown mr-auto sm:mr-6">
      <div x-on:click="open = ! open"
        class="
          dropdown-toggle
          notification notification--bullet
          cursor-pointer
        "
        role="button"
        aria-expanded="false"
      >
        <i
          data-feather="bell"
          class="notification__icon dark:text-gray-300"
        ></i>
      </div>
      <div @click.outside="open = false" class="notification-content pt-2 dropdown-menu">
        <div
          class="
            notification-content__box
            dropdown-menu__content
            box
            dark:bg-dark-6
          "
        >
          <div class="notification-content__title">Notifications</div>
          <div class="cursor-pointer relative flex items-center">
            <div class="w-12 h-12 flex-none image-fit mr-1">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/profile-2.jpg"
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
                <a href="javascript:;" class="font-medium truncate mr-5"
                  >Al Pacino</a
                >
                <div
                  class="text-xs text-gray-500 ml-auto whitespace-nowrap"
                >
                  05:09 AM
                </div>
              </div>
              <div class="w-full truncate text-gray-600 mt-0.5">
                Contrary to popular belief, Lorem Ipsum is not simply
                random text. It has roots in a piece of classical Latin
                literature from 45 BC, making it over 20
              </div>
            </div>
          </div>
          <div class="cursor-pointer relative flex items-center mt-5">
            <div class="w-12 h-12 flex-none image-fit mr-1">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/profile-7.jpg"
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
                <a href="javascript:;" class="font-medium truncate mr-5"
                  >Kate Winslet</a
                >
                <div
                  class="text-xs text-gray-500 ml-auto whitespace-nowrap"
                >
                  01:10 PM
                </div>
              </div>
              <div class="w-full truncate text-gray-600 mt-0.5">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry&#039;s standard dummy text ever since the 1500
              </div>
            </div>
          </div>
          <div class="cursor-pointer relative flex items-center mt-5">
            <div class="w-12 h-12 flex-none image-fit mr-1">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/profile-10.jpg"
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
                <a href="javascript:;" class="font-medium truncate mr-5"
                  >Al Pacino</a
                >
                <div
                  class="text-xs text-gray-500 ml-auto whitespace-nowrap"
                >
                  05:09 AM
                </div>
              </div>
              <div class="w-full truncate text-gray-600 mt-0.5">
                It is a long established fact that a reader will be
                distracted by the readable content of a page when looking
                at its layout. The point of using Lorem
              </div>
            </div>
          </div>
          <div class="cursor-pointer relative flex items-center mt-5">
            <div class="w-12 h-12 flex-none image-fit mr-1">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/profile-14.jpg"
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
                <a href="javascript:;" class="font-medium truncate mr-5"
                  >Kevin Spacey</a
                >
                <div
                  class="text-xs text-gray-500 ml-auto whitespace-nowrap"
                >
                  01:10 PM
                </div>
              </div>
              <div class="w-full truncate text-gray-600 mt-0.5">
                It is a long established fact that a reader will be
                distracted by the readable content of a page when looking
                at its layout. The point of using Lorem
              </div>
            </div>
          </div>
          <div class="cursor-pointer relative flex items-center mt-5">
            <div class="w-12 h-12 flex-none image-fit mr-1">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/profile-5.jpg"
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
                <a href="javascript:;" class="font-medium truncate mr-5"
                  >Johnny Depp</a
                >
                <div
                  class="text-xs text-gray-500 ml-auto whitespace-nowrap"
                >
                  06:05 AM
                </div>
              </div>
              <div class="w-full truncate text-gray-600 mt-0.5">
                There are many variations of passages of Lorem Ipsum
                available, but the majority have suffered alteration in
                some form, by injected humour, or randomi
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8">
      <div
        class="
          dropdown-toggle
          w-8
          h-8
          rounded-full
          overflow-hidden
          shadow-lg
          image-fit
          zoom-in
        "
        role="button"
        aria-expanded="false"
        >
        <img
          alt="Rubick Tailwind HTML Admin Template"
          src="{{ Auth::user()->profile_photo_url }}"
        />
      </div>
      <div
       class="dropdown-menu w-56">
        <div
          class="
            dropdown-menu__content
            box
            bg-theme-26
            dark:bg-dark-6
            text-white
          "
        >
          <div class="p-4 border-b border-theme-27 dark:border-dark-3">
            <div class="font-medium">{{ Auth::user()->name }}</div>
            <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">
              {{ Auth::user()->email }}
            </div>
          </div>
          <div class="p-2">
            {{-- <a
              href="{{ route('profile') }}"
              class="
                flex
                items-center
                block
                p-2
                transition
                duration-300
                ease-in-out
                hover:bg-theme-1
                dark:hover:bg-dark-3
                rounded-md
              "
            >
              <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile
            </a> --}}
            <a
              href="{{ route('update-profile') }}"
              class="
                flex
                items-center
                block
                p-2
                transition
                duration-300
                ease-in-out
                hover:bg-theme-1
                dark:hover:bg-dark-3
                rounded-md
              "
            >
              <i data-feather="edit" class="w-4 h-4 mr-2"></i> Update profile
            </a>
            {{-- <a
              href=""
              class="
                flex
                items-center
                block
                p-2
                transition
                duration-300
                ease-in-out
                hover:bg-theme-1
                dark:hover:bg-dark-3
                rounded-md
              "
            >
              <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help
            </a> --}}
          </div>
          <div class="p-2 border-t border-theme-27 dark:border-dark-3">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a
                href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        this.closest('form').submit();"
                class="
                    flex
                    items-center
                    block
                    p-2
                    transition
                    duration-300
                    ease-in-out
                    hover:bg-theme-1
                    dark:hover:bg-dark-3
                    rounded-md
                "
                >
                <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>
                Logout
                </a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Account Menu -->
  </div>


