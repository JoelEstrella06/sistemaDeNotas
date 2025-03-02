@props(['name'])
<textarea name="{{$name}}" {{$attributes->merge(['class'=>'border border-gray-400 px-2 py-1 rounded-lg'])}}></textarea>
<x-error for="{{$name}}"/>