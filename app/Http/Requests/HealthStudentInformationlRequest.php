<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class HealthStudentInformationlRequest extends FormRequest
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
            'gol_darah'             => 'required|string|max:50',                 
            'riwayat_penyakit'      => 'required|string|max:255',                 
            'kelainan_penyakit'     => 'required|string|max:255',                 
            'tinggi_badan'          => 'required|string|max:50',                 
            'berat_badan'           => 'required|string|max:50',                 
        ];
    }
}
