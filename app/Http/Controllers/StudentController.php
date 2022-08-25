<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\PersonalStudentDetail;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return response()->json([
            "success" => true,
            "students" => $student
        ]);
    }

    public function store(StudentRequest $request)
    {
        $data   = $request->validated();
        $student = Student::create($data);

        if($student){
            return response()->json([
                "success" => true,
                "message" => "$student->name Berhasil Ditambah"
            ],200);
        }

        return response()->json([
                "success" => false,
                "message" => "Siswa Gagal Ditambah",
        ],409);
    }

    public function show(Student $student)
    {
        //
    }

    public function edit(Student $student)
    {
        return response()->json([
            "success" => true,
            "student" => $student
        ],200);
    }

    public function update(Request $request, Student $student)
    {
        $data   = $request->all();
        $student->update(
           
            [
                'nisn' => $data['nisn'], 
                'class_id' => $data['class_id'],                 
            ]
        );

        if($student){
            return response()->json([
                "success" => true,
                "message" => "$student->nisn Berhasil Diupdate"
            ],200);
        }

        return response()->json([
                "success" => false,
                "message" => "Siswa Gagal Diupdate",
        ],409);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        if($student){
            return response()->json([
                "success" => true,
                "message" => "Siswa Berhasil Dihapus"
            ],200);
        }

        return response()->json([
                "success" => false,
                "message" => "Siswa Gagal Dihapus"
        ], 400);
    }
}
