<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('employee.index', [
            'title' => 'Employee', 
            'employees' => Employee::all()
        ]);
    }

    public function create(){
        return view('employee.create', ['title' => 'Employee']);
    }

    public function store(Request $request){
        $employee = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:dns|unique:App\Models\Employee,email|max:255',
            'no_pegawai' => 'required|min:5',
            'jabatan' => 'required',
            'status' => 'required',
            'alamat' => 'required|max:255',
            'gender' => 'required'
        ],[
            'name.required' => 'Nama wajib di isi!',
            'name.min' => 'Nama minimal 5 karakter!',
            'email.required' => 'Email wajib di isi!',
            'email.email' => 'Email tidak valid!',
            'email.unique' => 'Email sudah digunakan!',
            'email.max' => 'Email maximal 255 karakter!',
            'no_pegawai.required' => 'Nomor pegawai wajib di isi wajib di isi!',
            'no_pegawai.min' => 'Nomor pegawai minimal 5 karakter!',
            'jabatan.required' => 'Jabatan wajib di isi!',
            'status.required' => 'Status wajib di isi!',
            'alamat.required' => 'Alamat wajib di isi!',
            'alamat.min' => 'Alamat minimal 5 karakter!',
            'gender.required' => 'Gender wajib di isi!',        
        ]);
        Employee::create($employee);
        return redirect('/employee')->with('succes', 'Berhasil menambahkan data pegawai');
    }

    public function show($id){
        $employee = Employee::find($id);
        return view('employee.show', [
            'title' => 'Employee',
            'employee' => $employee
        ]);
    }

    public function edit($id){        
        return view('employee.edit', [
            'title' => 'Employee',
            'employee' => Employee::find($id)
        ]);
    }

    public function update(Request $request){
        Employee::where('id', $request->id)
            ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'no_pegawai' => $request->no_pegawai,
                    'jabatan' => $request->jabatan,
                    'status' => $request->status,
                    'alamat' => $request->alamat,
                    'gender' => $request->gender
                ]);
        return redirect('/employee')->with('succes', 'Berhasil mengubah data');
    }

    public function destroy($id){
        Employee::destroy($id);
        return redirect('/employee')->with('succes', 'Berhasil hapus data');
    }
}
