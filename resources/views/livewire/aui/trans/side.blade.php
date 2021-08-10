<div class="sticky h-screen overflow-hidden bg-opacity-75 top-6 sm:h-100 md:h-100 bg-blue-52 min-h-100"
    x-data="{caopen: false}">
    <div class="block w-screen bg-blue-53"><br></div>
    <nav class="p-2 space-y-1" aria-label="Sidebar">
        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
        <ul class="font-sans">
            <li>
                {{-- library list start --}}
            <li
                class="flex items-center px-3 py-3 text-sm font-bold text-white rounded-md hover:text-white hover:bg-blue-53 bg-blue-53">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="px-2 uppercase truncate">
                    On going
                </span>

            </li>
            <ul class="py-1 pl-4">
                <button
                    class="flex px-3 py-3 text-sm font-bold text-gray-900 rounded-md hover:text-white hover:bg-blue-53 ">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="truncate">
                        Purchase Orders
                    </span>
                </button>
                <button
                    class="flex px-3 py-3 text-sm font-bold text-gray-900 rounded-md hover:text-white hover:bg-blue-53 ">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="truncate">
                        Cash Advance
                    </span>
                </button>
                <button
                    class="flex px-3 py-3 text-sm font-bold text-gray-900 rounded-md hover:text-white hover:bg-blue-53 ">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="truncate">
                        Advance for Payroll
                    </span>
                </button>

                <button x-on:click="caopen = ! caopen"
                    class="flex px-3 py-3 text-sm font-bold text-gray-900 rounded-md hover:text-white hover:bg-blue-53 bg-blue-51">

                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="truncate">
                        Applications
                    </span>
                </button>
                {{-- Applications start --}}
                <ul class="py-1 pl-4" x-show="caopen" x-cloak>
                    <li class="flex">
                        <a href="#"
                            class="flex items-center px-3 py-2 text-sm font-bold text-gray-900 rounded-md hover:text-white hover:bg-blue-53 "
                            aria-current="page">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="px-2 wrap md:truncate sm:truncate">
                                Cash Advance
                            </span>
                        </a>
                    </li>

                    <li class="flex">
                        <a href="#"
                            class="flex items-center px-3 py-2 text-sm font-bold text-gray-900 rounded-md hover:text-white hover:bg-blue-53"
                            aria-current="page">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="px-2 wrap md:truncate sm:truncate">
                                Puchase Order
                            </span>
                        </a>
                    </li>

                    <li class="flex">
                        <a href="#"
                            class="flex items-center px-3 py-2 text-sm font-bold text-gray-900 rounded-md hover:text-white hover:bg-blue-53"
                            aria-current="page">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="px-2 wrap md:truncate sm:truncate">
                                Advance for Payroll
                            </span>
                        </a>
                    </li>

                    <li class="">
                        <a href="#"
                            class="flex px-3 py-2 text-sm font-bold text-gray-900 rounded-md hover:text-white hover:bg-blue-53"
                            aria-current="page">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="px-2 wrap md:wrap sm:wrap">
                                Advances for Officers and Employees
                            </span>
                        </a>
                    </li>

                    <li class="flex">
                        <a href="#"
                            class="flex items-center px-3 py-2 text-sm font-bold text-gray-900 rounded-md hover:text-white hover:bg-blue-53"
                            aria-current="page">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="px-2 wrap md:truncate sm:truncate">
                                Utilities
                            </span>
                        </a>
                    </li>


                </ul>
                {{-- Applications end --}}

            </ul>
            </li>
            {{-- library list end --}}
        </ul>
    </nav>


</div>
