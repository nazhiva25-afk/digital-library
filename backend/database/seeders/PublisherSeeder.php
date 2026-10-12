<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publishers')->insert([
        [
        'name' => 'Penerbit Contoh A',
        'alamat' => 'Banda Aceh',
        'website' => 'https://contoh-a.com',
        'created_at' => now(),
        'updated_at' => now(),
        ],
        [
        'name' => 'Penerbit Contoh B',
        'alamat' => 'Medan',
        'website' => 'https://contoh-b.com',
        'created_at' => now(),
        'updated_at' => now(),
        ],
        ]);
    }
}
