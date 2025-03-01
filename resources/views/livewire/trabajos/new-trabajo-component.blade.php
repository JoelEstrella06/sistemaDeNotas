<x-modal-center :button_close=false tittle="Nuevo trabajo" required_inputs>
    <x-slot name="btn_open">
        <span class="block">Nuevo trabajo</span>
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
        <x-button-action type="action" wire:click="save" wire:loading.attr="disabled">
            <div class="flex gap-2 items-center">
                {{-- cuando se ejecuta la función mostramos/ocultamos ciertos elementos --}}
                <div class="flex items-center justify-center" wire:target="save" wire:loading>
                    <x-icons.spinner class="size-4 fill-prt-red-letter text-white/80 animate-spin"/>
                </div>
                <span class="block" wire:target="save" wire:loading>Subiendo</span>
                <span class="block" wire:target="save" wire:loading.remove>Guardar</span>
            </div>
        </x-button-action>
    </x-slot>
</x-modal-center>
