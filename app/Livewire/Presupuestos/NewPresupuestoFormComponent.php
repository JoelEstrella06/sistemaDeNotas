<?php

namespace App\Livewire\Presupuestos;

use App\Models\Remision;
use App\Models\RemisionTrabajo;
use App\Models\Trabajo;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;

class NewPresupuestoFormComponent extends Component
{
    public $trabajos,$coment;
    #[Validate('required',message:'Ingrese el número de unidad.')]
    public $unidad;
    #[Validate('required',message:'Selecione los trabajos a añadir.')]
    #[Validate('min:1',message:'Debe seleccionar al menos un trabajo de la lista')]
    public $list=[];

    public function mount(){
        $this->trabajos=Trabajo::select('id','title')->get();
    }
    public function save(){
        $this->validate();
        try {
            $trabajos=Trabajo::whereIn('id',$this->list)->get();
            //$tot= $trabajos->sum('precio');
            $nota=new Remision();
            $nota->num_unidad=$this->unidad;
            $nota->comentario=$this->coment;
            //$nota->total=$tot;
            $nota->save();
    
            foreach($trabajos as $job) {
                $relacion=new RemisionTrabajo();
                $relacion->remision_id=$nota->id;
                $relacion->trabajo_id=$job->id;
                $relacion->precio=$job->precio;
                $relacion->save();
            }
            $pdf=Pdf::loadView('pdfs.remision',['nota'=>$nota,'total'=>$trabajos->sum('precio')])->output();
            Storage::disk('public')->put('presupuestos/Presupuesto_'.$nota->id.'.pdf',$pdf);
            $nota->pdf='presupuestos/Presupuesto_'.$nota->id.'.pdf';
            $nota->save();
            session()->flash('success','Presupuesto guardado correctamente. ID: '.$nota->id);
            return redirect()->route('remision');
        } catch (Exception $e) {
            session()->flash('error','Ocurrió un error al guardar el registro:' . $e->getMessage());
            return redirect(request()->header('referer'));
        }

    }
    public function render()
    {
        return view('livewire.presupuestos.new-presupuesto-form-component');
    }
}
