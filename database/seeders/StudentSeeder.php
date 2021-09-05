<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 51; $i++){
            DB::table('students')->insert([
                "name" => Str::random(12),
                "email" => Str::random(8)."@gmail.com",
                "phone" => $i * 111111111,
                "password" => Hash::make(Str::random(8))
            ]);
        }
    }
}
