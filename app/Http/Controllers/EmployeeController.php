<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index()
    {
        $employee = Employee::all();
        return response()->json([
            "success" => true,
            "employees" => $employee
        ]);
    }

   
    public function create()
    {
        //
    }

   
    public function store(EmployeeRequest $request)
    {
        $data   = $request->validated();
        $employee = Employee::create($data);

        if($employee){
            return response()->json([
                "success" => true,
                "message" => "$employee->nama Berhasil Ditambah"
            ],200);
        }

        return response()->json([
                "success" => false,
                "message" => "Data Gagal Ditambah",
        ],409);
    }

    
    public function show(Employee $employee)
    {
        //
    }

    
    public function edit(Employee $employee)
    {
        return response()->json([
            "success" => true,
            "employee" => $employee
        ],200);
    }

    
    public function update(Request $request, Employee $employee)
    {
        $data   = $request->all();
        $employee->update(
           
            [
                'nip' => $data['nip'], 
                'nama' => $data['asal_sekolah'], 
                'jenis_kelamin' => $data['jenis_kelamin'], 
                'tempat_lahir' => $data['tempat_lahir'], 
                'tanggal_lahir' => $data['tanggal_lahir'], 
                'nik' => $data['nik'], 
                'nuptk' => $data['nuptk'], 
                'npwp' => $data['npwp'], 
                'email' => $data['email'], 
                'status_pegawai' => $data['status_pegawai'], 
                'pendidikan_terakhir' => $data['pendidikan_terakhir'], 
                'jurusan' => $data['jurusan'], 
                'tugas_pegawai' => $data['tugas_pegawai'], 
                'tmt_tugas' => $data['tmt_tugas'], 
                'tmt_pangkat' => $data['tmt_pangkat'], 
                'tmt_pns' => $data['tmt_pns'], 
                
            ]
        );

        if($employee){
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

    
    public function destroy(Employee $employee)
    {
        $employee->delete();

        if($employee){
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
