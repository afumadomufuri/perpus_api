<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'isbn' => 'CSCT-002',
            'judul' => 'Adik Pemburu Iblis dan Urokodaki Sensei',
            'pengarang' => 'KucingPoi',
            'penerbit' => 'Sugiono Press',
            'tahun_terbit' => '1969'
        ]);
    }
}
