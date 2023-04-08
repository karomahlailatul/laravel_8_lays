<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatan = [
            ['nama' => 'Manager'],
            ['nama' => 'Supervisor'],
            ['nama' => 'Staff'],
        ];

        foreach ($jabatan as $j) {
            DB::table('jabatans')->insert($j);
        }
    }
}
