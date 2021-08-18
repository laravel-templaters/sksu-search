<div class="mx-auto my-2 max-w-7xl sm:px-6 lg:px-8">
    <div class="flex">
        <h3 class="pt-1 pl-2 text-4xl uppercase text-blue-53">Returned Requests</h3>
    </div>
    <div class="pt-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-gray-200 max-divide-y">
                    <thead class="bg-blue-53">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-bold tracking-wider text-left text-white uppercase">
                                DV No.
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                Entity Title
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                Date Submitted
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                Date Returned
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                Notes/Remarks
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">

                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="whitespace-normal">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-blue-53"> 19121401921231</div>

                            </td>
                            <td class="px-6 py-4 whitespace-normal">
                                <div class="text-sm text-blue-53">Salary Cash Advance
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{-- for the char lng ng code.. delete lng kung kwan xD --}}
                                <div class="text-sm text-blue-53">2021-08-11 |
                                    {{\Carbon\Carbon::parse(date('Y-m-d',strtotime('2021-08-11')))->shortRelativeDiffForHumans();}}
                                </div>
                            </td>


                            <td class="px-6 py-4 whitespace-nowrap">
                                {{-- for the char lng ng code.. delete lng kung kwan xD --}}
                                <div class="text-sm text-blue-53">2021-08-17 |
                                    {{\Carbon\Carbon::parse(date('Y-m-d',strtotime('2021-08-17')))->shortRelativeDiffForHumans();}}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{-- for the char lng ng code.. delete lng kung kwan xD --}}

                                <div class="text-sm text-blue-53">
                                    <span class="">Incorrect Documents Suubmitted
                                    </span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center py-2">
                                    <div class="text-sm text-green-600">
                                        <button class="bg-transparent">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                <path fill-rule="evenodd"
                                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{-- MODAL FOR View DV --}}
                                        </button>
                                    </div>
                                    <div class="text-sm text-red-600" x-data="{modalReject{{1}}open: false}">
                                        <button class="bg-transparent" x-on:click="modalReject{{1}}open = true">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>


                                        </button>

                                        {{-- modal for Return/reject --}}

                                    </div>
                                    <div class="text-sm text-indigo-700">
                                        <button class="bg-transparent">


                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            {{-- MODAL FOR APPROVE --}}

                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- modal for --}}
    <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        x-show="modalReject{{1}}open" x-cloak>
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: outline/exclamation -->
                            <svg class="w-6 h-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center whitespace-normal sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                                Deactivate account
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500 wrap">
                                    Are you sure you want to deactivate your
                                    account? All of your data will be
                                    permanently removed. This action cannot be
                                    undone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Deactivate
                    </button>
                    <button type="button"
                        class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                        x-on:click="modalReject{{1}}open=false">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
