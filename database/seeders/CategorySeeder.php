<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Bahasa Indonesia',
            ],
            [
                'name' => 'Sejarah',
            ],
            [
                'name' => 'IPA',
            ],

        ];
        DB::table('categories')->insert($datas);
    }
}
