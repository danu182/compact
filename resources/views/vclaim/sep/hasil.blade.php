
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('cari SEP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('cari Sep') }}
                </h2>

                
                 <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
                    
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th>No. SEP</th>
                                <th>No. Rujukan</th>
                                <th>Nama Pasien</th>
                                <th>Diagnosa</th>
                                <th>Tanggal SEP</th>
                                <th>nama dpjp</th>
                                <th>nama noSurat</th>
                                <th>nama dokter</th>
                                <th>Poli</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $dataKlaim['noSep'] }}</td>
                                <td>{{ $dataKlaim['noRujukan'] }}</td>
                                <td>{{ $dataKlaim['peserta']['nama'] }}</td>
                                <td>{{ $dataKlaim['diagnosa'] }}</td>
                                <td>{{ $dataKlaim['tglSep'] }}</td>
                                <td>{{ $dataKlaim['dpjp']['nmDPJP'] }}</td>
                                <td>
                                    @if ($dataKlaim['kontrol']['noSurat'] == null)
                                        null
                                    @else
                                        {{ $dataKlaim['kontrol']['noSurat']  }}
                                    @endif

                                    </td>
                                    <td>
                                        @if ($dataKlaim['kontrol']['nmDokter'] == null)
                                        null
                                    @else
                                        {{ $dataKlaim['kontrol']['nmDokter']  }}
                                    @endif

                                </td>
                                <td>{{ $dataKlaim['poli'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                    

                {{-- table --}}


            </div>
        </div>
    </div>
</x-app-layout>
