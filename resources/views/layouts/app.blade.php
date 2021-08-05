<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans">

    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex h-screen overflow-hidden bg-blue-51 drop-shadow-md" x-data="{isopen: true}">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="fixed inset-0 z-40 flex md:hidden" role="dialog" aria-modal="true" x-show="isopen" x-transition.opacity x.transition.duration.800ms>
      <!--
        Off-canvas menu overlay, show/hide based on off-canvas menu state.
  
        Entering: "transition-opacity ease-linear duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "transition-opacity ease-linear duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>
  
      <!--
        Off-canvas menu, show/hide based on off-canvas menu state.
  
        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->
      <div class="relative flex flex-col flex-1 w-full max-w-xs bg-blue-52">
        <!--
          Close button, show/hide based on off-canvas menu state.
  
          Entering: "ease-in-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="absolute top-0 right-0 pt-2 -mr-12">
          <button class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" x-on:click="isopen = ! isopen" >
            <span class="sr-only">Close sidebar</span>
            <!-- Heroicon name: outline/x -->
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
  
        <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
          <div class="flex items-center flex-shrink-0 px-4">
            <x-jet-application-mark class="block h-20" />
          </div>
          <nav class="px-2 mt-5 space-y-1">
            <!-- Current: "bg-indigo-800 text-white", Default: "text-white hover:bg-blue-51 hover:bg-opacity-75" -->
            <a href="/dashboard" class="flex items-center px-2 py-2 font-bold text-white rounded-md bg-blue-53 group text-md">
              <!-- Heroicon name: outline/home -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-blue-51" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Dashboard
            </a>

            <a href="/documents-tray" class="flex items-center px-2 py-2 font-bold rounded-md text-blue-53 hover:bg-blue-51 hover:bg-opacity-75 group text-md">
              <!-- Heroicon name: outline/inbox -->
              <svg class="flex-shrink-0 w-6 h-6 mr-3 text-blue-53" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
              </svg>
              Documents Tray
            </a>

            <a href="/transactions" class="flex items-center px-2 py-2 font-bold rounded-md text-blue-53 hover:bg-blue-51 hover:bg-opacity-75 group text-md">
              <!-- Heroicon name: outline/inbox -->
              <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 text-blue-53" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
              Transactions
            </a>

            <a href="/reports" class="flex items-center px-2 py-2 font-bold rounded-md text-blue-53 hover:bg-blue-51 hover:bg-opacity-75 group text-md">
              <!-- Heroicon name: outline/inbox -->
              <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 text-blue-53" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
              Reports
            </a>
          </nav>
        </div>
        <div class="flex flex-shrink-0 p-4 border-t bg-blue-51 border-blue-53">
          <a href="#" class="flex-shrink-0 block group">
            <div class="flex items-center">
              <div>
                @if(Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <img src="{{Auth::user()->profile_photo_url }}" class="w-12 h-12 rounded-full" alt="">
                @endif
              </div>
              <div class="ml-3">
                <p class="font-medium text-md text-blue-53 drop-shadow-lg">
                  {{auth()->user()->name}}
                </p>
                <p class="text-sm font-medium text-indigo-200 group-hover:text-white">
                  Logout
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
  
      <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Force sidebar to shrink to fit close icon -->
      </div>
    </div>
  
    <!-- Static sidebar for desktop -->
    <div class="hidden bg-indigo-700 md:flex md:flex-shrink-0">
      <div class="flex flex-col w-64 bg-blue-900">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col flex-1 h-0 ">
          <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto bg-blue-54">
            <div class="flex items-center flex-shrink-0 px-4">
              <x-jet-application-mark class="block h-20" />
              </div>
            <nav class="flex-1 px-2 mt-5 space-y-1">

              <!-- Current: "bg-blue-53 text-white" svg : "text-blue-51", Default: "text-white hover:bg-blue-51 hover:bg-opacity-75 " svg: "" -->
              <a href="/dashboard" class="{{ is_active(url('/dashboard')) ? 'flex items-center px-2 py-2 font-bold text-white rounded-md bg-blue-53 group text-md' : 'flex items-center px-2 py-2 font-bold rounded-md text-blue-53 hover:bg-blue-51 hover:bg-opacity-75 group text-md'}}">
                <!-- Heroicon name: outline/home -->
                <svg class="{{ is_active(url('/dashboard')) ? 'flex-shrink-0 w-6 h-6 mr-3 text-blue-51' : 'flex-shrink-0 w-6 h-6 mr-3 text-blue-53'}}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Dashboard
              </a>

              <a href="/documents-tray" class="{{ is_active(url('/documents-tray')) ? 'flex items-center px-2 py-2 font-bold text-white rounded-md bg-blue-53 group text-md' : 'flex items-center px-2 py-2 font-bold rounded-md text-blue-53 hover:bg-blue-51 hover:bg-opacity-75 group text-md'}}">
                <!-- Heroicon name: outline/inbox -->
                <svg class="{{ is_active(url('/documents-tray')) ? 'flex-shrink-0 w-6 h-6 mr-3 text-blue-51' : 'flex-shrink-0 w-6 h-6 mr-3 text-blue-53'}}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
                Documents Tray
              </a>

              <a href="/transactions" class="{{ is_active(url('/transactions')) ? 'flex items-center px-2 py-2 font-bold text-white rounded-md bg-blue-53 group text-md' : 'flex items-center px-2 py-2 font-bold rounded-md text-blue-53 hover:bg-blue-51 hover:bg-opacity-75 group text-md'}}">
                <!-- Heroicon name: outline/inbox -->
                <svg xmlns="http://www.w3.org/2000/svg" class="{{ is_active(url('/transactions')) ? 'flex-shrink-0 w-6 h-6 mr-3 text-blue-51' : 'flex-shrink-0 w-6 h-6 mr-3 text-blue-53'}}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                Transactions
              </a>

              <a href="/reports" class="{{ is_active(url('/reports')) ? 'flex items-center px-2 py-2 font-bold text-white rounded-md bg-blue-53 group text-md' : 'flex items-center px-2 py-2 font-bold rounded-md text-blue-53 hover:bg-blue-51 hover:bg-opacity-75 group text-md'}}">
                <!-- Heroicon name: outline/inbox -->
                <svg xmlns="http://www.w3.org/2000/svg" class="{{ is_active(url('/reports')) ? 'flex-shrink-0 w-6 h-6 mr-3 text-blue-51' : 'flex-shrink-0 w-6 h-6 mr-3 text-blue-53'}}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                  </svg>
                Reports
              </a>
              
             <!-- <a href="{{ route('profile.show') }}" class="flex items-center px-2 py-2 font-bold rounded-md text-blue-53 hover:bg-blue-51 hover:bg-opacity-75 group text-md"> -->
                <!-- Heroicon name: outline/inbox -->
               <!-- <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 mr-3 text-blue-53" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                  </svg>
                Profile
              </a> -->

            </nav>
          </div>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
          <div class="flex flex-shrink-0 p-4 border-t bg-blue-52 border-blue-54">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                   this.closest('form').submit();" class="flex-shrink-0 block w-full group">
              <div class="flex items-center">
                <div>
                  @if(Laravel\Jetstream\Jetstream::managesProfilePhotos())
                  <img src="{{Auth::user()->profile_photo_url }}" class="w-12 h-12 rounded-full" alt="">
                  @endif
                </div>
                <div class="ml-3">
                  <p class="font-medium text-md text-blue-53 drop-shadow-lg">
                    {{auth()->user()->name}}
                  </p>
                  <p class="text-sm font-medium text-indigo-200 group-hover:text-white">
                    Logout
                  </p>
                </div>
              </div>
            </a>
          </div>
        </form>
        </div>
      </div>
    </div>
    <div class="flex flex-col flex-1 w-0 overflow-hidden">
      <div class="pt-1 pl-1 md:hidden sm:pl-3 sm:pt-3">
        <button class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" x-on:click="isopen = !isopen">
          <span class="sr-only">Open sidebar</span>
          <!-- Heroicon name: outline/menu -->
          <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>





      {{-- main --}}
      <main class="relative z-0 flex-1 overflow-y-auto font-sans focus:outline-none">
        <div class="py-0">
          @if (isset($header))
          <div class="px-4 mx-auto max-w-7xl sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">{{$header}}</h1>
          </div>
          @endif
          <div class="px-2 mx-auto max-w-7xl ">
            <!-- Replace with your content -->
           
              {{-- <div class="border-4 border-gray-200 border-dashed rounded-lg h-96">

              </div> --}}
              {{$slot}}
            
            <!-- /End replace -->
          </div>
        </div>
      </main>
       {{-- main --}}




       
    </div>
  </div>
  
    @stack('modals')

    @livewireScripts

</body>

</html>
