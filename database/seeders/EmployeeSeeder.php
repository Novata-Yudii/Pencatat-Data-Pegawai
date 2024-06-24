<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        Employee::create([
            'name' => 'Novata Dwi Wahyudi',
            'email' => 'novatawahyudi@gmail.com',
            'no_pegawai' => '1122334455',
            'jabatan' => 'Chief Executive Officer',
            'status' => 'Tetap',
            'alamat' => 'Jalan Pucang Kerto 2 no 9',
            'gender' => 'Laki-laki'
        ]);
        Employee::create([
            'name' => 'Puja Sandy',
            'email' => 'sandypuja@gmail.comm',
            'no_pegawai' => '2233445566',
            'jabatan' => 'Chief Operating Officer',
            'status' => 'Tetap',
            'alamat' => 'Jalan Sendang Mulyo 2',
            'gender' => 'Perempuan'
        ]);
    }
}
