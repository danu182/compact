
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Peserta') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('masukkan tanggal dan nomer peserta.') }}
                </p>
                <form method="post" enctype="multipart/form-data" action="{{ route('contacts.store') }}" class="mt-6 space-y-6">
                    @csrf
                    
                    <div>
                        <x-input-label for="nomor" :value="__('Nomor')"/>
                        <x-text-input id="nomor" name="nomor" type="text"
                                      class="mt-1 block w-full" placeholder="Your nomor"/>
                        <x-input-error :messages="$errors->get('nomor')" class="mt-2"/>
                    </div>
                    
                    <div>
                        <x-input-label for="tanggal1" :value="__('Tanggal')"/>
                        <x-text-input id="tanggal1" name="tanggal1" type="date"
                                      class="mt-1 block w-full" placeholder="Tanggal"/>
                        <x-input-error :messages="$errors->get('tanggal1')" class="mt-2"/>
                    </div>

                    
                    <div>
                        <x-primary-button>{{ __('proses') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
