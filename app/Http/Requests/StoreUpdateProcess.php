<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProcess extends FormRequest
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
      'data_abertura' => 'required',
      'valor' => 'required',
      'valor_alcancado' => 'required',
      'contraparte' => 'required',
      'data_conclusao' => 'required',
      'retencao' => 'required',
      'desconto' => 'required',
      'successfree' => 'required',
      'client_id' => 'required',
      'escritory_id' => 'required',
      'type_id' => 'required'
    ];
  }
}
