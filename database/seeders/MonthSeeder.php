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
            'month'     => 'JANEIRO',
        ]);
        DB::table('months')->insert([
            'month'     => 'FEVEREIRO',
        ]);
        DB::table('months')->insert([
            'month'     => 'MARÇO',
        ]);
        DB::table('months')->insert([
            'month'     => 'ABRIL',
        ]);
        DB::table('months')->insert([
            'month'     => 'MAIO',
        ]);
        DB::table('months')->insert([
            'month'     => 'JUNHO',
        ]);
        DB::table('months')->insert([
            'month'     => 'JULHO',
        ]);
        DB::table('months')->insert([
            'month'     => 'AGO',
        ]);
        DB::table('months')->insert([
            'month'     => 'SETEMBRO',
        ]);
        DB::table('months')->insert([
            'month'     => 'OUTUBRO',
        ]);
        DB::table('months')->insert([
            'month'     => 'NOVEMBRO',
        ]);
        DB::table('months')->insert([
            'month'     => 'DEZEMBRO',
        ]);
    }
}
