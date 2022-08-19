<?php

namespace App\Http\Controllers;

use App\Models\StudentClass;
use App\Http\Requests\StudentClassRequest;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
  
    public function index()
    {
        $student_class = StudentClass::all();
        return response()->json([
            "success" => true,
            "student_classes" => $student_class
        ]);
    }
    
    public function create()
    {
        //
    }

    public function store(StudentClassRequest $request)
    {
        $data   = $request->validated();
        $studentClass = StudentClass::create($data);

        if($studentClass){
            return response()->json([
                "success" => true,
                "message" => "$studentClass->nama Berhasil Ditambah"
            ],200);
        }

        return response()->json([
                "success" => false,
                "message" => "Kelas Gagal Ditambah",
        ],409);
    }

    public function show(StudentClass $studentClass)
    {
        //
    }

    public function edit(StudentClass $studentClass)
    {
        return response()->json([
            "success" => true,
            "studentClass" => $studentClass
        ],200);
    }

    public function update(Request $request, StudentClass $studentClass)
    {
        $data   = $request->all();
        $studentClass->updateOrCreate(
            [
                'kode' => $data['kode'],
            ],
            [
                'nama' => $data['nama'], 
                'deskripsi' => $data['deskripsi'], 
            ]
        );

        if($studentClass){
            return response()->json([
                "success" => true,
                "message" => "$studentClass->nama Berhasil Diubah"
            ],200);
        }

        return response()->json([
                "success" => false,
                "message" => "Kelas Gagal Diubah",
        ],409);
    }

    public function destroy(StudentClass $studentClass)
    {
        $studentClass->delete();

        if($studentClass){
            return response()->json([
                "success" => true,
                "message" => "Kelas Berhasil Dihapus"
            ],200);
        }

        return response()->json([
                "success" => false,
                "message" => "Kelas Gagal Dihapus"
        ], 409);
    }
}
