<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
   protected $table ='asesores';
   protected $fillable = ['ase_cod','ase_id','ase_nom','ase_dir','ase_tel','est_cod'];
   protected $primaryKey = 'ase_cod';
}
