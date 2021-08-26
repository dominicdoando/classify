<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link
      rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.tiny.cloud/1/eaf8zzwygp331j3xiitaa4dc7tzxnjwti26vh1gqncoiwje8/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src='https://cdn.tiny.cloud/1/eaf8zzwygp331j3xiitaa4dc7tzxnjwti26vh1gqncoiwje8/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
        <script>
            tinymce.init({
              selector: '.textarea'
            });
          </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" id="app">
            @include('layouts.navbar')
            {{-- <example-component /> --}}
            <main>
             @yield('content')
            </main>
        </div>

        @stack('modals')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
         <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
        <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            },
        });
        </script>

        </body>
</html>
