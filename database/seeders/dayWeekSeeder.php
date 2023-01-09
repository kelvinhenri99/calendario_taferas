<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dayWeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dayweeks')->insert([
            'dayweek'     => 'DOM',
        ]);
        DB::table('dayweeks')->insert([
            'dayweek'     => 'SEG',
        ]);
        DB::table('dayweeks')->insert([
            'dayweek'     => 'TER',
        ]);
        DB::table('dayweeks')->insert([
            'dayweek'     => 'QUA',
        ]);
        DB::table('dayweeks')->insert([
            'dayweek'     => 'QUI',
        ]);
        DB::table('dayweeks')->insert([
            'dayweek'     => 'SEX',
        ]);
        DB::table('dayweeks')->insert([
            'dayweek'     => 'SAB',
        ]);
    }
}
