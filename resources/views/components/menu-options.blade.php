<div class="relative" x-data="{open:false}" @click.outside="open=false">
    <div @click="open=!open">
        <button class="text-gray-400 rounded-full hover:text-blue-500 hover:bg-blue-200/50 p-2 transition-colors duration-300">
            <x-icons.dots-horizontal class="size-6"/>
        </button>
    </div>
    <div x-cloak x-show="open" x-collapse class="absolute w-max rounded-md right-0 bg-white dark:bg-dark-eval-3 shadow dark:shadow-slate-300 z-20">
        {{$slot}}
    </div>
</div>