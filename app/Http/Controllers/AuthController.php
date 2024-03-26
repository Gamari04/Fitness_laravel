<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields=$request->validate([
            'name'=>'required|string',
            'email'=>'required|string|unique:users,email',
            'password'=>'required|string|confirmed'
        ]); 
        $user =User::create([
             'name'=>$fields['name'],
             'email'=>$fields['email'],
             'password'=>bcrypt($fields['password'])
        ]);
        $token=$user->createToken('myapptoken')->plainTextToken;
        $response=[
            'user' =>$user,
            'token'=>$token
        ];
        return response($response,201);    
    }

    public function login(Request $request)
    {

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            $response = [
                'Message' => 'User name or password is incorect'
            ];

            return response()->json($response, 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'message' => 'User successfully login',
            'Token' => $token,
            'User' => $user,
        ];

        return response()->json($response, 200);
    }
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Logged out successfully'
        ]);
    }
}
