<?php

namespace App\Http\Requests\Client;

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

'name' => 'required|string|max:60',
'dni' => 'required',
'rut' => 'required|string|max:11',
'address' =>'required',
'phone' => 'required|string|max:9',
'email' => 'required',


        ];
    }

    public function messages(){



            return[

        'name.required'=>'Este campo es requerido',
        'name.string'=>'El valor no es correcto',
        'name.max' => 'Solo se permiten 255 caracteres',

        'dni.string'=>'El campo es requerido',
        'dni.required'=>'El campo es requerido',
        'dni.unique'=>'Este DNI ya se encuentra registrado',
        'dni.min'=>'Se requiere de 8 caracteres',
        'dni.max'=>'Solo se permiten 8 caracteres',





        'rut.string'=>'El valor no es correcto',


        'rut.unique'=>'Este Rut ya esta registrado',
        'rut.max' =>'Solo se permiten 11 caracteres',
        'rut.min' =>'Se requieren 11 caracteres',


      'address.string' => 'Valor incorrecto',
      'address.max' => 'Solo se permiten 255 carateres',

      'phone.string' => 'El valor no es correcto',
      'phone.unique' => 'El telefono ya esta registrado',
      'phone.max' => 'Solo se requieren 9 caracteres',
      'phone.min' => 'Se requieren de 9 caracteres',




            'email.string' => 'Valor incorrecto',
            'email.unique' => 'La direccion de correo electronico ya existe',
            'email.max' => 'Solo se permiten 255 caracteres',
            'email.email' => 'No es un correo electronico',





            ];
    }
}
