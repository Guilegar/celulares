<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
   protected $table ='productos';
   protected $fillable = ['prod_nom','prod_desc','prod_valor','stock','prov_cod'];
   protected $primaryKey = 'prod_cod';
}
