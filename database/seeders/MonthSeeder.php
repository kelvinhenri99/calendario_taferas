<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('months')->insert([
            'month'     => 'JAN',
        ]);
        DB::table('months')->insert([
            'month'     => 'FER',
        ]);
        DB::table('months')->insert([
            'month'     => 'MAR',
        ]);
        DB::table('months')->insert([
            'month'     => 'ABR',
        ]);
        DB::table('months')->insert([
            'month'     => 'MAI',
        ]);
        DB::table('months')->insert([
            'month'     => 'JUN',
        ]);
        DB::table('months')->insert([
            'month'     => 'JUL',
        ]);
        DB::table('months')->insert([
            'month'     => 'AGO',
        ]);
        DB::table('months')->insert([
            'month'     => 'SET',
        ]);
        DB::table('months')->insert([
            'month'     => 'OUT',
        ]);
        DB::table('months')->insert([
            'month'     => 'NOV',
        ]);
        DB::table('months')->insert([
            'month'     => 'DEZ',
        ]);
    }
}
