<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ResidenceStudentInformationlRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            $validator->errors(), 400
        ));
    }

    public function rules()
    {
        return [
            'student_id'            => 'required',
            'alamat'                => 'required|string|max:255',                 
            'no_hp'                 => 'required|string|max:20',                 
            'tinggal_dengan'        => 'required|string|max:50',                 
            'jarak_kesekolah'       => 'required|string|max:50',                 
            
        ];
    }
}
