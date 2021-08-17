<x-guest-layout>
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
          <!-- BEGIN: Register Info -->
          <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="w-6"
                src="http://rubick-laravel.left4code.com/dist/images/logo.svg"
              />
              <span class="text-white text-lg ml-3">
                Ru<span class="font-medium">bick</span>
              </span>
            </a>
            <div class="my-auto">
              <img
                alt="Rubick Tailwind HTML Admin Template"
                class="-intro-x w-1/2 -mt-16"
                src="http://rubick-laravel.left4code.com/dist/images/illustration.svg"
              />
              <div
                class="
                  -intro-x
                  text-white
                  font-medium
                  text-4xl
                  leading-tight
                  mt-10
                "
              >
                A few more clicks to <br />
                Login to your account.
              </div>
              <div
                class="
                  -intro-x
                  mt-5
                  text-lg text-white text-opacity-70
                  dark:text-gray-500
                "
              >
                Manage all your e-commerce accounts in one place
              </div>
            </div>
          </div>
          <!-- END: Register Info -->
          <!-- BEGIN: Register Form -->
          {{-- <form method="POST" action="{{ route('register') }}">
            @csrf --}}
          <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div
              class="
                my-auto
                mx-auto
                xl:ml-20
                bg-dark-1
                xl:bg-transparent
                px-5
                sm:px-8
                py-8
                xl:p-0
                rounded-md
                shadow-md
                xl:shadow-none
                w-full
                sm:w-3/4
                lg:w-2/4
                xl:w-auto
              "
            >
              <h2
                class="
                  intro-x
                  font-bold
                  text-2xl
                  xl:text-3xl
                  text-center
                  xl:text-left
                "
              >
                Sign In
              </h2>
              <div
                class="
                  intro-x
                  mt-2
                  text-gray-500
                  dark:text-gray-500
                  xl:hidden
                  text-center
                "
              >
                A few more clicks to sign in to your account. Manage all your
                e-commerce accounts in one place
              </div>
              <div class="intro-x mt-8">
            <form method="POST" action="{{ route('login') }}">
                    @csrf
                <input
                  type="email"
                  class="
                    intro-x
                    login__input
                    form-control
                    py-3
                    px-4
                    border-gray-300
                    block
                    mt-4
                  "
                  id="email"
                  name="email"
                  :value="old('email')"
                  required
                  placeholder="Email"
                />
                <input
                  type="password"
                  class="
                    intro-x
                    login__input
                    form-control
                    py-3
                    px-4
                    border-gray-300
                    block
                    mt-4
                  "
                  id="password"
                  name="password"
                  required autocomplete="new-password"
                  placeholder="Password"
                />
                {{-- <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                    <div class="col-span-3 h-full rounded bg-theme-9"></div>
                    <div class="col-span-3 h-full rounded bg-theme-9"></div>
                    <div class="col-span-3 h-full rounded bg-theme-9"></div>
                    <div
                      class="col-span-3 h-full rounded bg-gray-200 dark:bg-dark-2"
                    ></div>
                  </div>
                <a
                  href=""
                  class="intro-x text-gray-600 block mt-2 text-xs sm:text-sm"
                  >What is a secure password?</a
                > --}}
                {{-- <input
                type="password"
                class="
                  intro-x
                  login__input
                  form-control
                  py-3
                  px-4
                  border-gray-300
                  block
                  mt-4
                "
                id="password_confirmation"
                type="password"
                name="password_confirmation" required
                placeholder="Confirm Password"
              />
              </div> --}}
              <div
                class="
                  intro-x
                  flex
                  items-center
                  text-gray-700
                  dark:text-gray-600
                  mt-4
                  text-xs
                  sm:text-sm
                "
              >
              @if (Route::has('password.request'))
                <a class="text-theme-1 dark:text-theme-10 ml-1" href="{{ route('password.request') }}"
                  >Forget Your Password?
                </a>
                @endif
              </div>
              <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                <button
                  class="
                    btn btn-primary
                    py-3
                    px-4
                    w-full
                    xl:w-32 xl:mr-3
                    align-top
                  "
                  type="submit"
                >
                  Login
                </button>
            </form>
                <button
                  class="
                    btn btn-outline-secondary
                    py-3
                    px-4
                    w-full
                    xl:w-32
                    mt-3
                    xl:mt-0
                    align-top
                  "
                  type="button"
                  href="{{ route('register') }}"
                >
                  Register
                </button>
              </div>
            </div>
          </div>
        {{-- </form> --}}
          <!-- END: Register Form -->
        </div>
      </div>
</x-guest-layout>
