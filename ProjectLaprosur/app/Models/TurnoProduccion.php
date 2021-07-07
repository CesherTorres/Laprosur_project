<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnoProduccion extends Model
{
    use HasFactory;
    protected $table= 'production_shifs';
    protected $fillable=['nameShift','startTime','endTime'];

    public function produccionCrudo()
    {
        return $this->belongsTo('App\Models\ProduccionCrudo');
    }
}
