<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
  //
  protected $fillable = ['parcela', 'valor', 'desconto', 'data_vencimento', 'data_pagamento', 'avence_id'];
}
