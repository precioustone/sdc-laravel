<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Facades\JWTFactory;
use App\User;
use Hash;
use Exception;

class AuthController extends Controller
{
    protected $username = 'username';
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
        //$this->middleware('cors');
    }
    /**
     * Create a User
     * @param  Request $request
     * @return [type]
     */
    public function register(Request $request)
    {
    	$input = $request->all();
        $input['password'] = Hash::make($input['password']);
        //return response()->json(['cred' => json_encode($input)], 201);
        try {
            User::create($input);
            return response()->json(['result'=>true]);
        } catch (Exception $e) {
            //return response()->json(['error'=> 'Something Went Wrong!!']);
            return response()->json(['error'=> $e->getMessage()]);
        }
    }

    /**
     * Get a JWT token via given credentials.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        
        $user = User::where('username', $request->username)->first();
        //return response()->json(['cred' => json_encode($user)], 201);
        if (Hash::check($request->password, $user->password))
        {
            $token = $this->guard()->attempt($credentials);
            if ($token) {
                return $this->respondWithToken($token);
            }
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    /**
     * Get the authenticated User
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function test()
    {
        return response()->json(['status' => 200, 'message' => 'succcesful',]);
    }

    /**
     * Log the user out (Invalidate the token)
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        $this->guard()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expiredAt' => $this->guard()->factory()->getTTL() * 60
        ]);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard()
    {
        return Auth::guard();
    }
}
