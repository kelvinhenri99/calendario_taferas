<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '0',
            'day'       => '1',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '0',
            'day'       => '8',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '0',
            'day'       => '15',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '0',
            'day'       => '22',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '0',
            'day'       => '29',
            'year'      => '2023'
        ]);

        /* week Two*/
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '1',
            'day'       => '2',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '1',
            'day'       => '9',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '1',
            'day'       => '16',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '1',
            'day'       => '23',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '1',
            'day'       => '30',
            'year'      => '2023'
        ]);

        /* week Tree*/
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '2',
            'day'       => '3',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '2',
            'day'       => '10',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '2',
            'day'       => '17',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '2',
            'day'       => '24',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '2',
            'day'       => '31',
            'year'      => '2023'
        ]);

        /* week For*/
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '3',
            'day'       => '4',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '3',
            'day'       => '11',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '3',
            'day'       => '18',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '3',
            'day'       => '25',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '3',
            'day'       => '0',
            'year'      => '2023'
        ]);

        /* week Five*/
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '4',
            'day'       => '5',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '4',
            'day'       => '12',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '4',
            'day'       => '19',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '4',
            'day'       => '26',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '4',
            'day'       => '0',
            'year'      => '2023'
        ]);

        /* week Six*/
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '5',
            'day'       => '6',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '5',
            'day'       => '13',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '5',
            'day'       => '20',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '5',
            'day'       => '27',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '5',
            'day'       => '0',
            'year'      => '2023'
        ]);

        /* week Seven*/
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '6',
            'day'       => '7',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '6',
            'day'       => '14',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '6',
            'day'       => '21',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '6',
            'day'       => '28',
            'year'      => '2023'
        ]);
        DB::table('calendars')->insert([
            'month'     => '1',
            'dayweek'   => '6',
            'day'       => '0',
            'year'      => '2023'
        ]);
    }
}
