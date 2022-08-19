<?php

namespace App\Http\Controllers;

use App\Models\PreviousEducationStudentInformation;
use App\Http\Requests\PreviousEducationStudentInformationRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class PreviousEducationStudentInformationController extends Controller
{
    
    public function index()
    {
        $previousEducationStudentInformation = PreviousEducationStudentInformation::all();
        return response()->json([
            "success" => true,
            "previousEducationStudentInformations" => $previousEducationStudentInformation
        ]);
    }

  
    public function create()
    {
        //
    }

   
    public function store(PreviousEducationStudentInformationRequest $request)
    {
        $data   = $request->validated();
        $previousEducationStudentInformation = PreviousEducationStudentInformation::create($data);

        if($previousEducationStudentInformation){
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

    public function show(PreviousEducationStudentInformation $previousEducationStudentInformation)
    {
        //
    }

    
    public function edit(PreviousEducationStudentInformation $previousEducationStudentInformation)
    {
        return response()->json([
            "success" => true,
            "previousEducationStudentInformation" => $previousEducationStudentInformation
        ],200);
    }

    public function update(Request $request, PreviousEducationStudentInformation $previousEducationStudentInformation)
    {
        $data   = $request->all();
        $previousEducationStudentInformation->update(
           
            [
                'student_id' => $data['student_id'], 
                'asal_sekolah' => $data['asal_sekolah'], 
                'tanggal_skhun' => $data['tanggal_skhun'], 
                'no_skhun' => $data['no_skhun'], 
                'tanggal_ijazah' => $data['tanggal_ijazah'], 
                'no_ijazah' => $data['no_ijazah'],                 
                'pindahan_dari_sekolah' => $data['pindahan_dari_sekolah'],                 
                'diterima_dikelas' => $data['diterima_dikelas'],                 
                'kelompok' => $data['kelompok'],                 
                'tanggal_penerimaan' => $data['tanggal_penerimaan'],                 
                
            ]
        );

        if($previousEducationStudentInformation){
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

   
    public function destroy(PreviousEducationStudentInformation $previousEducationStudentInformation)
    {
        $previousEducationStudentInformation->delete();

        if($previousEducationStudentInformation){
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
