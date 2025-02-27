@props(['type'=>'cancel'])
@php
    $clases='';
    switch ($type) {
        case 'action':
            $clases='bg-red-600 text-red-50 border-red-600 hover:bg-red-700';
            break;
            case 'success':
            $clases='bg-green-700 text-green-50 border-green-700 hover:bg-green-700';
            break;
        
        default:
            $clases='text-gray-700 border-gray-300 hover:bg-gray-50';
            break;
    }
@endphp
<button {{$attributes->merge(['class'=>'uppercase text-sm font-semibold border rounded-lg px-4 py-1 transition duration-300 '.$clases])}}>
    {{$slot}}
</button>