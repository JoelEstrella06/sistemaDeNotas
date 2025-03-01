<?php

namespace App\Livewire\Trabajos;

use App\Models\Trabajo;
use Livewire\Attributes\Computed;
use Livewire\Component;

class TrabajosTableComponent extends Component
{
    public $search="",$perPage=10;
    #[Computed()]
    public function trabajos(){
        return Trabajo::where([['title','LIKE',"%$this->search%"]])->paginate($this->perPage);
    }
    public function render()
    {
        return view('livewire.trabajos.trabajos-table-component');
    }
}
