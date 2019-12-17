<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table ='estados';
    protected $fillable = ['est_cod','est_desc'];
    protected $primaryKey = 'est_cod';
}
