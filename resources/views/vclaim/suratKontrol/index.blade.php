
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create   ') }}
        </h2>
    </x-slot>

    @if(session('pesan_sukses'))
    <div class="alert alert-success">
        {{ session('pesan_sukses') }}
    </div>
    @endif

    @if($errors->any())
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">    
            <div class="p-4 sm:p-8 bg-red-400 shadow sm:rounded-lg">

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
            </div>
    </div>
    
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Antrian Per Tanggal') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Masukkan Tanggal.') }}
                </p>
                <form method="post" enctype="multipart/form-data" action="{{ route('data.surat.kontrol.proses') }}" class="mt-6 space-y-6">
                    @csrf

                    <div>
                        <select name=" filter " id=" filter ">
                            <option value="1">tanggal entri</option>
                            <option value="2">tanggal rencana kontrol</option>
                        </select>
                    </div>
                    
                    <div>
                        <x-input-label for="tanggalAwal" :value="__('tanggalAwal')"/>
                        <x-text-input id="tanggalAwal" name="tanggalAwal" type="date" value="{{ old('tanggalAwal') }}"
                                      class="mt-1 block w-full" placeholder="isi tanggalAwal"/>
                        <x-input-error :messages="$errors->get('tanggalAwal')" class="mt-2"/>
                    </div>
                    
                    <div>
                        <x-input-label for="tanggalAkhir" :value="__('TanggalAkhir')"/>
                        <x-text-input id="tanggalAkhir" name="tanggalAkhir" type="date" value="{{ old('tanggalAkhir') }}"
                                      class="mt-1 block w-full" placeholder="isi TanggalAkhir"/>
                        <x-input-error :messages="$errors->get('tanggalAkhir')" class="mt-2"/>
                    </div>
                    
                    <div>
                        <x-primary-button>{{ __('proses') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
