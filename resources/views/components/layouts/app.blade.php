<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        

        <div class="bg-white">
            <header class="absolute inset-x-0 top-0 z-50">
              <nav class="flex items-center justify-center p-6 lg:px-8" aria-label="Global">
                <div class="lg:flex lg:gap-x-12">
                  <a 
                    href="/" 
                    class="text-sm font-semibold leading-6 px-3 py-2 rounded-md text-gray-900 @if(Request::segment(1) == '') bg-gray-800 text-white @endif"
                    >Todos
                  </a>
                  <a 
                    href="/counter" 
                    class="text-sm font-semibold leading-6 px-3 py-2 rounded-md text-gray-900 @if(Request::segment(1) == 'counter') bg-gray-800 text-white @endif"
                    >Counter
                  </a>
                  <a 
                    href="/show-posts" 
                    class="text-sm font-semibold leading-6 px-3 py-2 rounded-md text-gray-900 @if(Request::segment(1) == 'show-posts' || Request::segment(1) == 'create-post') bg-gray-800 text-white @endif"
                    >Show Posts
                  </a>
                </div>
              </nav>
            </header>

            {{ $slot }}
          </div>
          

    </body>
</html>
