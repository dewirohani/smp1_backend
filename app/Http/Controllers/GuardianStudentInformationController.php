<?php

namespace App\Http\Controllers;

use App\Models\GuardianStudentInformation;
use App\Http\Requests\GuardianStudentInformationRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class GuardianStudentInformationController extends Controller
{
    public function index()
    {
        $guardianStudentInformation = GuardianStudentInformation::all();
        return response()->json([
            "success" => true,
            "guardianStudentInformations" => $healthStudentInformation
        ]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(GuardianStudentInformationRequest $request)
    {
        $data   = $request->validated();
        $guardianStudentInformation = GuardianStudentInformation::create($data);

        if($guardianStudentInformation){
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

    
    public function show(GuardianStudentInformation $guardianStudentInformation)
    {
        //
    }

    
    public function edit(GuardianStudentInformation $guardianStudentInformation)
    {
        return response()->json([
            "success" => true,
            "guardianStudentInformation" => $guardianStudentInformation
        ],200);
    }

    
    public function update(Request $request, GuardianStudentInformation $guardianStudentInformation)
    {
        $data   = $request->all();
        $guardianStudentInformation->update(
           
            [
                'student_id' => $data['student_id'], 
                'nama' => $data['nama'], 
                'tempat_lahir' => $data['tempat_lahir'], 
                'tanggal_lahir' => $data['tanggal_lahir'], 
                'agama' => $data['agama'], 
                'kewarganegaraan' => $data['kewarganegaraan'],                 
                'hubungan_keluarga' => $data['hubungan_keluarga'],                 
                'ijazah_tertinggi' => $data['ijazah_tertinggi'],                 
                'pekerjaan' => $data['pekerjaan'],                 
                'penghasilan_perbulan' => $data['penghasilan_perbulan'],                 
                'alamat_rumah' => $data['alamat_rumah'],                 
                'no_hp' => $data['no_hp'],                 
            ]
        );

        if($guardianStudentInformation){
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

    
    public function destroy(GuardianStudentInformation $guardianStudentInformation)
    {
        $guardianStudentInformation->delete();

        if($guardianStudentInformation){
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
