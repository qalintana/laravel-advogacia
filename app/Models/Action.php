<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
  //
  protected $fillable = [

    'ato',
    'process_id',
    'data',
    'valor',
    'valorfinal',
    'tempo',
    'process_id'
  ];
}
