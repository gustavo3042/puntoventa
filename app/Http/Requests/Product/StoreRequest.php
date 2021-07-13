<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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

          'name' => 'required|unique:products|max:255',
          'image' => 'required|dimensions:min_width=100,min_height=200',
          'price' => '',
          'category_id' => 'integer'



        ];
    }


    public function messages(){


      return[

  'name.required'=>'Este campo es requerido',
  'name.string'=>'El valor no es correcto',
  'name.max'=>'Solo se permite 50 caracteres',

  'description.required'=>'Este campo es requerido',
  'description.string'=>'El valor no es correcto',
  'description.max'=>'Solo se permite 255 caracteres',

      ];
    }

}
