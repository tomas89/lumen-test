<?php

namespace App\Http\Controllers;

use App\User;
use  Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;



class UsersController extends Controller
{


    function index(Request $request)
    {
       /*$user = new User();
       $user->name = 'ThomasB';
       $user->email = 'tfbm89@gmail.com';
       $user->password = 'W8uiq9da.';*/

       //para que esto funcione debemos descomentar eloquent en Boostrap/app

       if($request->isJson()){
            $users = User::all();
            return response()->json([$users], 200);
       }

       return response()->json(['error' => 'Unathorized'], 401,[]);

    }

    function createUser(Request $request)
    {
        if($request->isJson())
        {

            $data = $request->json()->all();

               /* $this->validate($request,[
                    'name' => 'required|string',
                    'username' => 'required|string',
                    'email' => 'required|string',
                    'password' => 'required|string'
                ]);*/


            /*    $user = User::create([
                    'name' => $data['name'],
                    'username' => $data['username'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'api_token' => Str::random(60)
            ]);



            return response()->json($user, 201);
            */

            var_dump($data);
       }

       return response()->json(['error' => 'Unathorized'], 401,[]);


    }


}
