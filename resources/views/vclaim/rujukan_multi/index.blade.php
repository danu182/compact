
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
                    {{ __('Peserta') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('masukkan tanggal dan nomer peserta.') }}
                </p>
                <form method="post" enctype="multipart/form-data" action="{{ route('rujukan.multi.proses') }}" class="mt-6 space-y-6">
                    @csrf
                    

                    {{-- asdasdas --}}
                    
                    {{-- asdasdas --}}

                    <div>
                        <x-input-label for="nomor" :value="__('Nomor')"/>
                        <x-text-input id="nomor" name="nomor" type="text"
                                      class="mt-1 block w-full" placeholder="Your nomor"/>
                        <x-input-error :messages="$errors->get('nomor')" class="mt-2"/>
                    </div>

                    
                    <div>
                        <x-primary-button>{{ __('proses') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
