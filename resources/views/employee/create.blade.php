@extends('layouts.app')
@section('app-content')
    <div class="card border-0 shadow components-section mt-4">
        <div class="card-body">
            <div class="mb-lg-4 d-flex align-items-center">
                <img src="{{ asset('assets/img/tambah-pegawai.png') }}" alt="Employee">
                <h4 class="mb-0 fw-bold">Tambah Pegawai</h4>
            </div>
            <div class="row mb-4">
                <div class="col-lg-10 col-sm-8">
                    <form action="/employee" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name</label>
                            @error('name')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <img src="{{ asset('assets/img/name.png') }}" width="25px" height="25px"
                                        alt="Nama">
                                </span>
                                <input type="text" class="form-control" id="name" placeholder="your name"
                                    aria-label="Search" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            @error('email')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <img src="{{ asset('assets/img/email.png') }}" width="25px" height="25px"
                                        alt="Email">
                                </span>
                                <input type="text" class="form-control" id="email" placeholder="your email"
                                    aria-label="Search" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_pegawai">Nomor Pegawai</label>
                            @error('no_pegawai')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <img src="{{ asset('assets/img/no_pegawai.png') }}" width="25px" height="25px"
                                        alt="No.Pegawai">
                                </span>
                                <input type="text" class="form-control" id="nomor_pegawai" placeholder="nomor pegawai"
                                    aria-label="Search" name="no_pegawai" value="{{ old('no_pegawai') }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan">Jabatan</label>
                            @error('jabatan')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <img src="{{ asset('assets/img/jabatan.png') }}" width="25px" height="25px"
                                        alt="Jabatan">
                                </span>
                                <input type="text" class="form-control" id="jabatan" placeholder="your jabatan"
                                    aria-label="Search" name="jabatan" value="{{ old('jabatan') }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="my-1 me-2" for="status">Status Kepegawaian</label>
                            @error('status')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                            <select class="form-select" id="status" aria-label="Default select example" name="status">
                                <option value="Tetap" {{ old('status') == 'Tetap' ? 'selected' : '' }}>Tetap</option>
                                <option value="Kontrak" {{ old('status') == 'Kontrak' ? 'selected' : '' }}>Kontrak</option>
                                <option value="Magang" {{ old('status') == 'Magang' ? 'selected' : '' }}>Magang</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            @error('alamat')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <img src="{{ asset('assets/img/alamat.png') }}" width="25px" height="25px"
                                        alt="Alamat">
                                </span>
                                <input type="text" class="form-control" id="alamat" placeholder="your alamat"
                                    aria-label="Search" name="alamat" value="{{ old('alamat') }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="my-1 me-2" for="gender">Gender</label>
                            @error('gender')
                                <p style="color: red">{{ $message }}</p>
                            @enderror
                            <select class="form-select" id="gender" aria-label="Default select example"
                                name="gender">
                                <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="birthday">Birthday</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <input data-datepicker="" class="form-control" id="birthday" type="text"
                                    placeholder="dd/mm/yyyy" required>
                            </div>
                        </div> --}}
                        <button class="btn btn-lg btn-info" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
