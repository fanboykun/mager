<x-app-layout>
            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-lg font-medium mr-auto">Create Post</h2>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                  <button class="btn btn-primary shadow-md mr-2">
                    Categories
                  </button>
                  <button class="btn btn-primary shadow-md mr-2">
                    Tags
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
                          <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Categories
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
                          Tags
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <!-- BEGIN: Form Layout -->
        <form method="POST" action="{{ route('articles.store') }}">
            @csrf
          <div class="intro-y box p-5 mt-5">
            <div>
              <label for="crud-form-1" class="form-label">Title</label>
              <input
                id="title"
                name="title"
                type="text"
                class="form-control w-full"
                placeholder="Input the title"
              />
            </div>
            <div class="mt-3">
              <label for="category" class="form-label">Category</label>
              <select
                data-placeholder="Select the category"
                class="w-full"
                id="category"
                name="category_id"
                multiple
              >
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
              </select>
            </div>
            <div class="mt-3">
                <label for="tags" class="form-label">Tags</label>
                <select
                  class="w-full"
                  id="tags" name="tags[]" multiple="multiple"
                >
                @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
                </select>
              </div>
            <div class="mt-3">
              <label for="crud-form-3" class="form-label">Thumbnail</label>
              <div class="input-group">
                <input
                  id="thumbnail"
                  name="thumbnail"
                  type="file"
                  class="form-control"
                  placeholder="Quantity"
                />
              </div>
            </div>
            <div class="mt-3">
              <label>Content</label>
              <div class="mt-2">
                <div data-simple-toolbar="true" class="editor">
                    <textarea name="paragraph" id="paragraph"></textarea>
                  <p>Content of the editor.</p>
                </div>
              </div>
            </div>
            <div class="text-right mt-5">
              <button
                type="button"
                class="btn btn-outline-secondary w-24 mr-1"
              >
                Cancel
              </button>
              <button onclick="{{ route('articles.store') }}" type="submit" class="btn btn-primary w-24">Save</button>
            </div>
          </div>
        </form>
          <!-- END: Form Layout -->
        </div>
      </div>
      @section('scripts')
      @include('plugins.ckeditor')
      @include('plugins.filepond')
      @include('plugins.select2')
      @endsection
</x-app-layout>
