<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = 'caracteristicas';

    protected $fillable = ['nome', 'numero'];

    public function imovels() {
    	return $this->belongsToMany('App\Models\Imovel', 'imovel_caracteristica')->withPivot('numero');
    }
}
