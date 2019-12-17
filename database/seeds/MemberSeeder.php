<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'id_member' => 'A001',
            'nama' => 'Ahmad Mufli Hasan',
            'nim' => '1715015003',
            'email' => 'afumadomufuri@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
