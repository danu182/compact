
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('List Antrian') }}
                </h2>

                <p class="mt-1 mb-2 text-sm text-gray-600">
                    {{ __('Here is your antrian list tanggal '. $tanggal) }}
                </p>
                <div class="flex justify-between items-center">
                    <form action="" method="get">
                        <input type="text" name="search" class="border border-gray-300 shadow  rounded p-3" placeholder="Cari data..." value="{{ request('search') }}">
                    </form>
                    {{-- <a href="{{ route('contacts.create') }}"
                    class="px-4 py-3 bg-blue-700  my-2 ring-indigo-300 border  text-white">Create
                        Pesera</a> --}}
                </div>
                
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
                            {{-- <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                jeniskunjungan
                            </p>
                            </th> --}}
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                nomorreferensi
                            </p>
                            </th>
                            
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                kodebooking
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                norekammedis
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                nik
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                nokapst
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                createdtime
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                noantrean
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                kodepoli
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                sumberdata
                            </p>
                            </th>
                           
                            
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                kodedokter
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                jampraktek
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                tanggal
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                nohp
                            </p>
                            </th>
                             <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                estimasidilayani
                            </p>
                            </th>
                            
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                ispeserta
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                status
                            </p>
                            </th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($peserta as $pasien)
                            <tr class="hover:bg-slate-50">
                            
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                 1    {{-- {{ $loop->pasien }}  --}}
                                </p>
                                </td>
                                {{-- <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                 {{ $pasien->jeniskunjungan }} 
                                </p> 
                                </td>--}}
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['nomorreferensi'] }} 
                                </p>
                                </td>
                                
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['kodebooking'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['norekammedis'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['nik'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['nokapst'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                    {{ date("Y-m-d H:i:s",$pasien['createdtime']/1000) }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['noantrean'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['kodepoli'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['sumberdata'] }} 
                                </p>
                                </td>
                                
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['kodedokter'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['jampraktek'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['tanggal'] }} 
                                </p>
                                </td>

                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['nohp'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ date("Y-m-d H:i:s",$pasien['estimasidilayani']/1000) }}
                                </p>
                                </td>
                                
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['ispeserta'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['status'] }} 
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
