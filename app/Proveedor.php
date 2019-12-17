<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
   protected $table ='proveedores';
   protected $fillable = ['prov_id','prov_nom','prov_dir','prov_tel'];
   protected $primaryKey = 'prov_cod';
}
