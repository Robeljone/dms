<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Users;
use Illuminate\Support\Facades\Session;

class User extends Controller
{
    function login_pg()
    {
        return view("login",['script'=>'login.js']);
    }
    function user_pg()
    {
        $user = Users::query()->get();
       return view("user",['user'=>$user,'script'=>'user.js']);
    }

    function Login(Request $request)
    {
        $request->validate([
            "username"=>"required|string",
            "password"=>"required"
        ]);
        try {
            $user_data = Users::query()
                ->where('user_name','=',$request->username)
                ->where('status','=',1)
                ->get();
            if (count($user_data)>0)
            {
                if (Hash::check($request->password,$user_data[0]['password']))
                    {
                        $request->session()->put('loginId', $user_data[0]['id']);
                        $request->session()->put('user', $user_data);
                        return response()->json([
                            'message' => "Login Success",
                            'status' => 'Success',
                        ], 200);
                    }
                else
                    {
                        return response()->json([
                            'message' => "Password incorrect",
                            'status' => 'error',
                        ], 400);
                    }
            }
            else
            {
                return response()->json([
                    'message' => "User Not Found",
                    'status' => 'error',
                ], 400);
            }
        }catch (Exception $e)
        {
            Log::debug($e);
            return response()->json([
                'message' => "Api Error",
                'status' => 'error',
            ], 400);
        }
    }

    function Logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
    function add_user(Request $request)
    {
       $request->validate([
           "full_name"=>"required|string",
           "user_name"=>"required|string",
           "password"=>"required",
           "role"=>"required"
       ]);
        try {
            Log::debug($request);
            $pass_hash = bcrypt($request->password);
            Users::query()->create([
                "name"=>$request->full_name,
                "user_name"=>$request->user_name,
                "password"=>$pass_hash,
                "status"=>1,
                "role"=>$request->role,
                "cuid"=>1
            ]);
            response('Success','200');
        }catch (Exception $e)
        {
            Log::debug($e);
            response('User Add Failed','400');
        }
    }
}
