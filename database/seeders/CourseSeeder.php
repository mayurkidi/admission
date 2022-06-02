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
                array('name'=> "Bachelor of Ayurvedic Medicine and Surgery",'program_id'=>1,'graduationtype'=>'UG'),
                
                array('name'=> "Medical Radiology and Imaging Technology",'program_id'=>2,'graduationtype'=>'UG'),
                array('name'=> "Bachelor of Physiotherapy",'program_id'=>2,'graduationtype'=>'UG'),
                array('name'=> "Master of Physiotherapy",'program_id'=>2,'graduationtype'=>'PG'),
                
                array('name'=> "B.Pharm",'program_id'=>3,'graduationtype'=>'UG'),
                array('name'=> "M.Pharm",'program_id'=>3,'graduationtype'=>'PG'),
                array('name'=> "Pharm.D",'program_id'=>3,'graduationtype'=>'UG'),
                array('name'=> "Ph.D",'program_id'=>3,'graduationtype'=>'PG'),
                
                array('name'=> "B.Tech - Computer Engineering",'program_id'=>4,'graduationtype'=>'UG'),
                array('name'=> "B.Tech - Artificial Intelligence",'program_id'=>4,'graduationtype'=>'UG'),
                array('name'=> "B.Tech - Cyber security",'program_id'=>4,'graduationtype'=>'UG'),
                array('name'=> "B.Tech - Electrical Engineering",'program_id'=>4,'graduationtype'=>'UG'),
                array('name'=> "B.Tech - Information and Technology",'program_id'=>4,'graduationtype'=>'UG'),
                array('name'=> "B.Tech - Mechanical Engineering",'program_id'=>4,'graduationtype'=>'UG'),
                array('name'=> "B.Tech - Civil Engineering",'program_id'=>4,'graduationtype'=>'UG'),    
                array('name'=> "M.Tech - Thermal Science (Mechanical Engineering)",'program_id'=>4,'graduationtype'=>'PG'),
                array('name'=> "M.Tech - Machine Design (Mechanical Engineering)",'program_id'=>4,'graduationtype'=>'PG'),
                array('name'=> "M.Tech - Computer Engineering",'program_id'=>4,'graduationtype'=>'PG'),
                array('name'=> "M.Tech - Electrical Power System (Electrical Engineering)",'program_id'=>4,'graduationtype'=>'PG'),
                array('name'=> "M.Tech - Structural Engineering (Civil Engineering)",'program_id'=>4,'graduationtype'=>'PG'),
                array('name'=> "M.Tech - Construction Technology (Civil Engineering)",'program_id'=>4,'graduationtype'=>'PG'),
                array('name'=> "Ph.D",'program_id'=>4,'graduationtype'=>'PG'),
                
                array('name'=> "Diploma in Computer Engineering",'program_id'=>4,'graduationtype'=>'UG-D'),
                array('name'=> "Diploma in Electrical Engineering",'program_id'=>4,'graduationtype'=>'UG-D'),
                array('name'=> "Diploma in Information & Communication Technology",'program_id'=>4,'graduationtype'=>'UG-D'),
                array('name'=> "Diploma in Mechanical Engineering",'program_id'=>4,'graduationtype'=>'UG-D'),
                array('name'=> "Diploma in Civil Engineering",'program_id'=>4,'graduationtype'=>'UG-D'),    

                array('name'=> "Bachelor of Computer Application",'program_id'=>5,'graduationtype'=>'UG'),
                array('name'=> "Master of Computer Application",'program_id'=>5,'graduationtype'=>'PG'),
                array('name'=> "Ph.D",'program_id'=>5,'graduationtype'=>'PG'),
                
                array('name'=> "Bachelor of Business Administrations",'program_id'=>6,'graduationtype'=>'UG'),
                array('name'=> "Master of Business Administrations",'program_id'=>6,'graduationtype'=>'PG'),
                array('name'=> "Bachelor of Business Administrations (Applied Management)",'program_id'=>6,'graduationtype'=>'UG'),
                array('name'=> "BVoc",'program_id'=>6,'graduationtype'=>'UG'),
                array('name'=> "Ph.D",'program_id'=>6,'graduationtype'=>'PG'),
                
                array('name'=> "Diploma in Medical Laboratory Techniques",'program_id'=>7,'graduationtype'=>'UG'),
                array('name'=> "B.Sc - Chemistry",'program_id'=>7,'graduationtype'=>'UG'),
                array('name'=> "B.Sc - Microbiology",'program_id'=>7,'graduationtype'=>'UG'),
                array('name'=> "B.Sc - Agriculture",'program_id'=>7,'graduationtype'=>'UG'),
                
                array('name'=> "M.Sc - Organic Chemistry",'program_id'=>7,'graduationtype'=>'PG'),
                array('name'=> "M.Sc - Microbiology",'program_id'=>7,'graduationtype'=>'PG'),
                array('name'=> "M.Sc - Analytical Chemistry",'program_id'=>7,'graduationtype'=>'PG'),
                array('name'=> "M.Sc - Physics",'program_id'=>7,'graduationtype'=>'PG'),        
                array('name'=> "Ph.D",'program_id'=>7,'graduationtype'=>'PG'),

                array('name'=> "B.Sc Agriculture",'program_id'=>8,'graduationtype'=>'UG'),
                array('name'=> "Ph.D",'program_id'=>8,'graduationtype'=>'PG'),
        );     
        DB::table('courses')->insert($courses);

    }
}
