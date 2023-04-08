<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = DB::table('jabatans')->get();

        $karyawan = [
            [
                'nama' => 'John Doe',
                'alamat' => 'Jl. Sudirman No. 123',
                'tanggal_lahir' => '1990-01-01',
                'jabatan_id' => $jabatan[0]->id,
            ],
            [
                'nama' => 'Jane Doe',
                'alamat' => 'Jl. Thamrin No. 456',
                'tanggal_lahir' => '1995-02-02',
                'jabatan_id' => $jabatan[1]->id,
            ],
            [
                'nama' => 'Bob Smith',
                'alamat' => 'Jl. Kebon Jeruk No. 789',
                'tanggal_lahir' => '1993-03-03',
                'jabatan_id' => $jabatan[2]->id,
            ],
        ];

        foreach ($karyawan as $k) {
            DB::table('karyawans')->insert($k);
        }
    }
}
