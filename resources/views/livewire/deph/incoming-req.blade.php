<div class="mx-auto my-2 max-w-7xl sm:px-6 lg:px-8"
    x-data="{isviewopen : @entangle('isviewopen'),isapproveopen : @entangle('isapproveopen'),isdisapproveopen : @entangle('isdisapproveopen')}">
    <div class="flex">
        <h3 class="pt-1 pl-2 text-4xl uppercase text-blue-53">Incoming Requests</h3>
    </div>
    <div class="pt-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-53">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-bold tracking-wider text-left text-white uppercase">
                                DV No.
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-white uppercase">
                                Applicant
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

                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-blue-53"> 19121401921231</div>

                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full" src="" alt="">
                                    </div>
                                    <div class="ml-4 cursor-pointer">
                                        <div class="text-sm font-medium text-blue-53" wire:click.prevent="setData()">
                                            Juan Dela Cruz
                                        </div>
                                        <!--<div class="text-sm text-gray-500">
                                        jane.cooper@example.com
                                    </div>-->
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-normal">
                                <div class="text-sm text-blue-53">Salary Cash Advance
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{-- for the char lng ng code.. delete lng kung kwan xD --}}
                                <div class="text-sm text-blue-53">2021-08-17 |
                                    {{\Carbon\Carbon::parse(date('Y-m-d',strtotime('2021-08-17')))->shortRelativeDiffForHumans();}}
                                </div>
                            </td>

                            <td class="flex items-center px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center py-2">
                                    <div class="text-sm text-green-600">
                                        <button class="bg-transparent" wire:click.prevent='openviewmodal({{1}})'>

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
                                    <div class="text-sm text-red-600">
                                        <button class="bg-transparent" wire:click.prevent='opendisapprovemodal({{1}})'>

                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>


                                        </button>


                                    </div>
                                    <div class="text-sm text-indigo-700">
                                        <button class="bg-transparent" wire:click.prevent='openapprovemodal({{2}})'>


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

    {{-- modal for View DV --}}
    <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        x-show="isviewopen" x-cloak>
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-green-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: outline/exclamation -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center whitespace-normal sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-black" id="modal-title">
                                DV Entity Title Here
                            </h3>
                            <h3 class="text-sm font-medium leading-6 text-gray-700" id="modal-title">
                                DV Number here example : dvid var from public declaration{{$dvid}}
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500 wrap">
                                    Show DV information here. To Be Decided
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button x-on:click="isviewopen=false" type="button"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-blue-54 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Close Dialog
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{--  modal end --}}
    {{-- modal for approve dv --}}
    <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        x-show="isapproveopen" x-cloak>
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-blue-200 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: outline/exclamation -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-800" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center whitespace-normal sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-black" id="modal-title">
                                Approve Disbursement Voucher # insert DV # here
                            </h3>
                            <h3 class="text-sm font-medium leading-6 text-gray-700" id="modal-title">
                                DV entity title here
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500 wrap">
                                    Approve Disbursement Voucher (Cash Advance "or DV TYPE")? This action cannot be
                                    undone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button wire:click.prevent='testButton("DV Approved")' type="button"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-blue-54 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-blue-800 sm:ml-3 sm:w-auto sm:text-sm">
                        Approve Voucher
                    </button>
                    <button x-on:click="isapproveopen=false" type="button"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-gray-400 border border-transparent rounded-md shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{--  modal end --}}


    {{-- modal for approve dv --}}
    <div class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        x-show="isdisapproveopen" x-cloak>
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-200 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: outline/exclamation -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                              </svg>
                        </div>
                        <div class="mt-3 text-center whitespace-normal sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg font-medium leading-6 text-black" id="modal-title">
                                Return Disbursement Voucher # insert DV # here
                            </h3>
                            <h3 class="text-sm font-medium leading-6 text-gray-700" id="modal-title">
                                DV entity title here
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500 wrap">
                                    Return Disbursement Voucher (Cash Advance "or DV TYPE")? This action cannot be
                                    undone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button wire:click.prevent='testButton("DV Returned")' type="button"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-blue-54 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:bg-red-600 sm:ml-3 sm:w-auto sm:text-sm">
                        Return Voucher
                    </button>
                    <button x-on:click="isdisapproveopen=false" type="button"
                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-gray-400 border border-transparent rounded-md shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{--  modal end --}}

</div>
