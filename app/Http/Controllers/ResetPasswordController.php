<?php

namespace App\Http\Controllers;
use App\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ChangePassword;

class ResetPasswordController extends Controller
{
    public function resetRequest(Request $request ){
        if (!$this->validateEmail($request->email)) {
            return $this->failedResponse();
        }
        $this->send($request->email);
        return $this->successResponse();
    }
    
    // ----------------------------------------------
    public function validateEmail($email)
    {
        return !!User::where('email', $email)->first();
    }
    // ----------------------------------------------
    public function failedResponse()
    {
        return response()->json([
            'error' => 'Email does\'t found on our database'
        ], Response::HTTP_NOT_FOUND);
    }
    // ----------------------------------------------
    public function successResponse()
    {
        return response()->json([
            'data' => 'Reset Email is send successfully, please check your inbox.'
        ], Response::HTTP_OK);
    }
    // ----------------------------------------------

    public function send($email)
    {
        $token = $this->createToken($email);
        Mail::to($email)->send(new ResetPasswordMail($token));
    }
   // ----------------------------------------------

    public function createToken($email)
    {
        $oldToken = DB::table('password_resets')->where('email', $email)->first();
        if ($oldToken) {
            return $oldToken->token;
        }
        $token = str_random(60);
        $this->saveToken($token, $email);
        return $token;
    }
    
   // ----------------------------------------------

    public function saveToken($token, $email)
    {
        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
    }

        //ask for new password
    public function process(ChangePassword $request)
    {
        return $this->getPasswordResetTableRow($request)->count()> 0 ? $this->changePassword($request) : $this->tokenNotFoundResponse();
    }
    private function getPasswordResetTableRow($request)
    {
        return DB::table('password_resets')->where(['email' => $request->email,'token' =>$request->resetToken]);
    }
    private function tokenNotFoundResponse()
    {
        return response()->json(['error' => 'Token or Email is incorrect'],Response::HTTP_UNPROCESSABLE_ENTITY);
    }
    private function changePassword($request)
    {
        $user = User::whereEmail($request->email)->first();
        $user->update(['password'=>$request->password]);
        $this->getPasswordResetTableRow($request)->delete();
        return response()->json(['data'=>'Password Successfully Changed'],Response::HTTP_CREATED);
    }

}
