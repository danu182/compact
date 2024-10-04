
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
                    {{ __('Here is your antrian list tanggal ') }}
                </p>
                <div class="flex justify-between items-center">
                        {{-- <form action="" method="get">
                            <input type="text" name="search" class="border border-gray-300 shadow  rounded p-3" placeholder="Cari data..." value="{{ request('search') }}">
                        </form> --}}
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
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                noSuratKontrol
                            </p>
                            </th>
                            
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                jnsKontrol
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                namaJnsKontrol
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                tglRencanaKontrol
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                tglTerbitKontrol
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                noSepAsalKontrol
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                poliAsal
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                namaPoliAsal
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                poliTujuan
                            </p>
                            </th>
                           
                            
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                namaPoliTujuan
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                tglSEP
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                kodeDokter
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                namaDokter
                            </p>
                            </th>
                             <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                noKartu
                            </p>
                            </th>
                            
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                nama
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                terbitSEP
                            </p>
                            </th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($surkon['list'] as $pasien)
                            <tr class="hover:bg-slate-50">
                            
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                 1    {{-- {{ $loop->pasien }}  --}}
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['jnsPelayanan'] }} 
                                </p>
                                </td>
                                
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['jnsKontrol'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['namaJnsKontrol'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['tglRencanaKontrol'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['tglTerbitKontrol'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                    @if ($pasien['noSepAsalKontrol']==null)
                                        null
                                    @else
                                    {{ $pasien['noSepAsalKontrol'] }}
                                     @endif
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                    @if (is_null($pasien['poliAsal']) |empty($pasien['poliAsal']) )
                                        -
                                    @else
                                        {{ $pasien['poliAsal'] }} 
                                        
                                    @endif 
                                    


                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">

                                    {{-- @if ($pasien['namaPoliAsal']==null)
                                        null
                                    @else --}}
                                    {{ $pasien['namaPoliAsal'] }}
                                     {{-- @endif --}}
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['poliTujuan'] }} 
                                </p>
                                </td>
                                
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['namaPoliTujuan'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                    @if ($pasien['tglSEP']== null)
                                        -
                                    @else
                                        {{ $pasien['tglSEP'] }} 
                                    @endif
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['kodeDokter'] }} 
                                </p>
                                </td>

                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['namaDokter'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{$pasien['noKartu'] }}
                                </p>
                                </td>
                                
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['nama'] }} 
                                </p>
                                </td>
                                <td class="p-4 border-b border-slate-200">
                                <p class="block text-sm text-slate-800">
                                     {{ $pasien['terbitSEP'] }} 
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
