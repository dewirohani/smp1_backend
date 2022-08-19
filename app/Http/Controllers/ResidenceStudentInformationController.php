<?php

namespace App\Http\Controllers;

use App\Models\ResidenceStudentInformation;
use App\Http\Requests\ResidenceStudentInformationRequest;
use Illuminate\Http\Request;

class ResidenceStudentInformationController extends Controller
{
   
    public function index()
    {
        $residenceStudentInformation = ResidenceStudentInformation::all();
        return response()->json([
            "success" => true,
            "residenceStudentInformations" => $residenceStudentInformation
        ]);
    }

  
    public function create()
    {
        //
    }

   
    public function store(ResidenceStudentInformationRequest $request)
    {
        $data   = $request->validated();
        $residenceStudentInformation = ResidenceStudentInformation::create($data);

        if($residenceStudentInformation){
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

    
    public function show(ResidenceStudentInformation $residenceStudentInformation)
    {
        //
    }

  
    public function edit(ResidenceStudentInformation $residenceStudentInformation)
    {
        return response()->json([
            "success" => true,
            "residenceStudentInformation" => $residenceStudentInformation
        ],200);
    }

   
    public function update(Request $request, ResidenceStudentInformation $residenceStudentInformation)
    {
        $data   = $request->all();
        $residenceStudentInformation->update(
           
            [
                'student_id' => $data['student_id'], 
                'alamat' => $data['asal_sekolah'], 
                'no_hp' => $data['no_hp'], 
                'tinggal_dengan' => $data['tinggal_dengan'], 
                'jarak_kesekolah' => $data['jarak_kesekolah'], 
                
            ]
        );

        if($residenceStudentInformation){
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

   
    public function destroy(ResidenceStudentInformation $residenceStudentInformation)
    {
        $residenceStudentInformation->delete();

        if($residenceStudentInformation){
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
