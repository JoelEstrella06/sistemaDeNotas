<div>
    <form action="" x-data="remision" wire:submit="save">
        <div class="flex flex-col gap-3 flex-wrap">
            <x-label value="Unidad" required>
                <x-input name="unidad" minlength="1" maxlength="100" required wire:model="unidad"/>
            </x-label>
            <x-label value="Comentario">
                <x-text-area name="comentario" class="w-full resize-none"/>
            </x-label>
        </div>
        <div class="my-3">
            <h2 class="border-b mb-3 pb-2 font-medium text-lg">Trabajos</h2>
            <x-input name="search" role="search" placeholder="Buscar..." x-model="search" @keyup="filter()"/>
            <div class="flex flex-wrap gap-3 justify-evenly py-2 mt-2 max-h-96 overflow-y-auto">
                <template x-for="job in tbList" :key="job.id">
                     <label class="has-[:checked]:text-green-700 cursor-pointer px-2 py-1 hover:bg-gray-200 rounded-md">
                        <x-input-checkbox name="jobs[]" x-bind:id="job.id" x-bind:value="job.id" x-model="selected" wire:model="list"/>
                        <span x-text="job.title"></span>
                     </label>
                </template>
            </div>
            <x-error for="list"/>
        </div>
        <x-button-action type="success" wire:loading.attr="disabled">
            <div class="flex gap-2 items-center">
                {{-- cuando se ejecuta la función mostramos/ocultamos ciertos elementos --}}
                <div class="flex items-center justify-center" wire:target="save" wire:loading>
                    <x-icons.spinner class="size-4 fill-prt-red-letter text-white/80 animate-spin"/>
                </div>
                <span class="block" wire:target="save" wire:loading>Subiendo</span>
                <span class="block" wire:target="save" wire:loading.remove>Guardar</span>
            </div>
        </x-button-action>
    </form>
</div>
@script
    <script>
        Alpine.data('remision', () => ({
            trabajos:@js($trabajos),tbList:[],search:'',selected:[],
            init(){
                this.tbList=this.trabajos.filter((job)=>job.title.toLowerCase().includes(this.search.toLowerCase()));
            },
            filter(){
                this.tbList=this.trabajos.filter((job)=>job.title.toLowerCase().includes(this.search.toLowerCase()));
            }
        }))
    </script>
@endscript
