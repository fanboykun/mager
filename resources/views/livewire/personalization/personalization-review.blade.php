<div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Profile Layout</h2>
    </div>
      <!-- BEGIN: Profile Info -->
      <div class="intro-y box px-5 pt-5 mt-5">
        <div
          class="
            flex flex-col
            lg:flex-row
            border-b border-gray-200
            dark:border-dark-5
            pb-5
            -mx-5
          "
        >
          <div
            class="
              flex flex-1
              px-5
              items-center
              justify-center
              lg:justify-start
            "
          >
            <div
              class="
                w-20
                h-20
                sm:w-24 sm:h-24
                flex-none
                lg:w-32 lg:h-32
                image-fit
                relative
              "
            >
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="rounded-full"
                src="http://rubick-laravel.left4code.com/dist/images/profile-15.jpg"
              />
            </div>
            <div class="ml-5">
              <div
                class="
                  w-24
                  sm:w-40
                  truncate
                  sm:whitespace-normal
                  font-medium
                  text-lg
                "
              >
                {{ $setting->name }}
              </div>
              <div class="text-gray-600">{{ $setting->tagline }}</div>
            </div>
          </div>
          <div
            class="
              mt-6
              lg:mt-0
              flex-1
              dark:text-gray-300
              px-5
              border-l border-r border-gray-200
              dark:border-dark-5
              border-t
              lg:border-t-0
              pt-5
              lg:pt-0
            "
          >
            <div class="font-medium text-center lg:text-left lg:mt-3">
              Contact Details
            </div>
            <div
              class="
                flex flex-col
                justify-center
                items-center
                lg:items-start
                mt-4
              "
            >
              <div class="truncate sm:whitespace-normal flex items-center">
                <i data-feather="mail" class="w-4 h-4 mr-2"></i>
                {{ $setting->email }}
              </div>
              <div
                class="truncate sm:whitespace-normal flex items-center mt-3"
              >
                <i data-feather="instagram" class="w-4 h-4 mr-2"></i>
                {{ $setting->instagram }}
              </div>
              <div
                class="truncate sm:whitespace-normal flex items-center mt-3"
              >
                <i data-feather="twitter" class="w-4 h-4 mr-2"></i> {{ $setting->twitter }}
              </div>
            </div>
          </div>
          <div
            class="
              mt-6
              lg:mt-0
              flex-1 flex
              items-center
              justify-center
              px-5
              border-t
              lg:border-0
              border-gray-200
              dark:border-dark-5
              pt-5
              lg:pt-0
            "
          >
            <div class="text-center rounded-md w-20 py-3">
              <div
                class="font-medium text-theme-1 dark:text-theme-10 text-xl"
              >
                {{ $users_count }}
              </div>
              <div class="text-gray-600">Users</div>
            </div>
            <div class="text-center rounded-md w-20 py-3">
              <div
                class="font-medium text-theme-1 dark:text-theme-10 text-xl"
              >
                {{ $articles_count }}
              </div>
              <div class="text-gray-600">Articles</div>
            </div>
            <div class="text-center rounded-md w-20 py-3">
              <div
                class="font-medium text-theme-1 dark:text-theme-10 text-xl"
              >
                {{ $events_count }}
              </div>
              <div class="text-gray-600">Events</div>
            </div>
          </div>
        </div>

            <!-- END: New Authors -->
          </div>
        </div>
      </div>
</div>
