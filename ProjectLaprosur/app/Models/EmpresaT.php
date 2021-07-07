<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaT extends Model
{
    use HasFactory;
    protected $table= 'carriers';
    protected $fillable=['businessName','Ruc'];
}
