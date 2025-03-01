<x-modal-center :button_close=false tittle="Nuevo trabajo" required_inputs dropdown>
    <x-slot name="btn_open">
        <div class="flex gap-2 items-center" title="Editar trabajo" wire:click="trabajoData()">
            <x-icons.edit class="size-4" />
            <span class="block">Editar</span>
        </div>
    </x-slot>
    <form action="">
        <div class="flex gap-3 flex-wrap">
            <x-label value="Nombre" required>
                <x-input name="nombre" minlength="1" maxlength="100" required wire:model="nombre"/>
            </x-label>
            <x-label value="Precio" required>
                <x-input type="number" min="1" name="costo" required wire:model="costo"/>
            </x-label>
        </div>
    </form>
    <x-slot name="btnAction">
        <x-button-action type="action" wire:click="update" wire:loading.attr="disabled">
            <div class="flex gap-2 items-center">
                {{-- cuando se ejecuta la función mostramos/ocultamos ciertos elementos --}}
                <div class="flex items-center justify-center" wire:target="update" wire:loading>
                    <x-icons.spinner class="size-4 fill-red-400 text-white/80 animate-spin"/>
                </div>
                <span class="block" wire:target="update" wire:loading>Actualizando</span>
                <span class="block" wire:target="update" wire:loading.remove>Actualizar</span>
            </div>
        </x-button-action>
    </x-slot>
</x-modal-center>
