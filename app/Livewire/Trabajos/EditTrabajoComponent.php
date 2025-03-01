<?php

namespace App\Livewire\Trabajos;

use App\Models\Trabajo;
use Exception;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditTrabajoComponent extends Component
{
    public $id;
    #[Validate('required', message:'Ingrese un nombre para el trabajo.')]
    #[Validate('max:100',message:'El nombre del tabajo no puede ser mayor a 100 caracteres.')]
    public $nombre;
    #[Validate('required',message:'Ingrese el precio.')]
    #[Validate('gt:0',message:'El precio debe ser mayor a cero.')]
    public $costo;
    public function trabajoData(){
        $trabajo = Trabajo::find($this->id);
        $this->nombre = $trabajo->title;
        $this->costo = $trabajo->precio;
    }
    public function render()
    {
        return view('livewire.trabajos.edit-trabajo-component');
    }
    public function update(){
        $this->validate();
        try {
            $trabajo = Trabajo::find($this->id);
            $trabajo->title=$this->nombre;
            $trabajo->precio=$this->costo;
            $trabajo->save();
            session()->flash('success','Nuevo trabajo rejistrado.');
            return redirect(request()->header('referer'));
        } catch (Exception $e) {
            session()->flash('error','Ocurrió un error al actualizar:' . $e->getMessage());
            return redirect(request()->header('referer'));
        }
    }
}
