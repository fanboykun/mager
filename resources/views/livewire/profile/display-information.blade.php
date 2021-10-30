<div>
    <div class="intro-y box mt-5">
        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
          <h2 class="font-medium text-base mr-auto">
            Display Information
          </h2>
        </div>
        <div class="p-5">
          <div class="grid grid-cols-12 gap-x-5">
            <div class="col-span-12 xl:col-span-6">
              <div>
                <label for="update-profile-form-6" class="form-label">Chat Status</label>
                <input
                  id="update-profile-form-6"
                  wire:model="status"
                  type="text"
                  class="form-control"
                  placeholder="Input text"
                />
              </div>
            </div>
            <div class="col-span-12 xl:col-span-6">
              <div class="mt-3 xl:mt-0">
                <label for="update-profile-form-10" class="form-label"
                  >Username Instagram</label
                >
                <input
                  id="update-profile-form-10"
                  wire:model="instagram"
                  type="text"
                  class="form-control"
                  placeholder="Input text"
                />
              </div>
            </div>
            <div class="col-span-12">
                <div class="py-5 mt-3">
                  <label for="update-profile-form-5" class="form-label"
                    >Your Motto</label
                  >
                  <textarea
                    id="update-profile-form-5"
                    wire:model="description"
                    class="form-control"
                    placeholder="Greatest Person In The World Is Someone Who Always Have The Critical Thinking"
                  >
                  </textarea
                  >
                </div>
              </div>
            </div>
            <div class="flex justify-end mt-4">
              <button type="submit" wire:click.prevent="updateIdentity" class="btn btn-primary w-20 mr-auto">
                Save
              </button>
            </div>
        </div>
    </div>
</div>
