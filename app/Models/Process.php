<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
  protected $fillable = [
    'data_abertura',
    'valor',
    'valor_alcancado',
    'contraparte',
    'data_conclusao',
    'retencao',
    'desconto',
    'successfree',
    'client_id',
    'escritory_id',
    'type_id'
  ];
}
