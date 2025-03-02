@props(['type'=>'success'])
@php
    $clases='';
    switch ($type) {
        case 'success':
        $clases='text-green-700 focus:ring-green-700';
            break;
    }
@endphp
<input type="checkbox" {{$attributes->merge(['class'=>'w-4 h-4  bg-gray-100 border-gray-300 rounded focus:ring-2 '.$clases])}}>