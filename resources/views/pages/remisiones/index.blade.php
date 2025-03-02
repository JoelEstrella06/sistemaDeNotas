<x-app-layout>
    <x-slot name="header">
        <div class=" flex justify-between gap-3">
            <h2 class=" flex-1 font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Presupuestos') }}
            </h2>
            <x-link href="{{route('remision.create')}}">Nuevo presupuesto</x-link>
        </div>
    </x-slot>
    <x-section>
    <livewire:presupuestos.presupuestos-table-component/>
    </x-section>
</x-app-layout>