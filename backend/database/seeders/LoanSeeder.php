<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    
    public function run(): void
    {
    DB::table('loans')->insert([
    [
        'member_id' => 1,
        'book_id' => 1,
        'loan_date' => '2026-10-10',
        'return_date' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    [
        'member_id' => 2,
        'book_id' => 2,
        'loan_date' => '2026-10-11',
        'return_date' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
    ]);
    }
}
