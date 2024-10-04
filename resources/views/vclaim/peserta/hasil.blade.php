
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
                    {{ __('Data Peserta') }}
                </h2>

                <p class="mt-1 mb-2 text-sm text-gray-600">
                    {{ __('Data Peserta.') }}
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
                                noKartu
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                nik
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">
                                nama
                            </p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">sex</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">noMR</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">noTelepon</p>
                            </th>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">tglLahir</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">statusPeserta-keterangan</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">provUmum-kdProvider</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">provUmum-nmProvider</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">jenisPeserta-keterangan</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">hakKelas-keterangan</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">umurSekarang</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">umurSaatPelayanan</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">informasi-dinsos</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">informasi-noSKTM</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">informasi-eSEP</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">informasi-prolanisPRB</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">cob->noAsuransi</p>
                            </th>
                            <th class="p-4 border-b border-slate-300 bg-slate-50">
                            <p class="block text-sm font-normal leading-none text-slate-500">cob->nmAsuransi</p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="hover:bg-slate-50">
                            <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">
                                {{ $peserta['peserta']['noKartu'] }}
                            </p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">
                                {{ $peserta['peserta']['nik'] }}
                            </p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">
                                {{ $peserta['peserta']['nama'] }}
                            </p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                            <p class="block text-sm text-slate-800">
                                @if ($peserta['peserta']['sex']=="P")
                                    Perempuan
                                @else
                                    Laki-laki
                                @endif
                            </p>
                            </td>
                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               {{ $peserta['peserta']['mr']['noMR'] }}
                            </a>
                            </td>
                            
                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               {{ $peserta['peserta']['mr']['noTelepon'] }}
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               {{ $peserta['peserta']['tglLahir'] }}
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               {{ $peserta['peserta']['statusPeserta']['keterangan'] }}
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               {{ $peserta['peserta']['provUmum']['kdProvider'] }}
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               {{ $peserta['peserta']['provUmum']['nmProvider'] }}
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               {{ $peserta['peserta']['jenisPeserta']['keterangan'] }}
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               {{ $peserta['peserta']['hakKelas']['keterangan'] }}
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               {{ $peserta['peserta']['umur']['umurSekarang'] }}
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               {{ $peserta['peserta']['umur']['umurSaatPelayanan'] }}
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               {{ $peserta['peserta']['informasi']['dinsos'] }}
                               @if ($peserta['peserta']['informasi']['dinsos'] == null)
                                   null
                               @else
                                   {{ $peserta['peserta']['informasi']['dinsos'] }}
                               @endif
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                                @if ($peserta['peserta']['informasi']['prolanisPRB']== null)
                                   null
                               @else
                                   {{ $peserta['peserta']['informasi']['prolanisPRB'] }}
                               @endif
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               @if ($peserta['peserta']['informasi']['noSKTM']==null)
                                   null
                               @else
                                   {{ $peserta['peserta']['informasi']['noSKTM'] }}
                               @endif
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               @if ($peserta['peserta']['informasi']['eSEP']== null )
                                   null
                               @else
                                   {{ $peserta['peserta']['informasi']['eSEP'] }}
                               @endif
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">

                               @if ($peserta['peserta']['cob']['noAsuransi'] == null)
                                   null
                               @else
                                   {{ $peserta['peserta']['cob']['noAsuransi']  }}
                               @endif
                            </a>
                            </td>

                            <td class="p-4 border-b border-slate-200">
                            <a href="#" class="block text-sm font-semibold text-slate-800">
                               @if ($peserta['peserta']['cob']['nmAsuransi']==null)
                                   null
                               @else
                                   {{ $peserta['peserta']['cob']['nmAsuransi'] }}
                               @endif
                            </a>
                            </td>
                            

                        </tr>
                       
                        </tbody>
                    </table>
                    </div>
                    

                {{-- table --}}


            </div>
        </div>
    </div>
</x-app-layout>
