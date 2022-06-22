<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments;
use App\Models\User;
use App\Models\Course;
use App\Models\Program;
use App\Models\State;
use App\Models\Academicdetail;
use App\Models\Applicationdetail;
use App\Models\Result;
use Faker\Provider\ar_SA\Payment;
use Illuminate\Console\Application;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;

use function PHPSTORM_META\type;
use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return "Hello";
        $application = Applicationdetail::select('*')->where('userid', \Auth::user()->id)->get();
        $isapproved = Applicationdetail::where('userid', \Auth::user()->id)->pluck('isapproved');
        $applicationstatus = Applicationdetail::where('userid', \Auth::user()->id)->pluck('applicationstatus');
        $paymentstatus = Payments::where('user_id', \Auth::user()->id)->pluck('paymentstatus');
        // return  compact('paymentstatus', 'teststatus','applicationstatus');
        $graduationtype = Applicationdetail::where('userid', \Auth::user()->id)->pluck('graduationtype');
        if (!$applicationstatus->isEmpty()) {
            if ($applicationstatus[0] == 1) {
                $id = Applicationdetail::where('userid', \Auth::user()->id)->pluck('graduationtype');
                if($id[0]=="UG")
                    $id[0]=1;
                if($id[0]=="PG")
                    $id[0]=2;
                if($id[0]=="UG-D")
                    $id[0]=3;               

                $application = Applicationdetail::select('*')->where('userid', \Auth::user()->id)->get();
                $academic = Academicdetail::select('*')->where('userid', \Auth::user()->id)->get();
                $user = User::select('*')->where('id', \Auth::user()->id)->get();
                //  return gettype(compact('user','application','academic'));  
                $applicationstatus = Applicationdetail::where('userid', \Auth::user()->id)->pluck('applicationstatus');
                return view('addcourse.application1', compact('application', 'academic', 'user', 'paymentstatus', 'applicationstatus', 'graduationtype','id'));
            }
        }
        if (\Auth::user()->id == 1) {

            // $application = Applicationdetail::select('*')->get();
            // $user = User::select('*')->get();
            // $academic = Academicdetail::select('*')->paginate();
            // $payment = Payments::select('*')->get();
            // $courses = Course::all()->pluck('id', 'name');
            // $programs = Program::all()->pluck('id', 'name');
            $userdata=DB::table('users')
            ->leftJoin('applicationdetails','applicationdetails.userid','=','users.id')
            ->leftJoin('academicdetails','academicdetails.userid','=','users.id')
            ->leftJoin('payments','payments.user_id','=','users.id')
            ->leftJoin('programs','programs.id','=','applicationdetails.course')
            ->leftJoin('courses','courses.id','=','applicationdetails.specialization')
            ->select('users.id as uid','users.name','users.email','users.fathername','applicationdetails.id as aid','applicationdetails.offerletter','courses.name as cname','programs.name as pname','payments.paymentproof','payments.paymentstatus','academicdetails.*','applicationdetails.testresult','applicationdetails.isapproved')
            ->where('users.id','!=',1)
            ->orderBy('applicationdetails.id','DESC')->get();
            // ->orderByRaw('ISNULL(applicationdetails.id), applicationdetails.id  ASC');
            // return $userdata;
            // $user = User::select('*')->get();            
            // $application=Applicationdetail::select('*')->paginate(10);
            // return $user;
            // $merged_array=array_merge(array($user),array($application));
            // return $merged_array;
            // return view('admin',compact("application","academic","payment","user","courses","programs"));
            return view('admin',compact('userdata'));
        }
        return view('dashboard', compact('paymentstatus', 'applicationstatus', 'graduationtype','isapproved','application'));
    }

    public function dashboard()
    {
        $is_register = Session::get('is_register');

        if ($is_register == '1' || $is_register == 1) {
            Session::put('is_register', null);
            \Auth::logout();
            $states = State::all()->pluck('id', 'name');
            $cities = City::all()->pluck('id', 'name', 'state_id');
            return redirect()->route('login')->with(compact(['states' => $states]));
        }

        $userid = User::all();
        $paymentstatus = Payments::where('user_id', \Auth::user()->id)->pluck('paymentstatus');
        if (!$paymentstatus->isEmpty()) {
            if ($paymentstatus[0] == 1) {
                $application = Applicationdetail::select('*')->where('userid', \Auth::user()->id)->get();
                $academic = Academicdetail::select('*')->where('userid', \Auth::user()->id)->get();
                $user = User::select('*')->where('id', \Auth::user()->id)->get();
                //  return gettype(compact('user','application','academic'));  
                return view('addcourse.application1', compact('application', 'academic', 'user'));
            }
        }
        // return "Hello";
        // $application = Applicationdetail::select('*')->where('userid', \Auth::user()->id)->get();
        // return compact('application');

        return view('dashboard');
    }
}
