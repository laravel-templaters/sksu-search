<div class="px-3 py-2 space-y-8">
    {{--  --}}
    <div class="bg-gray-100 rounded-lg">
            <div class="px-4 py-12 mx-auto text-left max-w-7xl">
                <div class="space-y-6">
                        <div class="space-y-2 sm:mx-auto sm:max-w-xl lg:max-w-5xl">
                            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">The Employees</h2>
                            <p class="text-xl text-gray-500">
                            @if($selectedDept=="")
                            Sultan Kudarat State University
                            @else
                                {{$selectedDept}}
                            @endif
                            </p>
                            <label for="country" class="block pl-1 font-medium text-gray-700 text-md sm:mt-px sm:pt-2">
                            Choose Department
                            </label>
                            <select wire:model="selectedDept" placeholder="--Select Department--" id="department" name="department" autocomplete="department" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                                @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->department_name}}</option>
                                @endforeach
                            </select>
                        </div>
                <ul role="list" class="grid grid-cols-2 mx-auto text-center gap-x-4 gap-y-8 sm:grid-cols-4 md:gap-x-6 lg:max-w-5xl lg:gap-x-8 lg:gap-y-12 xl:grid-cols-6">       
                     {{-- loop this --}}
                     @foreach ($users as $user)
                     <li>
                        <div class="space-y-4">
                            <img class="w-20 h-20 mx-auto rounded-full lg:w-24 lg:h-24" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                            <div class="space-y-2">
                                <div class="text-xs font-medium lg:text-sm">
                                    <h3 class="text-blue-53">{{$user->first_name}}</h3>
                                    <p class="text-indigo-600">{{$user->departments->department_name}}</p>
                                    <p class="text-indigo-600">Department Head</p>
                                </div>
                            </div>
                        </div>
                    </li>
                     @endforeach

                    {{-- loop this --}}
                </ul>
            </div>
        </div>
    </div>
    {{-- form --}}
    <div class="bg-white rounded-lg">
        <div class="px-6 py-6 mx-auto" id="newuser">
            <div class="py-1">
            <h3 class="text-2xl font-extrabold uppercase "> Register New User<h3>
            </div>
            <form class="pl-2 space-y-8 divide-y divide-gray-200" >
                    <div class="space-y-8 divide-y divide-gray-200">
                        <div>

                            <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                                <div class="sm:col-span-4">
                                    <label for="username" class="block text-sm font-medium text-gray-700">
                                        Username
                                    </label>
                                    <div class="flex mt-1 rounded-md shadow-sm">
                                            <span class="inline-flex items-center px-3 text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50 sm:text-sm">
                                            sksu-search.com/@
                                            </span>
                                            <input type="text" name="username" id="username" autocomplete="username" class="flex-1 block w-full min-w-0 border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                </div>
                                <div class="sm:col-span-4">
                                    <label for="password" class="block text-sm font-medium text-gray-700">
                                        Password
                                    </label>
                                    <div class="flex mt-1 rounded-md shadow-sm">
                                        <input type="password" name="password" id="password" autocomplete="password" class="flex-1 block w-full min-w-0 border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                    <label for="password" class="block text-sm font-medium text-gray-700">
                                        Password
                                    </label>
                                    <div class="flex mt-1 rounded-md shadow-sm">
                                        <input type="password" name="password" id="password" autocomplete="password" class="flex-1 block w-full min-w-0 border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="pt-8">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Personal Information
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">
                            Use a permanent address where you can receive mail.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">
                                First name
                            </label>
                            <div class="mt-1">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            </div>

                            <div class="sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">
                                Last name
                            </label>
                            <div class="mt-1">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            </div>

                            <div class="sm:col-span-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                Email address
                            </label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            </div>

                            {{-- <div class="sm:col-span-3">
                            <label for="country" class="block text-sm font-medium text-gray-700">
                                Country / Region
                            </label>
                            <div class="mt-1">
                                <select id="country" name="country" autocomplete="country" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                                </select>
                            </div>
                            </div> --}}

                            <div class="sm:col-span-6">
                            <label for="street-address" class="block text-sm font-medium text-gray-700">
                                Street address
                            </label>
                            <div class="mt-1">
                                <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="city" class="block text-sm font-medium text-gray-700">
                                City
                            </label>
                            <div class="mt-1">
                                <input type="text" name="city" id="city" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="state" class="block text-sm font-medium text-gray-700">
                                State / Province
                            </label>
                            <div class="mt-1">
                                <input type="text" name="state" id="state" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            </div>

                            <div class="sm:col-span-2">
                            <label for="zip" class="block text-sm font-medium text-gray-700">
                                ZIP / Postal
                            </label>
                            <div class="mt-1">
                                <input type="text" name="zip" id="zip" autocomplete="postal-code" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="pt-8">
                        <div>
                            <h3 class="text-lg font-medium leading-6 text-gray-900">
                            Deparment Details
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">
                            Set Department, Department Position and Roles
                            </p>
                        </div>
                        <div class="mt-6">
                            <fieldset>
                            <legend class="text-base font-medium text-gray-900">
                                Deparment And Position
                            </legend>
                            <div class="mt-4 space-y-4">
                                <div class="relative flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="comments" name="comments" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="comments" class="font-medium text-gray-700">Comments</label>
                                    <p class="text-gray-500">Get notified when someones posts a comment on a posting.</p>
                                </div>
                                </div>
                            </div>
                            </fieldset>
                            <fieldset class="mt-6">
                            <div>
                                <legend class="text-base font-medium text-gray-900">
                                Push Notifications
                                </legend>
                                <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>
                            </div>
                            <div class="mt-4 space-y-4">
                                <div class="flex items-center">
                                <input id="push-everything" name="push-notifications" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                <label for="push-everything" class="block ml-3 text-sm font-medium text-gray-700">
                                    Everything
                                </label>
                                </div>
                                <div class="flex items-center">
                                <input id="push-email" name="push-notifications" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                <label for="push-email" class="block ml-3 text-sm font-medium text-gray-700">
                                    Same as email
                                </label>
                                </div>
                                <div class="flex items-center">
                                <input id="push-nothing" name="push-notifications" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                                <label for="push-nothing" class="block ml-3 text-sm font-medium text-gray-700">
                                    No push notifications
                                </label>
                                </div>
                            </div>
                            </fieldset>
                        </div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <div class="flex justify-end">
                        <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cancel
                        </button>
                        <button type="submit" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                        </div>
                    </div>
                </form>

        <div>           
    </div>
    {{-- form --}}
    {{-- fab --}}
    <div class="fixed bottom-0 right-0">

        <div class="sticky bottom-0 px-5 py-2">
            <a href="#newuser" 
                class="uppercase inline-flex items-center px-3.5 py-2 border border-transparent text-md leading-4 font-medium rounded-full shadow-md text-white bg-indigo-600 hover:bg-blue-53 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                New user
            </a>
        </div>
    </div>
</div>
