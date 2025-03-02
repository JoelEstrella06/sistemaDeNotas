<x-app-layout>
    <x-slot name="header">
        <div class=" flex justify-between gap-3">
            <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Nuevo presupuesto') }}
            </h2>
        </div>
    </x-slot>
    <x-section>
        <livewire:presupuestos.new-presupuesto-form-component/>
    </x-section>
</x-app-layout>