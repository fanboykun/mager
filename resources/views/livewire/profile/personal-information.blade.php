<div>
          <!-- BEGIN: Display Information -->
          <div class="intro-y box lg:mt-5">
            <div
              class="
                flex
                items-center
                p-5
                border-b border-gray-200
                dark:border-dark-5
              "
            >
              <h2 class="font-medium text-base mr-auto">
                Personal Information
              </h2>
            </div>
            <div class="p-5">
              <div class="flex flex-col-reverse xl:flex-row flex-col">
                <div class="flex-1 mt-6 xl:mt-0">
                  <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-12 xxl:col-span-6">
                      <div>
                        <label for="update-profile-form-1" class="form-label"
                          >Full Name</label
                        >
                        <input
                          id="update-profile-form-1"
                          wire:model="name"
                          type="text"
                          class="form-control"
                          placeholder="Input text"
                          {{-- value="{{ $user->name }}" --}}
                        />
                      </div>
                      <div class="mt-3">
                      </div>
                    </div>
                    <div class="col-span-12 xxl:col-span-6">
                      <div class="mt-3 xxl:mt-0">
                        <label for="update-profile-form-3" class="form-label"
                          >Email</label
                        >
                        <input
                        id="update-profile-form-4"
                        wire:model="email"
                        type="email"
                        class="form-control"
                        placeholder="Input text"
                        {{-- value="{{ $user->email }}" --}}
                      />
                      </div>
                      <div class="mt-3">
                        <label for="update-profile-form-4" class="form-label"
                          >Phone Number</label
                        >
                        <input
                          id="update-profile-form-4"
                          wire:model="phone"
                          type="text"
                          class="form-control"
                          placeholder="Input text"
                          {{-- value="{{ $user->identity->phone }}" --}}
                        />
                      </div>
                    </div>
                    <div class="col-span-12">
                      <div class="mt-3">
                        <label for="update-profile-form-5" class="form-label">
                            Address
                        </label>
                        <textarea id="update-profile-form-5" wire:model="address" class="form-control" placeholder="Adress">
                        {{-- {{ $user->identity->address }} --}}
                        </textarea>
                      </div>
                    </div>
                  </div>
                  <button type="button" wire:click.prevent="updatePersonalInformation()" wire:loading.attr="disabled" wire:target="photo" class="btn btn-primary w-20 mt-3">
                    Save
                  </button>
                </div>
                <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                  <div
                    class="
                      border-2 border-dashed
                      shadow-sm
                      border-gray-200
                      dark:border-dark-5
                      rounded-md
                      p-5
                    "
                  >
                    <div
                      class="
                        h-40
                        relative
                        image-fit
                        cursor-pointer
                        zoom-in
                        mx-auto
                      "
                    >
                    @if ($photo)
                      <img
                        class="rounded-md"
                        alt="Rubick Tailwind HTML Admin Template"
                        src="{{ $photo->temporaryUrl() }}"
                      />
                      @else
                      <img
                      class="rounded-md"
                      alt="{{ $name }}"
                      src="{{ $profile_photo_url }}"
                        />
                      @endif
                      <a wire:click="removePreviewPhoto()" href="javascript:void(0)">
                      <div
                        title="Remove this profile photo?"
                        class="
                          tooltip
                          w-5
                          h-5
                          flex
                          items-center
                          justify-center
                          absolute
                          rounded-full
                          text-white
                          bg-theme-6
                          right-0
                          top-0
                          -mr-2
                          -mt-2
                        "
                      >
                          <i data-feather="x" class="w-4 h-4"></i>
                        </div>
                    </a>
                    </div>
                    <div class="mx-auto cursor-pointer relative mt-5">
                      <button type="button" class="btn btn-primary w-full">
                        Change Photo
                      </button>
                      <input
                        type="file"
                        wire:model="photo"
                        class="w-full h-full top-0 left-0 absolute opacity-0"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
