<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
   protected $table ='locales';
   protected $fillable = ['local_nom','local_dir','local_tel'];
   protected $primaryKey = 'local_cod';
}
