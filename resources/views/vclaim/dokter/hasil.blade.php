
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('JUmlah SEP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('data dokter ') }}
                </h2>

                {{-- <p class="mt-1 mb-2 text-sm text-gray-600">
                    {{ __('Here is your rujukan list.') }}
                </p>
                <div class="flex justify-between items-center">
                    <form action="" method="get">
                        <input type="text" name="search" class="border border-gray-300 shadow  rounded p-3" placeholder="Cari data..." value="{{ request('search') }}">
                    </form>
                    {{-- <a href="{{ route('contacts.create') }}"
                    class="px-4 py-3 bg-blue-700  my-2 ring-indigo-300 border  text-white">Create
                        Pesera</a> --}}
                {{-- </div>  --}}
                
                {{-- table --}}
                
                 <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
                    
                    <table class="w-full text-left table-auto min-w-max">
                        <thead>
                        <tr>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                No
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                kode
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                nama
                            </p>
                            </th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($dokter['list'] as $list)
                            <tr class="hover:bg-slate-50">
                            
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $loop->iteration }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $list['kode'] }} 
                                </p>
                                </td>
                                
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $list['nama'] }} 
                                </p>
                                </td>
                                
                                
                            </tr>
                        @endforeach
                         
                            
                            

                       
                        </tbody>
                    </table>
                    
                </div>
                    

                {{-- table --}}


            </div>
        </div>
    </div>
</x-app-layout>
