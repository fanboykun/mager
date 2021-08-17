<div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Organization Overview</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a class="btn btn-primary shadow-md mr-2" role="button" href="{{ route('articles.create') }}">Edit Organization Data</a>
        </div>
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
                src="{{ $setting->logo }}"
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
                <i data-feather="phone" class="w-4 h-4 mr-2"></i>
                {{ $setting->phone }}
              </div>
              <div
                class="truncate sm:whitespace-normal flex items-center mt-3"
              >
                <i data-feather="instagram" class="w-4 h-4 mr-2"></i> {{ $setting->instagram }}
              </div>
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
              Organization Details
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
                <i data-feather="paperclip" class="w-4 h-4 mr-2"></i>
                NPSN : {{ $setting->npsn }}
              </div>
              <div
                class="truncate sm:whitespace-normal flex items-center mt-3"
              >
                <i data-feather="award" class="w-4 h-4 mr-2"></i>
                Accreditacion : {{ $setting->accreditation }}
              </div>
              <div
                class="truncate sm:whitespace-normal flex items-center mt-3"
              >
                <i data-feather="twitter" class="w-4 h-4 mr-2"></i> {{ $setting->twitter }}
              </div>
            </div>
          </div>
      </div>





            <!-- END: Owner -->
          </div>
</div>
          <div class="w-full col-span-12 xl:col-span-12 mt-6">
            <div class="intro-y block sm:flex items-center h-10">
              <h2 class="text-lg font-medium truncate mr-5">
                Address
              </h2>
            </div>
            <div class="intro-y box p-5 mt-12 sm:mt-5">
              <div>
                <i data-feather="map-pin" class="w-4 h-4 mr-2"></i>
                {{ $setting->address }}
              </div>
              <div
                class="report-maps mt-5 bg-gray-200 rounded-md" id="map"
              ></div>
            </div>
          </div>
        </div>
      </div>



      @section('scripts')
      @include('plugins.mapbox')
    @endsection
</div>
