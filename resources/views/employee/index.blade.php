@extends('layouts.app')
@section('app-content')
    <div class="card border-0 shadow mt-4">
        <h4 style="color: green">{{ session('succes') }}</h4>
        <div class="card-body">
            <div class="d-flex justify-content-between w-100 flex-wrap mb-4">
                <div class="mb-3 mb-lg-0 d-flex align-items-center">
                    <img src="{{ asset('assets/img/employees1.png') }}" class="me-1" alt="Employee">
                    <h4 class="mb-0 fw-bold">Daftar Pegawai</h4>
                </div>
                <div>
                    <a href="/employee/create"
                        class="btn btn-outline-gray-600 d-inline-flex align-items-center fs-6 fw-bold">
                        <img src="{{ asset('assets/img/tambah.png') }}" height="25px" width="25px" alt="plus"
                            style="margin-right: 5px"> Tambah
                        pegawai
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">No</th>
                            <th class="border-0">Nama</th>
                            <th class="border-0">Jabatan</th>
                            <th class="border-0">Status</th>
                            <th class="border-0">Alamat</th>
                            <th class="border-0">Jenis Kelamin</th>
                            <th class="border-0 rounded-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Item -->
                        @foreach ($employees as $index => $employee)
                            <tr class="detail-employee">
                                <td class="border-0">
                                    {{ $index + 1 }}
                                </td>
                                <td class="border-0 fw-bold">
                                    <a href="/employee/{{ $employee->id }}">{{ $employee->name }}</a>
                                </td>
                                <td class="border-0 fw-bold">{{ $employee->jabatan }}</td>
                                <td class="border-0 fw-bold">{{ $employee->status }}</td>
                                <td class="border-0 fw-bold">{{ $employee->alamat }}</td>
                                <td class="border-0 fw-bold">{{ $employee->gender }}</td>
                                <td class="border-0 fw-bold">
                                    <a style="width: 70px; margin-right: 5px; height: 100%; display: inline-block"
                                        href="{{ url('employee/edit') }}/{{ $employee->id }}">
                                        <button class="button-28" role="button">Edit</button>
                                    </a>
                                    <form action="{{ url('employee') }}/{{ $employee->id }}" method="POST"
                                        style="display: inline">
                                        @method('delete')
                                        @csrf
                                        <button class="button-28-del" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <!-- End of Item -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
