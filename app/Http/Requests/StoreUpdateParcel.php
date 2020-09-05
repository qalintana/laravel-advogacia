<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateParcel extends FormRequest
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
      'parcela' => 'required',
      'avence_id' => 'required',
      'valor' => 'required',
      'desconto' => 'required',
      'data_vencimento' => 'required',
      'data_pagamento' => 'required'
    ];
  }
}
