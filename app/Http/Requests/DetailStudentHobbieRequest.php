<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class DetailStudentHobbieRequest extends FormRequest
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
            'student_hobbie_id'     => 'required',
            'nama'                  => 'required|string|max:50',                 
            
            
        ];
    }
}
