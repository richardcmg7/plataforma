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
                    {{ $titulo }}
                    </div>
                        <div class="p-6 bg-gray text-center">
                            <a href="{{ route('devices.create') }}">
                                <button class="bg-green-500 p-6 active:bg-green-700 ...">
                                 + Nuevo
                            </button></a>
                        </div>
                                     
                    @foreach ($devices as $device)
                        <div>{{ $device->id_device }}</div>
                        <div>{{ $device->deveui }}</div>
                        <div>{{ $device->appeui }}</div>
                        <div>{{ $device->freq_region }}</div>
                    </br>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
