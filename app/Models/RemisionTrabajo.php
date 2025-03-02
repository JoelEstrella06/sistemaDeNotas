<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class RemisionTrabajo extends Model
{
    use SoftDeletes;

    public function trabajo():BelongsTo
    {
        return $this->belongsTo(Trabajo::class);
    }
}
