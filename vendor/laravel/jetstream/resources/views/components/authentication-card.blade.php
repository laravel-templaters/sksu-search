<div class="flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0 bg-blue-51">
    <div>
        {{ $logo }}
    </div>
    <div>
       @if (isset($appname))
       {{ $appname }}
       @endif
    </div>
    <div class="w-full px-6 py-4 mt-6 overflow-hidden shadow-md sm:max-w-md bg-blue-54 sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
