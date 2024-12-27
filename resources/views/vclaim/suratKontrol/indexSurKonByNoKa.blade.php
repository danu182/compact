
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
                    {{ __('status pasien kontrol  Per Tanggal saat ini') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Masukkan Tanggal.') }}
                </p>
                <form method="post" enctype="multipart/form-data" action="{{ route('data.surat.kontrol.byNoKa.proses') }}" class="mt-6 space-y-6">
                    @csrf

                    <div>
                        <label for="">BUlan saat ini</label>
                        <input type="text" name="Parameter1" value="{{ date('m') }}" readonly>{{ date('M') }}
                    </div>
                    
                    <div>
                        <label for="">tahun saat ini</label>
                        <input type="text" name="Parameter2" value="{{ date('Y') }}" readonly>
                    </div>
                    
                    <div>
                        <label for="">Nomer kartu</label>
                        <input type="text" name="Parameter3">
                        <x-input-error :messages="$errors->get('Parameter3')" class="mt-2"/>
                    
                    </div>
                    
                    <div>
                        <label for="">filter</label>
                        <select name="Parameter4" id="">
                            <option value="2">tanggal rencana kontrol</option>
                            <option value="1">tanggal entri</option>
                        </select>
                    </div>
                    <div>
                        <x-primary-button>{{ __('proses') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
