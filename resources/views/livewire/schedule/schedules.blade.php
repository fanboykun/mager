<div>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Calendar</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
          <button class="btn btn-primary shadow-md mr-2">
            Print Schedule
          </button>
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
                  <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
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
    <div class="grid grid-cols-12 gap-5 mt-5" id="calendar-container">
        <!-- BEGIN: Calendar Content -->
        <div class="col-span-12 xl:col-span-12 xxl:col-span-9">
            <div class="box p-5" wire:ignore>
                <div class="full-calendar" id="calendar"></div>
            </div>
        </div>
        <!-- END: Calendar Content -->
    </div>
</div>

