<?php

namespace App\Livewire\Presupuestos;

use App\Models\Remision;
use Livewire\Attributes\Computed;
use Livewire\Component;

class PresupuestosTableComponent extends Component
{
    public $search="",$perPage=10;

    #[Computed()]
    public function presupuestos(){
        return Remision::search($this->search)->orderBy('id','DESC')->paginate($this->perPage);
    }
    public function render()
    {
        return view('livewire.presupuestos.presupuestos-table-component');
    }
}
