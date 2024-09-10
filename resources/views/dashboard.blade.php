<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 mb-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    {{ __("display tempat tidur!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="mt-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    {{-- tabel --}}
                    <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
                        <table class="w-full text-left table-auto min-w-max">
                            @forelse ($dataByKelas as $kelas => $kamar)
                            <thead>
                                <tr>
                                    <th colspan="7" class="bg-emerald-200 text-2xl">{{ $kelas }}</th>
                                </tr>
                                <tr>
                                    {{-- <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">
                                        namaruang
                                    </p>
                                    </th> --}}
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">
                                        kode ruangan
                                    </p>
                                    </th>
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">
                                        kodekelas
                                    </p>
                                    </th>
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">
                                        nama kelas
                                    </p>
                                    </th>
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">
                                        koderuang
                                    </p>
                                    </th>
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">
                                        kapasitas
                                    </p>
                                    </th>
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">
                                        tersedia
                                    </p>
                                    </th>
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500">
                                        lastupdate
                                    </p>
                                    </th>
                                    <th class="p-4 border-b border-slate-300 bg-slate-50">
                                    <p class="block text-sm font-normal leading-none text-slate-500"></p>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                            
                                @foreach ($kamar as $item)
                                   
                                    <td class="p-4 border-b border-slate-200">
                                    <p class="block  text-slate-800 text-2xl">
                                        {{ $item['namaruang'] }}
                                    </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                    <p class="block text-sm text-slate-800">
                                        {{ $item['kodekelas'] }}
                                    </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                    <p class="block text-sm text-slate-800">
                                        {{ $item['namakelas'] }}
                                    </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                    <p class="block text-sm text-slate-800">
                                        {{ $item['koderuang'] }}
                                    </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                    <p class="block text-sm text-slate-800">
                                        {{ $item['kapasitas'] }}
                                    </p>
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                        {{-- {{ $item['tersedia'] }} --}}
                                        @if ($item['tersedia']==0)
                                        <p class="block text-sm text-red-500 font-bold bg-cyan-50">
                                            {{ $item['tersedia'] }}
                                        </p>
                                        @else
                                        <p class="block text-sm text-teal-700	 font-bold">
                                            {{ $item['tersedia'] }}
                                        </p>
                                            
                                        @endif
                                    </td>
                                    <td class="p-4 border-b border-slate-200">
                                    <p class="block text-sm text-slate-800">
                                        {{ $item['lastupdate'] }}
                                    </p>
                                    </td>
                                    {{-- <td class="p-4 border-b border-slate-200">
                                    <a href="#" class="block text-sm font-semibold text-slate-800">
                                        Edit
                                    </a>
                                    </td> --}}
                                </tr>
                                @endforeach
                                @empty
                                <tr class="hover:bg-slate-50">
                                    tidak ada isi
                                </tr>    
                                @endforelse
                            
                            </tbody>
                        </table>
                        </div>
                    {{-- tabel --}}


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
