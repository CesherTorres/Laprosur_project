<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmacenCrudo extends Model
{
    use HasFactory;
    protected $table= 'raw_warehouses';
    protected $fillable=['name','location'];
}
