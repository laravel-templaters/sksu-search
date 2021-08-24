<div class="p-0 m-0">

    {{-- steps --}}
    <div class="bg-white lg:border-b lg:border-gray-100">
        <nav class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" aria-label="Progress">
            <ol role="list"
                class="overflow-hidden rounded-md lg:flex lg:border-l lg:border-r lg:border-gray-200 lg:rounded-none">
                <li class="relative overflow-hidden lg:flex-1">
                    <div class="overflow-hidden border border-b-0 border-gray-200 rounded-t-md lg:border-0">
                        <!-- Completed Step -->
                        <a href="#" class="group">
                            <span
                                class="absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-200 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
                                aria-hidden="true"></span>
                            <span class="flex items-start px-6 py-5 text-sm font-medium">
                                <span class="flex-shrink-0">
                                    <span class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-54">
                                        <!-- Heroicon name: solid/check -->
                                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                                    <span class="text-xs font-bold tracking-wide uppercase text-blue-54">DV Main
                                        Information Form</span>
                                    <span class="text-sm font-medium text-gray-400">Vitae sed mi luctus laoreet.</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </li>

                <li class="relative overflow-hidden lg:flex-1">
                    <div class="overflow-hidden border border-gray-200 lg:border-0">
                        <!-- Current Step -->
                        <a href="#" aria-current="step">
                            <span
                                class="absolute top-0 left-0 w-1 h-full bg-blue-53 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
                                aria-hidden="true"></span>
                            <span class="flex items-start px-6 py-5 text-sm font-medium lg:pl-9">
                                <span class="flex-shrink-0">
                                    <span
                                        class="flex items-center justify-center w-10 h-10 border-2 rounded-full border-blue-53">
                                        <span class="text-blue-900">02</span>
                                    </span>
                                </span>
                                <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                                    <span
                                        class="text-xs font-bold tracking-wide uppercase text-blue-53">Attachments</span>
                                    <span class="text-sm font-medium text-gray-500">Cursus semper viverra.</span>
                                </span>
                            </span>
                        </a>

                        <!-- Separator -->
                        <div class="absolute inset-0 top-0 left-0 hidden w-3 lg:block" aria-hidden="true">
                            <svg class="w-full h-full text-gray-300" viewBox="0 0 12 82" fill="none"
                                preserveAspectRatio="none">
                                <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                    vector-effect="non-scaling-stroke" />
                            </svg>
                        </div>
                    </div>
                </li>

                <li class="relative overflow-hidden lg:flex-1">
                    <div class="overflow-hidden border border-t-0 border-gray-200 rounded-b-md lg:border-0">
                        <!-- Upcoming Step -->
                        <a href="#" class="group">
                            <span
                                class="absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-200 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
                                aria-hidden="true"></span>
                            <span class="flex items-start px-6 py-5 text-sm font-medium lg:pl-9">
                                <span class="flex-shrink-0">
                                    <span
                                        class="flex items-center justify-center w-10 h-10 border-2 border-gray-300 rounded-full">
                                        <span class="text-gray-500">03</span>
                                    </span>
                                </span>
                                <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                                    <span
                                        class="text-xs font-semibold tracking-wide text-gray-500 uppercase">Preview</span>
                                    <span class="text-sm font-medium text-gray-500">Penatibus eu quis ante.</span>
                                </span>
                            </span>
                        </a>

                        <!-- Separator -->
                        <div class="absolute inset-0 top-0 left-0 hidden w-3 lg:block" aria-hidden="true">
                            <svg class="w-full h-full text-gray-300" viewBox="0 0 12 82" fill="none"
                                preserveAspectRatio="none">
                                <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                    vector-effect="non-scaling-stroke" />
                            </svg>
                        </div>
                    </div>
                </li>
            </ol>
        </nav>
    </div>
    {{-- container sang tanan --}}
    <div class="" x-data="{isstep1open : @entangle('isstep1open'),isstep2open : @entangle('isstep2open'),isstep3open : @entangle('isstep3open')}">









        



        {{-- first step --}}

        <div class="">
            {{-- <div class="px-4 py-5 sm:px-6">
                <!-- Content goes here -->
                <!-- We use less vertical padding on card headers on desktop than on body sections -->
            </div> --}}
            <div x-cloak x-show="isstep1open" class="px-4 py-5 overflow-hidden sm:p-6" 
            x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="-translate-x-0"
            x-transition:leave="transform transition ease-in-out duration-300 sm:duration-300"
            x-transition:leave-start="-translate-x-0" x-transition:leave-end="-translate-x-full">
                <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:p-6">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Use a permanent address where you can receive mail.
                            </p>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="#" method="">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                            name</label>
                                        <input type="text" wire:model="name" name="first-name" id="first-name" autocomplete="given-name"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                            @error('name')
                                            <span class="text-sm text-red-500">{{$message}}</span>
                                            @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                            name</label>
                                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                            address</label>
                                        <input type="text" name="email-address" id="email-address" autocomplete="email"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium text-gray-700">Country /
                                            Region</label>
                                        <select id="country" name="country" autocomplete="country"
                                            class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="street-address"
                                            class="block text-sm font-medium text-gray-700">Street
                                            address</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                        <input type="text" name="city" id="city"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="state" class="block text-sm font-medium text-gray-700">State /
                                            Province</label>
                                        <input type="text" name="state" id="state"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP /
                                            Postal</label>
                                        <input type="text" name="postal-code" id="postal-code"
                                            autocomplete="postal-code"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <input type="submit" name="postal-code" id="postal-code"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:click.prevent="validateForm(2)">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="px-4 py-4 sm:px-6">
                <!-- Content goes here -->
                <!-- We use less vertical padding on card footers at all sizes than on headers or body sections -->
            </div> --}}
        </div>



        











        {{-- 2nd step Attachments --}}


        <div class="">
            {{-- <div class="px-4 py-5 sm:px-6">
                <!-- Content goes here -->
                <!-- We use less vertical padding on card headers on desktop than on body sections -->
            </div> --}}
            <div x-cloak x-show="isstep2open" class="px-4 py-5 overflow-hidden sm:p-6" 
            x-transition:enter="transform transition ease-in-out duration-700 sm:duration-700"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0">
                <div class="px-4 py-5 bg-white shadow sm:rounded-lg sm:p-6">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">This is page 2</h3>
                            <p class="mt-1 text-sm text-gray-500">
                                Use a permanent address where you can receive mail.
                            </p>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="#" method="">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                            name</label>
                                        <input type="text" wire:model="name" name="first-name" id="first-name" autocomplete="given-name"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                            @error('name')
                                            <span class="text-red-600">{{$message}}</span>
                                            @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                            name</label>
                                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                            address</label>
                                        <input type="text" name="email-address" id="email-address" autocomplete="email"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium text-gray-700">Country /
                                            Region</label>
                                        <select id="country" name="country" autocomplete="country"
                                            class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="street-address"
                                            class="block text-sm font-medium text-gray-700">Street
                                            address</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" >
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <input type="submit" name="postal-code" id="postal-code"
                                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:click.prevent="validateForm(1)">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="px-4 py-4 sm:px-6">
                <!-- Content goes here -->
                <!-- We use less vertical padding on card footers at all sizes than on headers or body sections -->
            </div> --}}
        </div>


















        

    </div>

</div>
