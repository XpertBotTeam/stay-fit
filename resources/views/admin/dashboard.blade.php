<x-layout>
    <x-setting heading="Manage Posts">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>username</th>
                                    <th>email</th>
                                    <th></th>
                                    <th></th>
                                    <th>points</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                
                                @foreach ($users as $user)
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                   
                                                        {{ $user->id }}
                                                    
                                                </div>
                                            </div>

                                        </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                   
                                                        {{ $user->name }}
                                                    
                                                </div>
                                            </div>

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                    
                                                        {{ $user->username }}
                                                  
                                                </div>
                                            </div>

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                   
                                                        {{ $user->email }}
                                                
                                                </div>
                                            </div>

                                        </td>
                                       
                                        <td class="px-6 py-4 whitespace-nowrap">
<span
class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
<a href="info">more info</a>
</span>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-blue-500 hover:text-blue-600">Edit</a>
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <form method="POST" action="#">
                                                @csrf
                                                
                                               {{ $user->points }}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-layout>