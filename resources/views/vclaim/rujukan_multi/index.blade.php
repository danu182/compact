
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Contact') }}
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
                    {{ __('Rujukan') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('masukkan nomer peserta.') }}
                </p>
                <form method="post" enctype="multipart/form-data" action="{{ route('rujukan.multi.proses') }}" class="mt-6 space-y-6">
                    @csrf
                    

                    {{-- asdasdas --}}
                    
                    
                     <div class="relative h-10 w-72 min-w-[200px]">
                        <label class="block mb-1 text-sm text-slate-800">
                            Pilih jenis faskkes
                        </label>
                        <div class="relative">
                            <select name="nilai"
                                class="w-full h-10 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md appearance-none cursor-pointer">
                                <option value="0">fktp</option>
                                <option value="1">fktrl</option>
                            </select>
                        </div>
                       
                        </div>

                    
                    {{-- asdasdas --}}

                    


                   
                    <div>
                        <x-input-label for="nomor" :value="__('Nomor BPJS Peserta')"/>
                        <x-text-input id="nomor" name="nomor" type="text"
                                      class="mt-1 block w-full" placeholder="Your nomor"/>
                        <x-input-error :messages="$errors->get('nomor')" class="mt-2"/>
                    </div>
                    
                    {{-- <div>
                        <x-input-label for="tanggal1" :value="__('Tanggal')"/>
                        <x-text-input id="tanggal1" name="tanggal1" type="date"
                                      class="mt-1 block w-full" placeholder="Tanggal"/>
                        <x-input-error :messages="$errors->get('tanggal1')" class="mt-2"/>
                    </div> --}}

                    
                    <div>
                        <x-primary-button>{{ __('proses') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
