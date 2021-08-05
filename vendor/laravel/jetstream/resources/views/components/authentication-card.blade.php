<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-blue-51">
    <div>
        {{ $logo }}
    </div>
    <div>
       @if (isset($appname))
       {{ $appname }}
       @endif
    </div>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-blue-54 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
