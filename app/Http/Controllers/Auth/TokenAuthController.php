<?php


namespace Agilin\Http\Controllers\Auth;


use Agilin\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Agilin\Utils\Transformers\UserTransformer;
use Illuminate\Support\Facades\Auth;

class TokenAuthController extends ApiController {

    protected $userTransformer;

    public function __construct(UserTransformer $userTransformer)
    {
        $this->userTransformer = $userTransformer;
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ( ! $token = Auth::guard('api')->attempt($credentials))
        {
            return $this->setStatusCode(401)->respondWithError('Invalid Credentials');
        }

        $user = Auth::guard('api')->user();
        $data = array_merge($this->userTransformer->transform($user), ['token' => $token]);
        return $this->respond($data);
    }

    public function validateToken()
    {
        if (Auth::guard('api')->authenticate()) {
            return $this->respond('true');
        }
    }
}
