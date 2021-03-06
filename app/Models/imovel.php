<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Imovel extends Model
{
  protected $table = 'imovels';

  protected $fillable = ['tipo_de_imovel', 'negocio', 'bairro', 'cidade', 'valor', 'area', 'descricao', 'user_id'];

  public function fotos()
  {
    return $this->hasMany('App\Models\Foto');
  }

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function caracteristicas()
  {
    return $this->belongsToMany('App\Models\Caracteristica', 'imovel_caracteristica')->withPivot('numero');
  }

}