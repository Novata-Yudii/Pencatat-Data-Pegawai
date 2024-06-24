@extends('layouts.app')
@section('app-content')
    <div class="card border-0 shadow mt-4">
        <h4 style="color: green">{{ session('succes') }}</h4>
        <div class="card-body">
            <div class="d-flex justify-content-between w-100 flex-wrap mb-4">
                <div class="mb-3 mb-lg-0 d-flex align-items-center">
                    <img src="{{ asset('assets/img/icons8-employee-ios-17-filled-32.png') }}" alt="Employee">
                    <h4 class="mb-0 fw-bold">Detail Pegawai</h4>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <tbody>
                        <!-- Item -->
                        <tr>
                            <th class="border-1">Nama</th>
                            <td class="border-1 fw-bold">
                                {{ $employee->name }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border-1">Email</th>
                            <td class="border-1 fw-bold">
                                {{ $employee->email }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border-1">Nomor Pegawai</th>
                            <td class="border-1 fw-bold">
                                {{ $employee->no_pegawai }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border-1">Jabatan</th>
                            <td class="border-1 fw-bold">
                                {{ $employee->jabatan }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border-1">Status</th>
                            <td class="border-1 fw-bold">
                                {{ $employee->status }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border-1">Alamat</th>
                            <td class="border-1 fw-bold">
                                {{ $employee->alamat }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border-1">Jenis Kelamin</th>
                            <td class="border-1 fw-bold">
                                {{ $employee->gender }}
                            </td>
                        </tr>
                        <!-- End of Item -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
