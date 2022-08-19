<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class PreviousEducationStudentInformationlRequest extends FormRequest
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
            'asal_sekolah'          => 'required|string|max:255',                 
            'tanggal_skhun'         => 'required','date',                 
            'no_skhun'              => 'required|string|max:50',                 
            'tanggal_ijazah'        => 'required','date',                 
            'no_ijazah'             => 'required|string|max:50',                 
            'pindahan_dari_sekolah' => 'required|string|max:255',                 
            'diterima_dikelas'      => 'required|string|max:50',                 
            'kelompok'              => 'required|string|max:50',                 
            'tangal_penerimaan'     => 'required','date',                 
            
        ];
    }
}
