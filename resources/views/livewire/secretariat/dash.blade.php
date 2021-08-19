<div x-data="{ispanelopen : @entangle('ispanelopen')}">
    <div class="px-2 py-2">
        <dl class="grid grid-cols-1 gap-5 mt-5 sm:grid-cols-2 lg:grid-cols-3">
            {{-- card --}}
            <div class="relative px-4 pt-5 overflow-hidden rounded-lg shadow sm:pt-6 sm:px-6 bg-blue-53">
                <dt>
                    <div class="absolute p-3 mx-auto bg-transparent rounded-md">
                        <!-- Heroicon name: outline/users -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex w-10 h-10 text-blue-52 item-center"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                    </div>
                    <p class="ml-16 text-lg font-medium text-white truncate">No. of Archived Documents</p>
                </dt>
                <dd class="flex items-baseline pb-6 ml-16 sm:pb-7">
                    <p class="text-2xl font-semibold text-blue-52">
                        80
                    </p>
                </dd>
            </div>

            {{-- card --}}
            <div class="relative px-4 pt-5 overflow-hidden rounded-lg shadow sm:pt-6 sm:px-6 bg-blue-53">
                <dt>
                    <div class="absolute p-3 mx-auto bg-transparent rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex w-10 h-10 text-blue-52 item-center"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                        </svg>
                    </div>
                    <p class="ml-16 text-lg font-medium text-white truncate">Pending Requests</p>
                </dt>
                <dd class="flex items-baseline pb-6 ml-16 sm:pb-7">
                    <p class="text-2xl font-semibold text-blue-52">
                        2
                    </p>
                </dd>
            </div>

            {{-- card --}}
            <div class="relative px-4 pt-5 overflow-hidden rounded-lg shadow sm:pt-6 sm:px-6 bg-blue-53">
                <dt>
                    <div class="absolute p-3 mx-auto bg-transparent rounded-md">
                        <!-- Heroicon name: outline/users -->

                        <svg xmlns="http://www.w3.org/2000/svg" class="flex w-8 h-8 text-blue-52 item-center"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.707 3.293a1 1 0 010 1.414L5.414 7H11a7 7 0 017 7v2a1 1 0 11-2 0v-2a5 5 0 00-5-5H5.414l2.293 2.293a1 1 0 11-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p class="ml-16 text-lg font-medium text-white truncate">Returned Requests</p>
                </dt>
                <dd class="flex items-baseline pb-6 ml-16 sm:pb-7">
                    <p class="text-2xl font-semibold text-blue-52">
                        3
                    </p>
                </dd>
            </div>


        </dl>
    </div>
    <div class="px-2 py-2">
        <dl class="grid grid-flow-col grid-cols-3 gap-5">







            {{-- table --}}
            <div class="flex-shrink-0 col-span-2">
                <dt class="sticky top-0 flex items-center justify-between bg-blue-51">

                    <h3 class="flex px-2 py-3 text-lg font-bold text-blue-53"> Current Requests </h3>

                    <input wire:model.debounce.600ms='searchterm' type="text" name="name" id="name"
                        class="flex w-1/3 py-2 text-gray-900 placeholder-gray-500 border-0 rounded-lg focus:ring-0 sm:text-sm"
                        placeholder="Search Here">

                </dt>
                <dd>
                    <div class="overflow-hidden bg-white shadow sm:rounded-md">
                        <ul role="list" class="divide-y divide-gray-200">
                            @for ($i = 0; $i < 2; $i++) <li>
                                <a href="#" class="block hover:bg-gray-50"
                                    wire:click.prevent="openPanel('{{$randomNum=rand(1,876543)}}')">
                                    <div class="flex items-center px-4 py-4 sm:px-6">
                                        <div class="flex items-center flex-1 min-w-0">
                                            <div class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                <div>
                                                    <p class="text-sm font-medium text-indigo-600 truncate">Applicant
                                                        Name</p>
                                                    <p class="pl-3 text-sm font-medium text-indigo-600 truncate">DV#
                                                        {{$randomNum}}</p>
                                                    <p class="flex items-center mt-2 text-sm text-gray-500">
                                                        <!-- Heroicon name: solid/mail -->

                                                        <span class="truncate">Entity Title Here</span>

                                                    </p>
                                                </div>
                                                <div class="hidden md:block">
                                                    <div>
                                                        <p class="text-sm text-gray-900">
                                                            Applied on
                                                            <time datetime="2020-01-07">January 7, 2020</time>
                                                        </p>
                                                        <p class="flex items-center mt-2 text-sm text-gray-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                                            </svg>
                                                            Waiting for Department Head Approval
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- Heroicon name: solid/chevron-right -->
                                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                </li>
                                @endfor
                        </ul>
                    </div>
                </dd>

            </div>







            {{-- feed --}}

            <div class="sticky top-0 col-span-1 h-96">
                <dt>
                    <h3 class="px-2 py-3 text-lg font-bold text-blue-53"> Feed </h3>
                </dt>
                <dd class="h-full">
                    <ul role="list"
                        class="h-full mt-1 overflow-y-auto bg-white divide-y divide-gray-200 rounded-lg shadow">
                        <li class="px-4 py-4 bg-green-100 animate-pulse">
                            <div class="flex space-x-3">
                                <div class="flex-1 space-y-1">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-sm font-medium">Entity Title Here</h3>
                                        <p class="text-sm text-gray-800">DV#{{$num = rand(1,500123)}}</p>
                                    </div>

                                    @if ($num%2==0)

                                    <p class="flex items-center text-sm text-gray-600 ">
                                        <span
                                            class="flex items-center mr-1.5 justify-center flex-shrink-0 mx-auto bg-transparent rounded-full w-8 h-8">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="flex-shrink-0 mr-1.5 h-7 w-7 text-sm text-red-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </span>
                                        Disbursement Voucher {{$num}} returned. Click to view Details</p>

                                    @else

                                    <p class="flex items-center text-sm text-gray-500 ">
                                        <span
                                            class="flex items-center mr-1.5 justify-center flex-shrink-0 mx-auto bg-green-100 rounded-full w-8 h-8">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="flex-shrink-0 w-5 h-5 text-sm text-green-700" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                            </svg>
                                        </span>
                                        Disbursement Voucher {{$num}} Approved by Department Head. Click to view Details
                                    </p>

                                    @endif

                                </div>
                            </div>
                        </li>
                        @for ($i = 0; $i < 1; $i++) <li class="px-4 py-4">
                            <div class="flex space-x-3">
                                <div class="flex-1 space-y-1">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-sm font-medium">Entity Title Here</h3>
                                        <p class="text-sm text-gray-500">DV#{{$num = rand(1,500123)}}</p>
                                    </div>

                                    @if ($num%2==0)

                                    <p class="flex items-center text-sm text-gray-500 ">
                                        <span
                                            class="flex items-center mr-1.5 justify-center flex-shrink-0 mx-auto bg-transparent rounded-full w-8 h-8">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="flex-shrink-0 mr-1.5 h-7 w-7 text-sm text-red-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </span>
                                        Disbursement Voucher {{$num}} returned. Click to view Details</p>

                                    @else

                                    <p class="flex items-center text-sm text-gray-500 ">
                                        <span
                                            class="flex items-center mr-1.5 justify-center flex-shrink-0 mx-auto bg-green-100 rounded-full w-8 h-8">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="flex-shrink-0 w-5 h-5 text-sm text-green-700" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                            </svg>
                                        </span>

                                        Disbursement Voucher {{$num}} Approved by Department Head. Click to view Details
                                    </p>

                                    @endif

                                </div>
                            </div>
                            </li>
                            @endfor


                            <!-- More items... -->
                            {{-- end of notifs --}}

                            <div class="flex items-center justify-center py-4">
                                <h3 class="text-sm font-extrabold text-gray-200">ˁ˚ᴥ˚ˀ End of Feed ˁ˚ᴥ˚ˀ</h3>
                            </div>
                    </ul>
                </dd>
            </div>
        </dl>

    </div>







    {{-- fab --}}
    <div class="fixed bottom-0 right-0">

        <div class="sticky bottom-0 px-5 py-2">
            <a href="/sec/newvoucher"
                class="inline-flex items-center px-3.5 py-2 border border-transparent text-md leading-4 font-medium rounded-full shadow-md text-white bg-indigo-600 hover:bg-blue-53 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                New DV
            </a>
        </div>
    </div>









    {{-- panel slide over --}}

    <div x-cloak class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" role="dialog"
        aria-modal="true" x-show="ispanelopen">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute inset-0" aria-hidden="true">
                <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <div class="w-screen max-w-md" x-show="ispanelopen"
                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                        <div class="flex flex-col h-full overflow-y-auto shadow-xl bg-blue-55">
                            <div class="px-4 py-6 bg-blue-53 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-lg font-medium text-white" id="slide-over-title">
                                        Entity Title here
                                    </h2>
                                    <div class="flex items-center ml-3 h-7">
                                        <button type="button"
                                            class="rounded-md text-blue-52 bg-blue-53 hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                            x-on:click="ispanelopen = false">
                                            <span class="sr-only">DV#{{$dvid}}</span>
                                            <!-- Heroicon name: outline/x -->
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <p class="text-sm text-blue-52">Juan Dela Cruz | DV#{{$dvid}}
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex-1 px-4 py-6 sm:px-6">
                                <!-- Replace with your content -->
                                <div class="absolute inset-0 px-4 py-6 sm:px-6">


                                    {{-- crumbs --}}
                                    <div class="flow-root">
                                        <ul role="list" class="-mb-8">
                                            <li>
                                                <div class="relative pb-8">
                                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                                        aria-hidden="true"></span>
                                                    <div class="relative flex space-x-3">
                                                        <div>
                                                            <span
                                                                class="flex items-center justify-center w-8 h-8 bg-gray-400 rounded-full ring-8 ring-white">
                                                                <!-- Heroicon name: solid/user -->
                                                                <svg class="w-5 h-5 text-white"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div
                                                            class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div>
                                                                <p class="text-sm text-gray-500">Applied to <a href="#"
                                                                        class="font-medium text-gray-900">Front End
                                                                        Developer</a></p>
                                                            </div>
                                                            <div
                                                                class="text-sm text-right text-gray-500 whitespace-nowrap">
                                                                <time datetime="2020-09-20">Sep 20</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="relative pb-8">
                                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                                        aria-hidden="true"></span>
                                                    <div class="relative flex space-x-3">
                                                        <div>
                                                            <span
                                                                class="flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full ring-8 ring-white">
                                                                <!-- Heroicon name: solid/thumb-up -->
                                                                <svg class="w-5 h-5 text-white"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div
                                                            class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div>
                                                                <p class="text-sm text-gray-500">Advanced to phone
                                                                    screening by <a href="#"
                                                                        class="font-medium text-gray-900">Bethany
                                                                        Blake</a></p>
                                                            </div>
                                                            <div
                                                                class="text-sm text-right text-gray-500 whitespace-nowrap">
                                                                <time datetime="2020-09-22">Sep 22</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="relative pb-8">
                                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                                        aria-hidden="true"></span>
                                                    <div class="relative flex space-x-3">
                                                        <div>
                                                            <span
                                                                class="flex items-center justify-center w-8 h-8 bg-green-500 rounded-full ring-8 ring-white">
                                                                <!-- Heroicon name: solid/check -->
                                                                <svg class="w-5 h-5 text-white"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div
                                                            class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div>
                                                                <p class="text-sm text-gray-500">Completed phone
                                                                    screening with <a href="#"
                                                                        class="font-medium text-gray-900">Martha
                                                                        Gardner</a></p>
                                                            </div>
                                                            <div
                                                                class="text-sm text-right text-gray-500 whitespace-nowrap">
                                                                <time datetime="2020-09-28">Sep 28</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="relative pb-8">
                                                    <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                                        aria-hidden="true"></span>
                                                    <div class="relative flex space-x-3">
                                                        <div>
                                                            <span
                                                                class="flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full ring-8 ring-white">
                                                                <!-- Heroicon name: solid/thumb-up -->
                                                                <svg class="w-5 h-5 text-white"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div
                                                            class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div>
                                                                <p class="text-sm text-gray-500">Advanced to interview
                                                                    by <a href="#"
                                                                        class="font-medium text-gray-900">Bethany
                                                                        Blake</a></p>
                                                            </div>
                                                            <div
                                                                class="text-sm text-right text-gray-500 whitespace-nowrap">
                                                                <time datetime="2020-09-30">Sep 30</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="relative pb-8">
                                                    <div class="relative flex space-x-3">
                                                        <div>
                                                            <span
                                                                class="flex items-center justify-center w-8 h-8 bg-green-500 rounded-full ring-8 ring-white">
                                                                <!-- Heroicon name: solid/check -->
                                                                <svg class="w-5 h-5 text-white"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div
                                                            class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div>
                                                                <p class="text-sm text-gray-500">Completed interview
                                                                    with <a href="#"
                                                                        class="font-medium text-gray-900">Katherine
                                                                        Snyder</a></p>
                                                            </div>
                                                            <div
                                                                class="text-sm text-right text-gray-500 whitespace-nowrap">
                                                                <time datetime="2020-10-04">Oct 4</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>




                                </div>
                                <!-- /End replace -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
