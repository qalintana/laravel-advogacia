<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAvence extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'valor_mensal' => 'required',
      'iva' => 'required',
      'retencao' => 'required',
      'parcelas' => 'required',
      'obs' => 'required',
      'client_id' => 'required'
    ];
  }
}
