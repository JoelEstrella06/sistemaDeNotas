@props(['button_close'=>true,'tittle'=>'','dropdown'=>false,'required_inputs'=>false,'sub_tittle'])
<div x-data="{ modelOpen: false }">
    <button @click="modelOpen =!modelOpen" 
        @class([
            'px-4 py-2 transition duration-300',
            'text-sm text-gray-500 w-full hover:bg-gray-100 hover:text-purple-700 font-medium'=>$dropdown,
            'bg-green-700 text-green-50 font-semibold rounded-lg hover:bg-green-600'=>!$dropdown
            ])
        >
        {{$btn_open}}
    </button>

    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex justify-center min-h-screen px-4 text-center items-center sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
            ></div>

            <div x-cloak x-show="modelOpen" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-5xl p-8 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
            >
                <div class="flex items-center justify-between space-x-4">
                    <h1 class="text-xl font-medium text-gray-800 ">{{$tittle}}</h1>
                    @if ($button_close)    
                        <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                            <x-icons.close-circle class="size-6"/>
                        </button>
                    @endif
                </div>

                @isset($sub_tittle)    
                <p class="mt-2 text-sm text-gray-500 ">
                   {{$sub_tittle}}
                </p>
                @endisset

                <div class="mt-5">
                    {{$slot}}
                    @if ($required_inputs)
                        <p class="text-gray-500 text-sm mt-3">Campos obligatorios (<strong class="text-prt-red-letter">*</strong>) </p>
                    @endif           
                    <div class="flex justify-end gap-3 mt-6">
                        @if (!$button_close)
                        <x-button-action @click="modelOpen=false">
                            <span class="block">Cancelar</span>
                        </x-button-action>
                        {{$btnAction}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>