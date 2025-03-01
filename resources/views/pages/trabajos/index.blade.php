<x-app-layout>
    <x-slot name="header">
        <div class=" flex justify-between gap-3">
            <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Trabajos') }}
            </h2>
            <livewire:trabajos.new-trabajo-component/>
        </div>
    </x-slot>
    <x-section>
    <livewire:trabajos.trabajos-table-component/>
    </x-section>
</x-app-layout>