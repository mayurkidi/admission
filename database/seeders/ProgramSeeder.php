<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;
use DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $programs = array(
            array('name' => "Medical"),
            array('name' => "Health Sciences"),
            array('name' => "Pharmacy"),
            array('name' => "Engineering"),
            array('name' => "Computer Application"),
            array('name' => "Management"),
            array('name' => "Sciences"),
            array('name' => "Agriculture"),
        );
        DB::table('programs')->insert($programs);
    }
}
