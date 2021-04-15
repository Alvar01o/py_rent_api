<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
        //listar todos los usuarios
        //agregar paginacion
        public function index(Request $request)
    {
        $user = $request->user();
        $users = User::all();
        return $users;
    }
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        // devolver datos de usuario por id
        $user = $request->user(); //trae el usuario logeado
        //busca las propiedades de ese usuario
        //SELECT * FROM my_database.users where id =3
        $User = User::where('id','=',$id)->first();
        if(is_null($User)){
            return [ //si no muestra un mensaje de error pero el error sigue como falso.
                'error'=> true,
                'message'=>'No se encontro la propiedad'
            ];
        }
        return $User;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
