<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
   protected $table ='movimientos';
   protected $fillable = ['dis_cod','fecha','acc_cod','local_cod','ase_cod','obs_mov'];
   protected $primaryKey = 'movi_cod';
}
