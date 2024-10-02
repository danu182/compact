
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
                    {{ __('Jadwal operasi') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Masukkan Tanggal.') }}
                </p>
                <form method="post" enctype="multipart/form-data" action="{{ route('jadwal.operasi.proses') }}" class="mt-6 space-y-6">
                    @csrf
                    
                    <div>
                        <x-input-label for="tanggal1" :value="__('Tanggal1')"/>
                        <x-text-input id="tanggal1" name="tanggal1" type="date" enable-old-suport
                                      class="mt-1 block w-full" placeholder="tanggal awal" />
                        <x-input-error :messages="$errors->get('tanggal1')" class="mt-2"/>
                    </div>
                    <div>
                        <x-input-label for="tanggal" :value="__('Tanggal2')"/>
                        <x-text-input id="tanggal2" name="tanggal2" type="date"  enable-old-suport
                                      class="mt-1 block w-full" placeholder="tanggal akhir"/>
                        <x-input-error :messages="$errors->get('tanggal2')" class="mt-2"/>
                    </div>
                    
                   

                    
                    <div>
                        <x-primary-button>{{ __('proses') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
