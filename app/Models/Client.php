<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  //

  protected $fillable = [
    "nome",
    "apelido",
    "nif",
    "email",
    "morada",
    "postal",
    "concelho",
    "fraguesia",
    "contacto1",
    "contacto2"
  ];

  public function processes()
  {
    return $this->hasMany(Process::class);
  }
}
