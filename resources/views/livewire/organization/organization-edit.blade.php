<div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-12 xxl:col-span-9">
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
                    <div class="col-span-6 xxl:col-span-6">
                      <div>
                        <label for="update-profile-form-1" class="form-label">
                            Organization Name
                        </label>
                        <input id="update-profile-form-1" wire:model="name" type="text" class="form-control"placeholder="Input text"/>
                      </div>
                    </div>
                        <div class="col-span-6 xxl:col-span-6">
                            <div>
                              <label for="update-profile-form-1" class="form-label">
                                Organization Tagline
                              </label>
                              <input id="update-profile-form-1" wire:model="tagline" type="text" class="form-control" placeholder="Input text"/>
                            </div>
                        </div>
                        <div class="col-span-6 xxl:col-span-6">
                          <div class="mt-3">
                            <label for="update-profile-form-7" class="form-label">Organization Email</label>
                            <input id="update-profile-form-7" wire:model="email" type="email" class="form-control" placeholder="Input text">
                          </div>
                        </div>
                        <div class="col-span-6 xxl:col-span-6">
                            <div class="mt-3">
                              <label for="update-profile-form-7" class="form-label">Organization Phone</label>
                              <input id="update-profile-form-7" wire:model="phone" type="text" class="form-control" placeholder="Input text"  >
                            </div>
                          </div>
                          <div class="col-span-6 xxl:col-span-6">
                            <div class="mt-3">
                              <label for="update-profile-form-7" class="form-label">Organization Accreditation</label>
                              <input id="update-profile-form-7" wire:model="accreditation" type="text" class="form-control" placeholder="Input text"  >
                            </div>
                          </div>
                          <div class="col-span-6 xxl:col-span-6">
                            <div class="mt-3">
                              <label for="update-profile-form-7" class="form-label">Organization NPSN</label>
                              <input id="update-profile-form-7" wire:model="npsn" type="text" class="form-control" placeholder="Input text"  >
                            </div>
                          </div>
                          <div class="col-span-6 xxl:col-span-6">
                            <div class="mt-3">
                              <label for="update-profile-form-7" class="form-label">Organization Instagram Username</label>
                              <input id="update-profile-form-7" wire:model="instagram" type="text" class="form-control" placeholder="Input text"  >
                            </div>
                          </div>
                          <div class="col-span-6 xxl:col-span-6">
                            <div class="mt-3">
                              <label for="update-profile-form-7" class="form-label">Organization Twitter Username</label>
                              <input id="update-profile-form-7" wire:model="twitter" type="text" class="form-control" placeholder="Input text"  >
                            </div>
                          </div>
                          <div class="col-span-12 xxl:col-span-6">
                            <div class="mt-3">
                              <label for="update-profile-form-7" class="form-label">Organization Address</label>
                              <textarea id="update-profile-form-5" wire:model="address" class="form-control" placeholder="Address">
                            </textarea>
                            </div>
                          </div>
                  </div>
                  <button type="button" wire:click.prevent="updateSetting()" wire:loading.attr wire:target="new_logo" class="btn btn-primary w-20 mt-3">
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
                    @if ($logo)
                      <img
                        class="rounded-md"
                        alt="ERROR"
                        src="{{ $logo->temporaryUrl() }}"
                      />
                      @else
                      <img
                      class="rounded-md"
                      alt="{{ $setting->name }}"
                      src="{{ $setting->logo_url }}"
                        />
                      @endif
                      <a wire:click="removePreviewLogo()" href="javascript:void(0)">
                      <div
                        title="{{ $logo ? 'Remove this preview logo?' : 'Remove current Logo?' }}"
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
                        wire:model="logo"
                        class="w-full h-full top-0 left-0 absolute opacity-0"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
