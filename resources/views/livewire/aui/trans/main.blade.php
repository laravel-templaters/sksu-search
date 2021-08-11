<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-53">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-bold tracking-wider text-left text-white uppercase">
                                Name
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                Date
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                ACTIONS
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr x-data="{modal{{2}}isopen : true }">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full" src="" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">

                                        </div>
                                        <!--<div class="text-sm text-gray-500">
                                            jane.cooper@example.com
                                        </div>-->
                                    </div>

                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{-- <div class="text-sm text-gray-900"> {{date('F d, Y', strtotime($inf->created_at))}}
            </div> --}}
            <div class="text-sm text-gray-900"> 2021/08/17</div>
            <!--<div class="text-sm text-gray-500">Archived</div>-->
            </td>
            {{-- actions column end --}}
            <td class="text-sm text-gray-900">
                {{-- buttons start --}}
                <button x-on:click="modal{{2}}isopen = true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-600" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd"
                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                {{-- buttons end --}}
                {{-- document modal start--}}
                <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
                    aria-modal="true" x-show="modal{{2}}isopen">
                    <div class="flex justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

                        <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true">
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                            aria-hidden="true">&#8203;</span>

                        <div
                            class="inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform rounded-lg shadow-xl bg-blue-51 sm:my-8 sm:align-middle sm:max-w-sm sm:w-full sm:p-6">
                            <div>
                                <div class="mt-3 text-left sm:mt-5">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                                        Related Documents
                                    </h3>
                                    <div class="items-baseline mt-2 ">
                                        <ul class="">

                                          {{-- start foreach here --}}

                                          {{-- row 1 --}}
                                            <div class=""  x-data="{doc{{1}}isopen: false}">
                                                <li class="flex">
                                                    <span>
                                                        Document Name HERE
                                                    </span>
                                                    <button class="" x-on:click="doc{{1}}isopen = ! doc{{1}}isopen">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pl-2 text-indigo-700 "
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                    </button>
                                                </li>
                                                <li class="" x-show="doc{{1}}isopen">
                                                    <img class="rounded-md h-50"
                                                        src="https://images.unsplash.com/photo-1562240020-ce31ccb0fa7d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
                                                        alt="">
                                                </li>
                                            </div>
                                            {{-- row 2 --}}
                                            <div class=""  x-data="{doc{{2}}isopen: false}">
                                              <li class="flex">
                                                  <span>
                                                      Document Name 2 HERE
                                                  </span>
                                                  <button class="" x-on:click="doc{{2}}isopen = ! doc{{2}}isopen">
                                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pl-2 text-indigo-700 "
                                                          fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                      </svg>
                                                  </button>
                                              </li>
                                              <li class="" x-show="doc{{2}}isopen">
                                                  <img class="rounded-md h-50"
                                                      src="https://images.unsplash.com/photo-1562240020-ce31ccb0fa7d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80"
                                                      alt="">
                                              </li>
                                          </div>
                                            {{-- end foreach here --}}
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 sm:mt-6">
                                <button type="button"
                                    class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm"
                                    x-on:click="modal{{2}}isopen = false">
                                    Go back to dashboard
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- document modal end--}}
            </td>
            {{-- actions column end --}}
            </tr>
            {{-- row end --}}
            <!-- More people... -->
            </tbody>
            </table>
        </div>
    </div>
</div>
</div>
