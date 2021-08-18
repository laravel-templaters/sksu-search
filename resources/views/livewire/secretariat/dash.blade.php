<div>
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
                <dt class="sticky top-0 bg-blue-51">

                    <h3 class="px-2 py-3 text-lg font-bold text-blue-53"> Current Pending Requests </h3>
                </dt>
                <dd>
                    <div class="overflow-hidden bg-white shadow sm:rounded-md">
                        <ul role="list" class="divide-y divide-gray-200">
                           @for ($i = 0; $i < 20; $i++)
                           <li>
                            <a href="#" class="block hover:bg-gray-50">
                                <div class="flex items-center px-4 py-4 sm:px-6">
                                    <div class="flex items-center flex-1 min-w-0">
                                        <div class="flex-1 min-w-0 px-4 md:grid md:grid-cols-2 md:gap-4">
                                            <div>
                                                <p class="text-sm font-medium text-indigo-600 truncate">DV #32158138</p>
                                                <p class="flex items-center mt-2 text-sm text-gray-500">
                                                    <!-- Heroicon name: solid/mail -->
                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                        <path
                                                            d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                    </svg>
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400"fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
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
                <dt >
                    <h3 class="px-2 py-3 text-lg font-bold text-blue-53"> Feed </h3>
                </dt>
                <dd class="h-full">
                    <ul role="list" class="h-full p-5 mt-1 overflow-y-auto bg-white divide-y divide-gray-200 rounded-lg shadow">
                        @for ($i = 0; $i < 300; $i++)
                        <li class="py-4">
                            <div class="flex space-x-3">
                                <div class="flex-1 space-y-1">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-sm font-medium">Entity Title Here</h3>
                                        <p class="text-sm text-gray-500">DV#{{$num = rand(1,500123)}}</p>
                                    </div>
                                    
                                    @if ($num%2==0)
                                    
                                    <p class="flex items-center text-sm text-gray-500 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-sm text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                      </svg>
                                   Disbursement Voucher {{$num}} returned. Click to view Details</p>

                                    @else
                                    
                                    <p class="flex items-center text-sm text-gray-500 ">
                                        
                                          <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5 text-sm text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                          </svg>
                                       Disbursement Voucher {{$num}} Approved. Click to view Details</p>

                                    @endif
                                    
                                </div>
                            </div>
                        </li>
                        @endfor


                        <!-- More items... -->
                    </ul>
                </dd>
            </div>
        </dl>

    </div>

    {{-- fab --}}
    <div class="fixed bottom-0 right-0">
        
    <div class="sticky bottom-0 px-5 py-2">
        <button type="button"
            class="inline-flex items-center px-3.5 py-2 border border-transparent text-md leading-4 font-medium rounded-full shadow-md text-white bg-indigo-600 hover:bg-blue-53 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            New DV
        </button>
    </div>
    </div>
</div>
