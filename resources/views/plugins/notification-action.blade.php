 <!-- BEGIN: Notification Content -->
 <div id="notification-with-actions-content" class="toastify-content hidden flex">
     <i data-feather="hard-drive"></i>
     <div class="ml-4 mr-4">
          <div class="font-medium">
              Storage Removed!
            </div>
            <div class="text-gray-600 mt-1">
                The server will restart in 30 seconds, don't make<br> changes during the update process!
            </div>
            <div class="font-medium flex mt-1.5">
                <a class="text-theme-1 dark:text-gray-500" href="">
                    Restart Now
                </a>
                <a class="text-gray-600 ml-3" href="">
                    Cancel
                </a>
            </div>
        </div>
    </div>
    <!-- END: Notification Content -->
  <!-- BEGIN: Notification Toggle -->
    <button id="notification-with-actions-toggle" class="btn btn-primary">
      Show Notification
    </button>
  <!-- END: Notification Toggle -->

  @push('script')
  <script>
      // Notification with actions
      cash("#notification-with-actions-toggle").on("click", function () {
          Toastify({
               node:
               cash("#notification-with-actions-content")
                .clone()
                .removeClass("hidden")[0], duration: -1, newWindow: true, close: true, gravity: "top", position: "right", stopOnFocus: true,
               })
               .showToast();
            });
  </script>
  @endpush
