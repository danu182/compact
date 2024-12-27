
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('cari SEP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900 mb-3">
                    {{ __('Hasil Pencarian nomer Sep = '. $dataKlaim['noSep']) }}
                </h2>

                
                 <div class="relative flex flex-col w-full h-full  text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
                    
                    <table class="table-auto">
                        <thead>
                            {{-- <tr>
                                <th>No. SEP</th>
                                <th>No. Rujukan</th>
                                <th>Nama Pasien</th>
                                <th>Diagnosa</th>
                                <th>Tanggal SEP</th>
                                <th>nama dpjp</th>
                                <th>nama noSurat</th>
                                <th>nama dokter</th>
                                <th>Poli</th>
                            </tr> --}}
                            <tr>
                                <th class="text-left">no sep</th>
                                <td>{{ $dataKlaim['noSep'] }}</td> 
                            </tr>
                            <tr>
                                <th class="text-left">noRujukan</th>
                                <td>{{ $dataKlaim['noRujukan'] }}</td>
                                
                            </tr>
                            <tr>
                                <th class="text-left">tglSep</th>
                                <td>{{ $dataKlaim['tglSep'] }}</td>
                                
                            </tr>
                            <tr>
                                <th class="text-left">jnsPelayanan</th>
                                <td>{{ $dataKlaim['jnsPelayanan'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kelasRawat</th>
                                <td>{{ $dataKlaim['kelasRawat'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">diagnosa</th>
                                <td>{{ $dataKlaim['diagnosa'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">noRujukan</th>
                                <td>{{ $dataKlaim['noRujukan'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">poli</th>
                                <td>{{ $dataKlaim['poli'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">poliEksekutif</th>
                                <td>{{ $dataKlaim['poliEksekutif'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">catatan</th>
                                <td>{{ $dataKlaim['catatan'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">penjamin</th>
                                <td>{{ $dataKlaim['penjamin'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">noKartu</th>
                                <td>{{ $dataKlaim['peserta']['noKartu'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">nama</th>
                                <td>{{ $dataKlaim['peserta']['nama'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">tglLahir</th>
                                <td>{{ $dataKlaim['peserta']['tglLahir'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">noMr</th>
                                <td>{{ $dataKlaim['peserta']['noMr'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kelamin</th>
                                <td>{{ $dataKlaim['peserta']['kelamin'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">jnsPeserta</th>
                                <td>{{ $dataKlaim['peserta']['jnsPeserta'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">hakKelas</th>
                                <td>{{ $dataKlaim['peserta']['hakKelas'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">asuransi</th>
                                <td>{{ $dataKlaim['peserta']['asuransi'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">klsRawatHak</th>
                                <td>{{ $dataKlaim['klsRawat']['klsRawatHak'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">klsRawatNaik</th>
                                <td>{{ $dataKlaim['klsRawat']['klsRawatNaik'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">klsRawatNaik</th>
                                <td>{{ $dataKlaim['klsRawat']['klsRawatNaik'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">pembiayaan</th>
                                <td>{{ $dataKlaim['klsRawat']['pembiayaan'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">penanggungJawab</th>
                                <td>{{ $dataKlaim['klsRawat']['penanggungJawab'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">informasi</th>
                                <td>{{ $dataKlaim['informasi'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kdStatusKecelakaan</th>
                                <td>{{ $dataKlaim['kdStatusKecelakaan'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">nmstatusKecelakaan</th>
                                <td>{{ $dataKlaim['nmstatusKecelakaan'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kdDPJP</th>
                                <td>{{ $dataKlaim['dpjp']['kdDPJP'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">nmDPJP</th>
                                <td>{{ $dataKlaim['dpjp']['nmDPJP'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">noSurat</th>
                                <td>{{ $dataKlaim['kontrol']['noSurat'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kdDokter</th>
                                <td>{{ $dataKlaim['kontrol']['kdDokter'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">nmDokter</th>
                                <td>{{ $dataKlaim['kontrol']['nmDokter'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">tglKejadian</th>
                                <td>{{ $dataKlaim['lokasiKejadian']['tglKejadian'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kdProp</th>
                                <td>{{ $dataKlaim['lokasiKejadian']['kdProp'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kdKab</th>
                                <td>{{ $dataKlaim['lokasiKejadian']['kdKab'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kdKec</th>
                                <td>{{ $dataKlaim['lokasiKejadian']['kdKec'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">ketKejadian</th>
                                <td>{{ $dataKlaim['lokasiKejadian']['ketKejadian'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">lokasi</th>
                                <td>{{ $dataKlaim['lokasiKejadian']['lokasi'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">cob</th>
                                <td>{{ $dataKlaim['cob'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">katarak</th>
                                <td>{{ $dataKlaim['katarak'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kode</th>
                                <td>{{ $dataKlaim['tujuanKunj']['kode'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">nama</th>
                                <td>{{ $dataKlaim['tujuanKunj']['nama'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kode</th>
                                <td>{{ $dataKlaim['flagProcedure']['kode'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">nama</th>
                                <td>{{ $dataKlaim['flagProcedure']['nama'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kode</th>
                                <td>{{ $dataKlaim['kdPenunjang']['kode'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">nama</th>
                                <td>{{ $dataKlaim['kdPenunjang']['nama'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">kode</th>
                                <td>{{ $dataKlaim['assestmenPel']['kode'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">nama</th>
                                <td>{{ $dataKlaim['assestmenPel']['nama'] }}</td>
                            </tr>
                            <tr>
                                <th class="text-left">eSEP</th>
                                <td>{{ $dataKlaim['eSEP'] }}</td>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
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
                            </tr> --}}
                        </tbody>
                    </table>
                    
                </div>
                    

                {{-- table --}}


            </div>
        </div>
    </div>
</x-app-layout>
