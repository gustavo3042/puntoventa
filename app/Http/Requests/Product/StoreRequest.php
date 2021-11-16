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

          'name' => 'required|max:255',
          'codigoColor' =>'required|',
          'stock' =>'required|',
          'totalObillos' =>'required|',
          'price' => 'required|'




        ];
    }


    public function messages(){


      return[

  'name.string'=>'El valor no es correcto',
  'name.required'=>'El campo es requerido',
  //'name.unique'=>'El producto ya esta registrado',
  'name.max' => 'Solo se permiten 255 caracteres',



'codigoColor' =>'El codigo es requerido',

'stock'=>'El stock es requerido',
'totalObillos'=>'La cantidad de obillos es requerida',


  'price.required'=>'El campo es requerido',







      ];
    }

}
