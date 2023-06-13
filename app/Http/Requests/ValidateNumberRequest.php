<?php

namespace App\Http\Requests;

use Pearl\RequestValidate\RequestAbstract;

class ValidateNumberRequest extends RequestAbstract
{
   /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
   public function authorize() : bool
   {
       return true;
   }

   /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
   public function rules() : array
   {
        return [
            'number' => 'required|numeric|integer|min:0'
        ];
   }

   /**
    * Get custom messages for validator errors.
    *
    * @return array
    */
    public function messages() : array
    {
        return [
            'number.required'   =>  'Debes ingresar un número',
            'number.numeric'    =>  'Debes ingresar un número',
            'number.integer'    =>  'El número debe ser entero',
            'number.min'        =>  'El número debe ser positivo'
        ];
    }
}