<?php

namespace App\Http\Requests\Provider;

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

'name' => 'required|string|max:50',
'email'=> 'required|email|string|max:50|unique:providers',
'rut'=> 'required|string|max:11|min:11|unique:providers',
'address'=> 'nullable|string|max:255',
'phone'=> 'required|string|max:9|min:9|unique:providers',

        ];
    }

    public function menssages(){


      return[

        'name.required'=>'Este campo es requerido',
        'name.string'=>'El valor no es correcto',
        'name.max'=>'Solo se permite 255 caracteres',

        'email.required'=>'Este campo es requerido',
        'email.email'=>'No es un correo electronico',
        'email.string'=>'El valor no es correcto',
        'email.max'=>'Solo se permite 255 caracteres',
        'email.unique'=>'Ya se encuentra registrado',

        'rut.required'=>'Este campo es requerido',
        'rut.string'=>'El valor no es correcto',
        'email.max'=>'Solo se permite 11 caracteres',
        'email.min'=>'Se requieren 11 caracteres',
        'email.unique'=>'Ya se encuentra registrado',

          'address.max'=>'Solo se permite 255 caracteres',
          'address.string'=>'El valor no es correcto',

  'phone.required'=>'Este campo es requerido',
  'phone.string'=>'El valor no es correcto',
    'phone.max'=>'solo se permiten 9 caracteres',
      'phone.min'=>'Solo se permiten 9 caracteres',
        'phone.unique'=>'Ya se encuentra registrado',


      ];
    }
}
