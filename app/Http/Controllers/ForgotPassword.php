<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class ForgotPassword extends Controller
{

    public function validatePasswordRequest(Request $request)
    {
        // return "Hello";
        $user = User::select('*')->where('email', $request->email)->get();
        // return $user;

        if (count($user) < 1) {
            return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
        }

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => Str::random(60),
            'created_at' => Carbon::now()
        ]);
        //Get the token just created above
        $tokenData = DB::table('password_resets')
            ->where('email', $request->email)->first();

        if ($this->sendResetEmail($request->email, $tokenData->token)) {
            return redirect()->back()->with('status', trans('A reset link has been sent to your email address.'));
        } else {
            return redirect()->back()->withErrors(['error' => trans('A Network Error occurred. Please try again.')]);
        }
    }

    public function resetPassword(Request $request)
    {
        // return "Hello112";

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed',
            'token' => 'required' ]
        );
    
        //check if payload is valid before moving on
        if ($validator->fails()) {
            return redirect()->back()->withErrors(['email' => 'Please complete the form']);
        }
    
        $password = $request->password;
    // Validate the token
        $tokenData = DB::table('password_resets')
        ->where('token', $request->token)->first();
    // Redirect the user back to the password reset request form if the token is invalid
        if (!$tokenData) return view('auth.passwords.email');
    
        $user = User::where('email', $tokenData->email)->first();
    // Redirect the user back if the email is invalid
        if (!$user) return redirect()->back()->withErrors(['email' => 'Email not found']);
    //Hash and update the new password
        $user->password = \Hash::make($password);
        $user->update(); //or $user->save();
    
        //login the user immediately they change password successfully
        Auth::login($user);
    
        //Delete the token
        DB::table('password_resets')->where('email', $user->email)
        ->delete();
    
        // if ($this->sendSuccessEmail($tokenData->email)) {
            return view('/home');
        // } else {
        //     return redirect()->back()->withErrors(['email' => trans('A Network Error occurred. Please try again.')]);
        // }
    
    }

    private function sendResetEmail($email, $token)
    {
        //Retrieve the user from the database
        $user = DB::table('users')->where('email', $email)->select('name', 'email')->first();
        //Generate, the password reset link. The token generated is embedded in the link
        $link = env('APP_URL') . '/password/reset/' . $token . '?email=' . urlencode($user->email);
        // return $link;
        try {
            //Here send the link with CURL with an external email API 
            $data1=[
                'link'=>$link
            ]; 
            Mail::send('resetpasswordlink',$data1,function($message)use($email){
                $message->to($email)->subject('Reset Password link');
                $message->from(env('MAIL_USERNAME'),"RK University");
            });
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
