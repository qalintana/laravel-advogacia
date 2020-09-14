<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
  //
  protected $fillable = ['nome'];

  public function processes()
  {
    return $this->belongsTo(Process::class);
  }
}
