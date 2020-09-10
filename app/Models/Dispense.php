<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dispense extends Model
{
  //
  protected $fillable = [
    'valor', 'data',
    'process_id', 'font_id'
  ];
}
