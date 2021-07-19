<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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



          'name' => 'string|required|max:255',
          'dni' => 'string|required|unique:clients,dni|max:8'.$this->route('client')->id.'|min:8',
          'rut' => 'string|required|unique:clients,rut|max:11'.$this->route('client')->id.'|min:11',
          'address' =>'string|required|max:255',
          'phone' => 'string|required|unique:clients,phone|max:9'.$this->route('client')->id.'|min:9',
          'email' => 'string|required|unique:clients,email|email:rfc,dns'.$this->route('client')->id.'|max:255',
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


      'address.string' => 'El valor es correcto',
      'address.max' => 'Solo se permiten 255 carateres',

      'phone.string' => 'El valor no es correcto',
      'phone.unique' => 'El telefono ya esta registrado',
      'phone.max' => 'Solo se requieren 9 caracteres',
      'phone.min' => 'Se requieren de 9 caracteres',




            'email.string' => 'El valor no es correcto',
            'email.unique' => 'La direccion de correo electronico ya existe',
            'email.max' => 'Solo se permiten 255 caracteres',
            'email.email' => 'No es un correo electronico',





            ];
    }



}
