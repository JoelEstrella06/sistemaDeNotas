<div>
    <div class="flex flex-wrap gap-3 text-xs items-stretch mb-3">
        <x-label for="seach">
            <x-input id="seach" name="seach" placeholder="Buscar.." class="text-sm" wire:model.live="search"/>
        </x-label>
        <x-label for="paginate">
            <x-select id="paginate" name="paginate" class="text-sm" wire:model.live="perPage">
                <option value="10">{{__('10')}}</option>
                <option value="20">{{__('20')}}</option>
                <option value="50">{{__('50')}}</option>
            </x-select>
        </x-label>
    </div>
    {{$search}}
    <x-table.table>
        <x-slot name="head">
            <tr>
                <th>Puesto</th>
                <th>Costo</th>
                <th></th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @forelse ($this->trabajos as $trabajo)
                <x-table.table-body-row wire:key="arc_{{$trabajo->id}}" wire:loading.remove>
                    <x-table.table-body-cell label="Trabajo"><span>{{$trabajo->title}}</span></x-table.table-body-cell>
                    <x-table.table-body-cell label="Costo"><span>${{number_format($trabajo->precio,2)}}</span></x-table.table-body-cell>
                    <x-table.table-body-cell>
                        <x-menu-options >
                            <livewire:trabajos.edit-trabajo-component :id="$trabajo->id" :key="'edit_'.$trabajo->id"/>
                        </x-menu-options>
                    </x-table.table-body-cell>
                </x-table.table-body-row>
            @empty
                <tr wire:loading.remove>
                    <td colspan="4">No se encontraron archivos relacionados</td>
                </tr>
            @endforelse
            <tr class="animate-pulse" wire:loading>
                <td colspan="4"> 
                    <div class="flex gap-1 items-center justify-center">
                        <x-icons.spinner class="size-4 fill-amber-600 text-white/80 animate-spin"/>
                        <span class="block font-semibold">Cargando...</span>
                    </div>
                </td>
            </tr>
        </x-slot>
    </x-table.table>
    {{$this->trabajos->links()}}
</div>
