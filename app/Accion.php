<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    protected $table ='accion';
    protected $fillable = ['acc_cod','acc_nom'];
    protected $primaryKey = 'acc_cod';
}
