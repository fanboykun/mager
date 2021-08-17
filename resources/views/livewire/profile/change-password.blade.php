<div>
    <div class="intro-y box mt-5">
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
            Change Your Password
          </h2>
        </div>
        <div class="p-5">
          <div class="grid grid-cols-12 gap-x-5">
            <div class="col-span-12 xl:col-span-6">
              <div>
                <label for="update-profile-form-6" class="form-label"
                  >Old Password</label
                >
                <input
                  id="update-profile-form-6"
                  wire:model.defer="current_password" autocomplete="current-password"
                  type="text"
                  class="form-control"
                  placeholder="Input text"
                />
              </div>
            </div>
            <div class="col-span-12 xl:col-span-6">
              <div class="mt-3 xl:mt-0">
                <label for="update-profile-form-10" class="form-label"
                  >Type Your New Password</label
                >
                <input
                  {{-- id="update-profile-form-10" --}}
                  wire:model.defer="password" autocomplete="new-password"
                  type="password"
                  class="form-control"
                  placeholder="Input text"
                />
              </div>
              <div class="mt-5">
                <label for="update-profile-form-10" class="form-label"
                  >Confirm New Password</label
                >
                <input
                  {{-- id="update-profile-form-10" --}}
                  wire:model.defer="password_confirmation"
                  autocomplete="new-password"
                  type="password"
                  class="form-control"
                  placeholder="Input text"
                />
              </div>
            </div>
        </div>
          <div class="flex justify-end mt-4">
            <button type="button" class="btn btn-primary w-20 mr-auto">
              Save
            </button>
            <a href="" class="text-theme-6 flex items-center">
              <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
              Account
            </a>
          </div>
        </div>
      </div>
</div>
