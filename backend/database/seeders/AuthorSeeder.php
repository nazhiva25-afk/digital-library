<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
{
    DB::table('authors')->insert([
        [
            'name' => 'Andrea Hirata',
            'bio' => 'Penulis novel Laskar Pelangi.',
            'tgl_lahir' => '1967-10-24',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Tere Liye',
            'bio' => 'Penulis novel Indonesia.',
            'tgl_lahir' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
}
}
