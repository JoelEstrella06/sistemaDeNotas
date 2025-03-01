@props(['href','type'=>'success'])
@php
    $clases='';
    switch ($type) {
        case 'success':
        $clases='bg-green-700 text-green-50 hover:bg-green-600 ';
            break;
    }
@endphp
<a href="{{$href}}" class="px-4 py-2 transition duration-300  font-semibold rounded-lg {{$clases}}">
    {{$slot}}
</a>