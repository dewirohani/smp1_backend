<?php

namespace App\Http\Controllers;

use App\Models\HealthStudentInformation;
use App\Http\Requests\HealthStudentInformationRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class HealthStudentInformationController extends Controller
{
    
    public function index()
    {
        $healthStudentInformation = HealthStudentInformation::all();
        return response()->json([
            "success" => true,
            "healthStudentInformations" => $healthStudentInformation
        ]);
    }

  
    public function create()
    {
        //
    }

 
    public function store(HealthStudentInformationRequest $request)
    {
        $data   = $request->validated();
        $healthStudentInformation = HealthStudentInformation::create($data);

        if($healthStudentInformation){
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

   
    public function show(HealthStudentInformation $healthStudentInformation)
    {
        //
    }

    
    public function edit(HealthStudentInformation $healthStudentInformation)
    {
        return response()->json([
            "success" => true,
            "healthStudentInformation" => $healthStudentInformation
        ],200);
    }

 
    public function update(Request $request, HealthStudentInformation $healthStudentInformation)
    {
        $data   = $request->all();
        $healthStudentInformation->update(
           
            [
                'student_id' => $data['student_id'], 
                'gol_darah' => $data['gol_darah'], 
                'riwayat_penyakit' => $data['riwayat_penyakit'], 
                'kelainan_jasmani' => $data['kelainan_jasmani'], 
                'tinggi_badan' => $data['tinggi_badan'], 
                'berat_badan' => $data['berat_badan'],                 
            ]
        );

        if($healthStudentInformation){
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

  
    public function destroy(HealthStudentInformation $healthStudentInformation)
    {
        $healthStudentInformation->delete();

        if($healthStudentInformation){
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
