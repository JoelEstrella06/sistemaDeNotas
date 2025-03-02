<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Remision extends Model
{
    use SoftDeletes;

    public function scopeSearch(Builder $query,string $search){
        return $query->where('num_unidad','like','%'.$search.'%')
                    ->orWhere('comentario','like','%'.$search.'%');
    }

    public function remision_trabajos():HasMany
    {
        return $this->hasMany(RemisionTrabajo::class);
    }
}
