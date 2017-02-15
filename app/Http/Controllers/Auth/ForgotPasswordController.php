<?php
namespace Agilin\Http\Controllers\Auth;

use Agilin\Http\Controllers\ApiController;
use Agilin\Models\Security\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends ApiController {

    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
     */
    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getResetToken(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);
        $user = User::where('email', $request->input('email'))->first();
        if ( ! $user)
        {
            return $this->respondBadRequest();
        }
        //$token = $this->broker()->createToken($user);
        return $this->sendResetLinkEmail($request);
        //return $this->respond(['data' => [0 => ['token' => $token]]]);
        //return response()->json(Json::response(['token' => $token]));


    }
}