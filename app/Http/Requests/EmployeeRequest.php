<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class EmployeeRequest extends FormRequest
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
            'nip'                   => 'required|string|max:50',                             
            'nama'                  => 'required|string|max:50',                             
            'jenis_kelamin'         => 'required|string|max:15',                 
            'tempat_lahir'          => 'required|string|max:50',                 
            'tanggal_lahir'         => 'required','date',                 
            'nik'                   => 'required|string|max:50',                 
            'nuptk'                 => 'required|string|max:50',                 
            'npwp'                  => 'required|string|max:50',                    
            'email'                 => 'required|string|max:50',                    
            'pendidikan_terakhir'   => 'required|string|max:50',                    
            'jurusan'               => 'required|string|max:100',                    
            'tugas_pegawai'         => 'required|string|max:50',                    
            'tmt_tugas'             => 'required','date',                     
            'tmt_pangkat'           => 'required','date',                     
            'tmt_pns'               => 'required','date',                     
        ];
    }
}
