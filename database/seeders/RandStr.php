<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RandStr extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('domains')->insert([
            'name' => Str::random(10) . '.com',
            'surname' => Str::random(5) . '.' . Str::random(10) . '.com',

        ]);
    }
}