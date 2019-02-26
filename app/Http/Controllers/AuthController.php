<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Country;
use App\User;
use App\testImage;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','signup','getCountries']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
 
        $credentials = request(['email', 'password']);

        $token = auth()->attempt($credentials);
       
        if (!  $token ) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
      
       return $this->respondWithToken($token);
    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function signup(Request $request)
    {
        // dd(base64_decode($request['image']['value']) );
   
        // $imageName = time().'.'.$request->image->getClientOriginalExtension();
        // $request->image->move(public_path('images'), $imageName);
        // dd( $imageName);
   
        //  $image= new testImage();
        //  $image->image = $name;
        //  $image->save();
        // dd($request->all());
         User::create($request->all() );
         return $this->login($request);
    }

    // getCountries

    public function getCountries(){

        $countries=Country::get();

        // return response(countries)->json(['response' => 'success', 'countries' => $countries]);
        return response()->json($countries, 201);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
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
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth('api')->factory()->getTTL() * 60,
            // 'expires_in' => auth('api')->factory()->getTTL() * 60,
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user0' => auth()->user()
        ]);
    }




}
