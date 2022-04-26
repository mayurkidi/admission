<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;
use DB;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $programs = array(
        //     array('name' => "Medical"),
        //     array('name' => "Health Sciences"),
        //     array('name' => "Pharmacy"),
        //     array('name' => "Engineering"),
        //     array('name' => "Computer Application"),
        //     array('name' => "Management"),
        //     array('name' => "Sciences"),
        //     array('name' => "Agriculture"),
        //     array('name' => "Doctor Studies (Ph.D)"),
        // );
        // DB::table('programs')->insert($programs);
        $courses=array(
                array('name'=> "Ayurveda",'program_id'=>1),
                array('name'=> "Medical Radiology and Imaging Technology",'program_id'=>2),
                array('name'=> "Physiotherapy",'program_id'=>2),
                array('name'=> "B.Pharm",'program_id'=>3),
                array('name'=> "M.Pharm",'program_id'=>3),
                array('name'=> "Pharm.D",'program_id'=>3),
                array('name'=> "Ph.D",'program_id'=>3),
                array('name'=> "Diploma",'program_id'=>4),
                array('name'=> "B.Tech",'program_id'=>4),
                array('name'=> "M.Tech",'program_id'=>4),
                array('name'=> "Ph.D",'program_id'=>4),
                array('name'=> "BCA",'program_id'=>5),
                array('name'=> "MCA",'program_id'=>5),
                array('name'=> "Ph.D",'program_id'=>5),
                array('name'=> "BBA",'program_id'=>6),
                array('name'=> "MBA",'program_id'=>6),
                array('name'=> "BBA-Hons (Applied managment)",'program_id'=>6),
                array('name'=> "BVoc",'program_id'=>6),
                array('name'=> "Ph.D",'program_id'=>6),
                array('name'=> "B.Sc",'program_id'=>7),
                array('name'=> "M.Sc",'program_id'=>7),
                array('name'=> "DMLT",'program_id'=>7),
                array('name'=> "Ph.D",'program_id'=>7),
                array('name'=> "Ph.D",'program_id'=>7),
                array('name'=> "B.Sc Agriculture",'program_id'=>8),
                array('name'=> "Ph.D",'program_id'=>8),
        );     
        DB::table('courses')->insert($courses);

    }
}
