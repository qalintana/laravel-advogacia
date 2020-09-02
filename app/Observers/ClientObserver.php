<?php

namespace App\Observers;

use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientObserver
{
  /**
   * Handle the client "created" event.
   *
   * @param  \App\Client  $client
   * @return void
   */
  public function creating(Client $client)
  {
    $client->user_id = auth()->id();
  }

  /**
   * Handle the client "updated" event.
   *
   * @param  \App\Client  $client
   * @return void
   */
  public function updating(Client $client)
  {
    $client->user_id = auth()->id();
  }
}
