<?php

namespace App\Http\Controllers;

use App\Models\PersonalStudentDetail;
use App\Http\Requests\PersonalStudentDetailRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class PersonalStudentDetailController extends Controller
{
    
    public function index()
    {
        $personalStudentDetail = PersonalStudentDetail::all();
        return response()->json([
            "success" => true,
            "personalStudentDetails" => $personalStudentDetail
        ]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(PersonalStudentDetailRequest $request)
    {
        $data   = $request->validated();
        $personalStudentDetail = PersonalStudentDetail::create($data);

        if($personalStudentDetail){
            return response()->json([
                "success" => true,
                "message" => "Data Berhasil Ditambah"
            ],200);
        }

        return response()->json([
                "success" => false,
                "message" => "Data Gagal Ditambah",
        ],409);
    }

    
    public function show(PersonalStudentDetail $personalStudentDetail)
    {
        //
    }

    
    public function edit(PersonalStudentDetail $personalStudentDetail)
    {
        return response()->json([
            "success" => true,
            "personalStudentDetail" => $personalStudentDetail
        ],200);
    }

    
    public function update(Request $request, PersonalStudentDetail $personalStudentDetail)
    {
        $data   = $request->all();
        $personalStudentDetail->update(
           
            [
                'student_id' => $data['student_id'], 
                'nama_lengkap' => $data['nama_lengkap'], 
                'nama_panggilan' => $data['nama_panggilan'], 
                'jenis_kelamin' => $data['jenis_kelamin'], 
                'tempat_lahir' => $data['tempat_lahir'], 
                'tanggal_lahir' => $data['tanggal_lahir'], 
                'agama' => $data['agama'], 
                'kewarganegaraan' => $data['kewarganegaraan'], 
                'anak_ke' => $data['anak_ke'], 
                'jumlah_saudara_kandung' => $data['jumlah_saudara_kandung'], 
                'jumlah_saudara_tiri' => $data['jumlah_saudara_tiri'], 
                'jumlah_saudara_angkat' => $data['jumlah_saudara_angkat'], 
                'status_yatim' => $data['status_yatim'], 
                'bahasa_keseharian' => $data['bahasa_keseharian'], 
            ]
        );

        if($personalStudentDetail){
            return response()->json([
                "success" => true,
                "message" => "Data Berhasil Diupdate"
            ],200);
        }

        return response()->json([
                "success" => false,
                "message" => "Data Gagal Diupdate",
        ],409);
    }

    
    public function destroy(PersonalStudentDetail $personalStudentDetail)
    {
        $personalStudentDetail->delete();

        if($personalStudentDetail){
            return response()->json([
                "success" => true,
                "message" => "Data Berhasil Dihapus"
            ],200);
        }

        return response()->json([
                "success" => false,
                "message" => "Data Gagal Dihapus"
        ], 400);
    }
}
