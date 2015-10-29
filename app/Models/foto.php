<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
   protected $table = 'fotos';

   protected $fillable = ['ruta', 'nome', 'descricao'];

    public function imovel()
    {
        return $this->belongsTo('imovel');
    }
}
