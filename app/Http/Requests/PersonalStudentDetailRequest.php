<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class PersonalStudentDetailRequest extends FormRequest
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
            'nama_lengkap'          => 'required|string|max:50',                 
            'nama_panggilan'        => 'required|string|max:50',                 
            'jenis_kelamin'         => 'required|string|max:15',                 
            'tempat_lahir'          => 'required|string|max:50',                 
            'tanggal_lahir'         => 'required','date',                 
            'agama'                 => 'required|string|max:20',                 
            'kewarganegaraan'       => 'required|string|max:50',                 
            'anak_ke'               => 'required|string|max:2',                    
            'jumlah_saudara_kandung'=> 'required|string|max:2',                    
            'jumlah_saudara_tiri'   => 'required|string|max:2',                    
            'jumlah_saudara_angkat' => 'required|string|max:2',                    
            'status_yatim'          => 'required|string|max:50',                    
            'bahasa_keseharian'     => 'required|string|max:50',                    
        ];
    }
}
