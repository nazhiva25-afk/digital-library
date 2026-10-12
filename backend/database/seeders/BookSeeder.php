<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    DB::table('books')->insert([
    [
        'title' => 'Laskar Pelangi',
        'isbn' => '9789793062792',
        'tahun_terbit' => 2005,
        'jumlah_stok' => 10,
        'author_id' => 1,
        'publisher_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'title' => 'Bumi',
        'isbn' => '9786239554545',
        'tahun_terbit' => 2014,
        'jumlah_stok' => 8,
        'author_id' => 2,
        'publisher_id' => 2,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    ]);

    }
}
