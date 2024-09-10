
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('JUmlah SEP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('jumlah SEp pr nomer rujukan') }}
                </h2>

                {{-- <p class="mt-1 mb-2 text-sm text-gray-600">
                    {{ __('Here is your rujukan list.') }}
                </p>
                <div class="flex justify-between items-center">
                    <form action="" method="get">
                        <input type="text" name="search" class="border border-gray-300 shadow  rounded p-3" placeholder="Cari data..." value="{{ request('search') }}">
                    </form>
                    {{-- <a href="{{ route('contacts.create') }}"
                    class="px-4 py-3 bg-blue-700  my-2 ring-indigo-300 border  text-white">Create
                        Pesera</a> --}}
                {{-- </div>  --}}
                
                {{-- table --}}
                
                 <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
                    
                    <label class="block mb-1 text-sm text-slate-800">
                            nomer rujukan {{ $parameter2 }} baru di Dipakai untuk sep sebanyak {{ $peserta['jumlahSEP']  }} kali 
                        </label>
                    
                </div>
                    

                {{-- table --}}


            </div>
        </div>
    </div>
</x-app-layout>
