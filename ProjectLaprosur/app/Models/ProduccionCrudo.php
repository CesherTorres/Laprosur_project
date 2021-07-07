<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProduccionCrudo extends Model
{
    use HasFactory;
    protected $table= 'crude_productions';
    protected $fillable=['machineCuts','stopTime','horometro','amountOfPeoples','productionQuantity','date','id_productionShift'];

    public function turnos()
    {
        return $this->belongsTo('App\Models\TurnoProduccion');
    }
}
