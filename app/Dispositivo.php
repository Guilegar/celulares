<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    protected $table ='dispositivos';
    protected $fillable = ['dis_cod','imei','imei2','color','prod_cod'];
    protected $primaryKey = 'dis_cod';
}
