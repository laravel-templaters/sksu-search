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
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @if($info->count() >= 1)    
                        @foreach($info as $inf)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-10 h-10 rounded-full"
                                            src="{{url('storage/'.$inf->profile_photos)}}"
                                            alt="">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{$inf->firstName}} {{$inf->lastName}}
                                        </div>
                                        <!--<div class="text-sm text-gray-500">
                                            jane.cooper@example.com
                                        </div>-->
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"> {{date('F d, Y', strtotime($inf->created_at))}}</div>
                                <!--<div class="text-sm text-gray-500">Archived</div>-->
                            </td>
                        </tr>
                        @endforeach
                        @endif       
                        {{-- row --}}
                        <!-- More people... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
