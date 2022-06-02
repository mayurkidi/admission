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
                array('name'=> "Ayurveda",'program_id'=>1,'graduationtype'=>'UG'),
                array('name'=> "Medical Radiology and Imaging Technology",'program_id'=>2,'graduationtype'=>'UG'),
                array('name'=> "Physiotherapy",'program_id'=>2,'graduationtype'=>'UG'),
                array('name'=> "B.Pharm",'program_id'=>3,'graduationtype'=>'UG'),
                array('name'=> "M.Pharm",'program_id'=>3,'graduationtype'=>'PG'),
                array('name'=> "Pharm.D",'program_id'=>3,'graduationtype'=>'UG'),
                array('name'=> "Ph.D",'program_id'=>3,'graduationtype'=>'PG'),
                
                array('name'=> "B.Tech(Computer Engineering)",'program_id'=>4,'graduationtype'=>'UG-D'),
                array('name'=> "B.Tech(Artificial Intelligence)",'program_id'=>4,'graduationtype'=>'UG-D'),
                array('name'=> "B.Tech(Cyber security)",'program_id'=>4,'graduationtype'=>'UG-D'),
                array('name'=> "B.Tech(Electrical Engineering)",'program_id'=>4,'graduationtype'=>'UG-D'),
                array('name'=> "B.Tech(Information and Technology)",'program_id'=>4,'graduationtype'=>'UG-D'),
                array('name'=> "B.Tech(Mechanical Engineering)",'program_id'=>4,'graduationtype'=>'UG-D'),
                array('name'=> "B.Tech(Civil Engineering)",'program_id'=>4,'graduationtype'=>'UG-D'),
                
                
                array('name'=> "M.Tech(Thermal Science (Mechanical Engineering))",'program_id'=>4,'graduationtype'=>'PG'),
                array('name'=> "M.Tech()",'program_id'=>4,'graduationtype'=>'PG'),
                array('name'=> "M.Tech()",'program_id'=>4,'graduationtype'=>'PG'),
                array('name'=> "M.Tech()",'program_id'=>4,'graduationtype'=>'PG'),
                array('name'=> "M.Tech()",'program_id'=>4,'graduationtype'=>'PG'),
                array('name'=> "M.Tech()",'program_id'=>4,'graduationtype'=>'PG'),
                
                array('name'=> "Ph.D",'program_id'=>4,'graduationtype'=>'PG'),
                
                array('name'=> "BCA",'program_id'=>5,'graduationtype'=>'UG'),
                array('name'=> "MCA",'program_id'=>5,'graduationtype'=>'PG'),
                array('name'=> "Ph.D",'program_id'=>5,'graduationtype'=>'PG'),
                array('name'=> "BBA",'program_id'=>6,'graduationtype'=>'UG'),
                array('name'=> "MBA",'program_id'=>6,'graduationtype'=>'PG'),
                array('name'=> "BBA-Hons (Applied managment)",'program_id'=>6,'graduationtype'=>'UG'),
                array('name'=> "BVoc",'program_id'=>6,'graduationtype'=>'UG'),
                array('name'=> "Ph.D",'program_id'=>6,'graduationtype'=>'PG'),
                array('name'=> "B.Sc",'program_id'=>7,'graduationtype'=>'UG'),
                array('name'=> "M.Sc",'program_id'=>7,'graduationtype'=>'PG'),
                array('name'=> "DMLT",'program_id'=>7,'graduationtype'=>'UG'),
                array('name'=> "Ph.D",'program_id'=>7,'graduationtype'=>'PG'),
                array('name'=> "B.Sc Agriculture",'program_id'=>8,'graduationtype'=>'UG'),
                array('name'=> "Ph.D",'program_id'=>8,'graduationtype'=>'PG'),
        );     
        DB::table('courses')->insert($courses);

    }
}
