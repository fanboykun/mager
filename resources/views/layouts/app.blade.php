<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">



                <!--Filepond -->
                {{-- <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
                <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

                <!-- Select2 -->
                <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

                <!-- Map Box -->
                <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' /> --}}
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>



        <!-- Feather Icon -->
        {{-- <script src="https://unpkg.com/feather-icons"></script> --}}

        <!-- Map Box Script -->

    </head>
    <body class="main">
            <x-notification />
                <!--mobile menu should here-->

                <!--end mobile menu here-->
                <div class="flex">
                    <!--side menu here-->
                        @include('layouts.partial.sidebar')
                    <!--end side menu-->

                    <!-- content wrapper here -->
                        <div class="content">
                            <!-- top bar here -->
                            @include('layouts.partial.topbar')
                            <!-- end top bar here -->

                            <!-- main content here -->
                                {{ $slot }}
                            <!-- end main content here -->
                        </div>
                        <!-- end content wrapper here -->
                </div>
            @livewire('livewire-ui-modal')
            @livewireScripts
        @stack('scripts')
        @yield('scripts')
        {{-- <script>
            feather.replace()
          </script> --}}
    </body>
</html>
