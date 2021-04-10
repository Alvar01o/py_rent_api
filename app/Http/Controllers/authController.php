<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use App\Http\Resources\UserLogged;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{

    public function login(Request $request) {
        //validacion para correo y contrasenha
        $validator = Validator::make($request->all() , [
            'email' => 'required|email|between:0,72',
            'password' => 'required|between:0,72',
        ]);

        if ($validator->fails()) { //si la validacion falla mostrar los errores
            return  $validator->errors();
        }

        $user = User::where('email', $request->email)->first(); //sino guarda el usuario en esta variable

        if (empty($user) || !Hash::check($request->password, $user->password)) { //si no se encontro el usuario o si no cohinciden la contrasena enviada con la que esta en la base de datos muestra un error
            return [
                'email' => ['The provided credentials are incorrect.'],
            ];
        }
        //si va todo bien genera el token y retorna el usuario logeado
        $user->token = $user->createToken($user->name)->plainTextToken;
        return new UserLogged($user);
    }

    public function logout(Request $request){

        if(!empty($request->user())) {
            $request->user()->currentAccessToken()->delete();
        }

        return response(['message' => 'Logout successfully'], 200)
            ->header('Content-Type', 'text/plain');

    }

    public function AuthError(Request $request) {
        return ['message'=>'Check Documentation. You should not be here.'];
    }

}
