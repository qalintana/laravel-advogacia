<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avence extends Model
{
  //
  protected $fillable = [
    'valor_mensal',
    'iva',
    'retencao',
    'parcelas',
    'obs',
    'client_id'
  ];
}
