@props(['label'])
<td {{$attributes->merge(['class'=>'block md:table-cell'])}}>
    @if (isset($label))
        <div class="flex flex-wrap gap-1 items-center md:justify-center text-balance">
            <h3 class="font-semibold block md:hidden">
                {{$label}}
            </h3>
            {{$slot}}
        </div>
    @else
        {{$slot}}
    @endif
</td>