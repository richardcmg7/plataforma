<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="p-6 bg-gray text-center border-b border-gray-200">
                    {{ $title }}
                    </div>
                    
                    @if ($errors->any())
                    <div class="p-6 bg-gray text-center border-b border-gray-200">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                        
                    <form method="POST" action="{{ route('devices.store') }}">
                        @csrf
                        {{-- <div>{{ $device->id_device }}</div>
                        <div>{{ $device->deveui }}</div>
                        <div>{{ $device->appeui }}</div>
                        <div>{{ $device->freq_region }}</div> --}}

                        <!-- Dispositivo Id -->
                        <div>
                            <x-label for="id_device" :value="__('Dispositivo Id')" />
            
                            <x-input id="id_device" class="block mt-1 w-full" type="text" name="id_device" :value="old('id_device')" required autofocus />
                        </div>
                        <!-- Dev EUI -->
                        <div>
                            <x-label for="deveui" :value="__('Dev EUI')" />
            
                            <x-input id="deveui" class="block mt-1 w-full" type="text" name="deveui" :value="old('deveui')"  autofocus />
                        </div>
                        <!-- App EUI -->
                        <div>
                            <x-label for="appeui" :value="__('App EUI')" />
            
                            <x-input id="appeui" class="block mt-1 w-full" type="text" name="appeui" :value="old('appeui')"  autofocus />
                        </div>
                        <!-- Frecuencia de Región -->
                        <div>
                            <x-label for="freq_region" :value="__('Frecuencia de Región')" />
            
                            <x-input id="freq_region" class="block mt-1 w-full" type="text" name="freq_region" :value="old('freq_region')"  autofocus />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                                        
                            <x-button class="ml-3">
                                {{ __('Crear') }}
                            </x-button>
                        </div>
                    </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
