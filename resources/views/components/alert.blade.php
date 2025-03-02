@php
    $message="prueba de mensaje";
    $clases="";
    if (session('success')) {
        $message=session('success');
        $clases="text-green-800 bg-green-200 z-50";
    }
    if (session('error')) {
        $message=session('error');
        $clases="text-red-800 bg-red-200 z-50";
    }
@endphp
@session('success')    
  <div class="flex items-center p-2 sm:p-3 text-sm w-full fixed top-0 {{$clases}}":class="close ?'hidden':''" x-data="{close:false}">
    <div class="flex items-center gap-2 max-w-7xl m-auto">
      <x-icons.info class="size-6"/>
      <div>
        <p class="font-medium">{{$message}}</p>
      </div>
    </div>
      <button class="p-2 flex justify-center items-center" @click="close=!close">
        <x-icons.close class="size-6"/>
      </button>
  </div>
@endsession
@session('error')    
  <div class="flex items-center p-2 sm:p-3 text-sm w-full fixed top-0 {{$clases}}":class="close ?'hidden':''" x-data="{close:false}">
    <div class="flex items-center gap-2 max-w-7xl m-auto">
      <x-icons.info class="size-6"/>
      <div>
        <p class="font-medium">{{$message}}</p>
      </div>
    </div>
      <button class="p-2 flex justify-center items-center" @click="close=!close">
        <x-icons.close class="size-6"/>
      </button>
  </div>
@endsession