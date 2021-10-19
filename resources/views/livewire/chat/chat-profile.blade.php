<div>
    <div id="profile" class="tab-pane" role="tabpanel" aria-labelledby="profile-tab">
        <div class="pr-1">
          <div class="box px-5 py-10 mt-5">
            <div
              class="
                w-20
                h-20
                flex-none
                image-fit
                rounded-full
                overflow-hidden
                mx-auto
              "
            >
              <img
                alt="{{ $user->name }}"
                src="{{ $user->profile_photo_url }}"
              />
            </div>
            <div class="text-center mt-3">
              <div class="font-medium text-lg">{{ $user->name }}</div>
              <div class="text-gray-600 mt-1">
                {{ $user->identity->status }}
              </div>
            </div>
          </div>
          <div class="box p-5 mt-5">
            <div
              class="
                flex
                items-center
                border-b border-gray-200
                dark:border-dark-5
                pb-5
              "
            >
              <div>
                <div class="text-gray-600">Instagram</div>
                <div class="mt-1">{{ $user->identity->instagram }}</div>
              </div>
              <i
                data-feather="globe"
                class="w-4 h-4 text-gray-600 ml-auto"
              ></i>
            </div>
            <div
              class="
                flex
                items-center
                border-b border-gray-200
                dark:border-dark-5
                py-5
              "
            >
              <div>
                <div class="text-gray-600">Phone</div>
                <div class="mt-1">+32 19 23 62 24 34</div>
              </div>
              <i
                data-feather="mic"
                class="w-4 h-4 text-gray-600 ml-auto"
              ></i>
            </div>
            <div
              class="
                flex
                items-center
                border-b border-gray-200
                dark:border-dark-5
                py-5
              "
            >
              <div>
                <div class="text-gray-600">Email</div>
                <div class="mt-1">{{ $user->email }}</div>
              </div>
              <i
                data-feather="mail"
                class="w-4 h-4 text-gray-600 ml-auto"
              ></i>
            </div>
            <div class="flex items-center pt-5">
              <div>
                <div class="text-gray-600">Joined Date</div>
                <div class="mt-1">{{ $user->created_at->diffForHumans() }}</div>
              </div>
              <i
                data-feather="clock"
                class="w-4 h-4 text-gray-600 ml-auto"
              ></i>
            </div>
          </div>
        </div>
      </div>
</div>
