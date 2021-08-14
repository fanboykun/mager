<x-app-layout>
    <h2 class="intro-y text-lg font-medium mt-10">Users Layout</h2>
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
        <button class="btn btn-primary shadow-md mr-2">Add New User</button>
        <div class="dropdown">
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
                <i data-feather="users" class="w-4 h-4 mr-2"></i> Add Group
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
                <i data-feather="message-circle" class="w-4 h-4 mr-2"></i>
                Send Message
              </a>
            </div>
          </div>
        </div>
        <div class="hidden md:block mx-auto text-gray-600">
          Showing 1 to 10 of 150 entries
        </div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
          <div class="w-56 relative text-gray-700 dark:text-gray-300">
            <input
              type="text"
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
      <!-- BEGIN: Users Layout -->
      <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
        <div class="box">
          <div class="flex items-start px-5 pt-5">
            <div class="w-full flex flex-col lg:flex-row items-center">
              <div class="w-16 h-16 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-1.jpg"
                />
              </div>
              <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                <a href="" class="font-medium">Angelina Jolie</a>
                <div class="text-gray-600 text-xs mt-0.5">
                  Software Engineer
                </div>
              </div>
            </div>
            <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
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
                    <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit
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
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center lg:text-left p-5">
            <div>
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form, by injected humour, or randomi
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-5
              "
            >
              <i data-feather="mail" class="w-3 h-3 mr-2"></i>
              angelinajolie@left4code.com
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-1
              "
            >
              <i data-feather="instagram" class="w-3 h-3 mr-2"></i> Angelina
              Jolie
            </div>
          </div>
          <div
            class="
              text-center
              lg:text-right
              p-5
              border-t border-gray-200
              dark:border-dark-5
            "
          >
            <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
            <button class="btn btn-outline-secondary py-1 px-2">
              Profile
            </button>
          </div>
        </div>
      </div>
      <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
        <div class="box">
          <div class="flex items-start px-5 pt-5">
            <div class="w-full flex flex-col lg:flex-row items-center">
              <div class="w-16 h-16 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-13.jpg"
                />
              </div>
              <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                <a href="" class="font-medium">Johnny Depp</a>
                <div class="text-gray-600 text-xs mt-0.5">
                  Backend Engineer
                </div>
              </div>
            </div>
            <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
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
                    <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit
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
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center lg:text-left p-5">
            <div>
              Contrary to popular belief, Lorem Ipsum is not simply random
              text. It has roots in a piece of classical Latin literature
              from 45 BC, making it over 20
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-5
              "
            >
              <i data-feather="mail" class="w-3 h-3 mr-2"></i>
              johnnydepp@left4code.com
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-1
              "
            >
              <i data-feather="instagram" class="w-3 h-3 mr-2"></i> Johnny
              Depp
            </div>
          </div>
          <div
            class="
              text-center
              lg:text-right
              p-5
              border-t border-gray-200
              dark:border-dark-5
            "
          >
            <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
            <button class="btn btn-outline-secondary py-1 px-2">
              Profile
            </button>
          </div>
        </div>
      </div>
      <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
        <div class="box">
          <div class="flex items-start px-5 pt-5">
            <div class="w-full flex flex-col lg:flex-row items-center">
              <div class="w-16 h-16 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-7.jpg"
                />
              </div>
              <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                <a href="" class="font-medium">Denzel Washington</a>
                <div class="text-gray-600 text-xs mt-0.5">
                  Backend Engineer
                </div>
              </div>
            </div>
            <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
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
                    <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit
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
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center lg:text-left p-5">
            <div>
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout.
              The point of using Lorem
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-5
              "
            >
              <i data-feather="mail" class="w-3 h-3 mr-2"></i>
              denzelwashington@left4code.com
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-1
              "
            >
              <i data-feather="instagram" class="w-3 h-3 mr-2"></i> Denzel
              Washington
            </div>
          </div>
          <div
            class="
              text-center
              lg:text-right
              p-5
              border-t border-gray-200
              dark:border-dark-5
            "
          >
            <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
            <button class="btn btn-outline-secondary py-1 px-2">
              Profile
            </button>
          </div>
        </div>
      </div>
      <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
        <div class="box">
          <div class="flex items-start px-5 pt-5">
            <div class="w-full flex flex-col lg:flex-row items-center">
              <div class="w-16 h-16 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-1.jpg"
                />
              </div>
              <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                <a href="" class="font-medium">Keanu Reeves</a>
                <div class="text-gray-600 text-xs mt-0.5">
                  Software Engineer
                </div>
              </div>
            </div>
            <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
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
                    <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit
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
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center lg:text-left p-5">
            <div>
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout.
              The point of using Lorem
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-5
              "
            >
              <i data-feather="mail" class="w-3 h-3 mr-2"></i>
              keanureeves@left4code.com
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-1
              "
            >
              <i data-feather="instagram" class="w-3 h-3 mr-2"></i> Keanu
              Reeves
            </div>
          </div>
          <div
            class="
              text-center
              lg:text-right
              p-5
              border-t border-gray-200
              dark:border-dark-5
            "
          >
            <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
            <button class="btn btn-outline-secondary py-1 px-2">
              Profile
            </button>
          </div>
        </div>
      </div>
      <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
        <div class="box">
          <div class="flex items-start px-5 pt-5">
            <div class="w-full flex flex-col lg:flex-row items-center">
              <div class="w-16 h-16 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-7.jpg"
                />
              </div>
              <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                <a href="" class="font-medium">Al Pacino</a>
                <div class="text-gray-600 text-xs mt-0.5">
                  Frontend Engineer
                </div>
              </div>
            </div>
            <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
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
                    <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit
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
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center lg:text-left p-5">
            <div>
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form, by injected humour, or randomi
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-5
              "
            >
              <i data-feather="mail" class="w-3 h-3 mr-2"></i>
              alpacino@left4code.com
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-1
              "
            >
              <i data-feather="instagram" class="w-3 h-3 mr-2"></i> Al
              Pacino
            </div>
          </div>
          <div
            class="
              text-center
              lg:text-right
              p-5
              border-t border-gray-200
              dark:border-dark-5
            "
          >
            <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
            <button class="btn btn-outline-secondary py-1 px-2">
              Profile
            </button>
          </div>
        </div>
      </div>
      <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
        <div class="box">
          <div class="flex items-start px-5 pt-5">
            <div class="w-full flex flex-col lg:flex-row items-center">
              <div class="w-16 h-16 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-6.jpg"
                />
              </div>
              <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                <a href="" class="font-medium">Leonardo DiCaprio</a>
                <div class="text-gray-600 text-xs mt-0.5">
                  Backend Engineer
                </div>
              </div>
            </div>
            <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
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
                    <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit
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
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center lg:text-left p-5">
            <div>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry&#039;s
              standard dummy text ever since the 1500
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-5
              "
            >
              <i data-feather="mail" class="w-3 h-3 mr-2"></i>
              leonardodicaprio@left4code.com
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-1
              "
            >
              <i data-feather="instagram" class="w-3 h-3 mr-2"></i> Leonardo
              DiCaprio
            </div>
          </div>
          <div
            class="
              text-center
              lg:text-right
              p-5
              border-t border-gray-200
              dark:border-dark-5
            "
          >
            <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
            <button class="btn btn-outline-secondary py-1 px-2">
              Profile
            </button>
          </div>
        </div>
      </div>
      <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
        <div class="box">
          <div class="flex items-start px-5 pt-5">
            <div class="w-full flex flex-col lg:flex-row items-center">
              <div class="w-16 h-16 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-2.jpg"
                />
              </div>
              <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                <a href="" class="font-medium">Morgan Freeman</a>
                <div class="text-gray-600 text-xs mt-0.5">
                  DevOps Engineer
                </div>
              </div>
            </div>
            <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
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
                    <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit
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
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center lg:text-left p-5">
            <div>
              Contrary to popular belief, Lorem Ipsum is not simply random
              text. It has roots in a piece of classical Latin literature
              from 45 BC, making it over 20
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-5
              "
            >
              <i data-feather="mail" class="w-3 h-3 mr-2"></i>
              morganfreeman@left4code.com
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-1
              "
            >
              <i data-feather="instagram" class="w-3 h-3 mr-2"></i> Morgan
              Freeman
            </div>
          </div>
          <div
            class="
              text-center
              lg:text-right
              p-5
              border-t border-gray-200
              dark:border-dark-5
            "
          >
            <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
            <button class="btn btn-outline-secondary py-1 px-2">
              Profile
            </button>
          </div>
        </div>
      </div>
      <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
        <div class="box">
          <div class="flex items-start px-5 pt-5">
            <div class="w-full flex flex-col lg:flex-row items-center">
              <div class="w-16 h-16 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-4.jpg"
                />
              </div>
              <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                <a href="" class="font-medium">Morgan Freeman</a>
                <div class="text-gray-600 text-xs mt-0.5">
                  Software Engineer
                </div>
              </div>
            </div>
            <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
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
                    <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit
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
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center lg:text-left p-5">
            <div>
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout.
              The point of using Lorem
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-5
              "
            >
              <i data-feather="mail" class="w-3 h-3 mr-2"></i>
              morganfreeman@left4code.com
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-1
              "
            >
              <i data-feather="instagram" class="w-3 h-3 mr-2"></i> Morgan
              Freeman
            </div>
          </div>
          <div
            class="
              text-center
              lg:text-right
              p-5
              border-t border-gray-200
              dark:border-dark-5
            "
          >
            <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
            <button class="btn btn-outline-secondary py-1 px-2">
              Profile
            </button>
          </div>
        </div>
      </div>
      <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
        <div class="box">
          <div class="flex items-start px-5 pt-5">
            <div class="w-full flex flex-col lg:flex-row items-center">
              <div class="w-16 h-16 image-fit">
                <img
                  alt="Rubick Tailwind HTML Admin Template"
                  class="rounded-full"
                  src="http://rubick-laravel.left4code.com/dist/images/profile-9.jpg"
                />
              </div>
              <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                <a href="" class="font-medium">Tom Cruise</a>
                <div class="text-gray-600 text-xs mt-0.5">
                  Software Engineer
                </div>
              </div>
            </div>
            <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
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
                    <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit
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
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center lg:text-left p-5">
            <div>
              Lorem Ipsum is simply dummy text of the printing and
              typesetting industry. Lorem Ipsum has been the industry&#039;s
              standard dummy text ever since the 1500
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-5
              "
            >
              <i data-feather="mail" class="w-3 h-3 mr-2"></i>
              tomcruise@left4code.com
            </div>
            <div
              class="
                flex
                items-center
                justify-center
                lg:justify-start
                text-gray-600
                mt-1
              "
            >
              <i data-feather="instagram" class="w-3 h-3 mr-2"></i> Tom
              Cruise
            </div>
          </div>
          <div
            class="
              text-center
              lg:text-right
              p-5
              border-t border-gray-200
              dark:border-dark-5
            "
          >
            <button class="btn btn-primary py-1 px-2 mr-2">Message</button>
            <button class="btn btn-outline-secondary py-1 px-2">
              Profile
            </button>
          </div>
        </div>
      </div>
      <!-- END: Users Layout -->
      <!-- BEGIN: Pagination -->
      <div
        class="
          intro-y
          col-span-12
          flex flex-wrap
          sm:flex-row sm:flex-nowrap
          items-center
        "
      >
        <ul class="pagination">
          <li>
            <a class="pagination__link" href="">
              <i class="w-4 h-4" data-feather="chevrons-left"></i>
            </a>
          </li>
          <li>
            <a class="pagination__link" href="">
              <i class="w-4 h-4" data-feather="chevron-left"></i>
            </a>
          </li>
          <li>
            <a class="pagination__link" href="">...</a>
          </li>
          <li>
            <a class="pagination__link" href="">1</a>
          </li>
          <li>
            <a class="pagination__link pagination__link--active" href=""
              >2</a
            >
          </li>
          <li>
            <a class="pagination__link" href="">3</a>
          </li>
          <li>
            <a class="pagination__link" href="">...</a>
          </li>
          <li>
            <a class="pagination__link" href="">
              <i class="w-4 h-4" data-feather="chevron-right"></i>
            </a>
          </li>
          <li>
            <a class="pagination__link" href="">
              <i class="w-4 h-4" data-feather="chevrons-right"></i>
            </a>
          </li>
        </ul>
        <select class="w-20 form-select box mt-3 sm:mt-0">
          <option>10</option>
          <option>25</option>
          <option>35</option>
          <option>50</option>
        </select>
      </div>
      <!-- END: Pagination -->
    </div>
</x-app-layout>
