<script src="https://cdn.tailwindcss.com"></script>
<div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($clients as $client)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    
                                                        {{ $client->lastweight }}
                                                    
                                                </div>
                                            </div>

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
<span
class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
{{ $client->weight }}
</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                   
                                                        {{ $client->checkinsnumber }}
                                    
                                                </div>
                                            </div>

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                   
                                                        {{ $client->caloriesintake }}
                                                    
                                                </div>
                                            </div>

                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-blue-500 hover:text-blue-600">Edit</a>
                                        </td>

                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   

  
        