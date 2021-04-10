<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RealState;
use App\Models\RealStateCollections;


class RealStateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $realStates = RealState::where('user_id', '=' , $user->id)->paginate();
        return $realStates;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $user = $request->user(); //trae el usuario logeado

        //busca las propiedades de ese usuario
        $realState = RealState::where('user_id', '=' , $user->id)->where('id','=',$id)->first();

        return $realState;
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
        $user = $request->user();
        //busca las propiedades del usuario logeado que cohincidan con el id enviado
        $realState = RealState::where('user_id', '=' , $user->id)->where('id','=',$id)->first();

        //1.traer los datos enviados en la peticion
        //2.actualizar $realState y guardar
        //3.devolver la propiedad con datos actualizados
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $user = $request->user();
        //busca las propiedades del usuario logeado que cohincidan con el id enviado
        $realState = RealState::where('user_id', '=' , $user->id)->where('id','=',$id)->delete();

        return ($realState) ? [ // si se encontro se elimina
            'error'=> false,
            'message'=>'Propiedad Eliminada'
        ] : [ //si no muestra un mensaje de error pero el error sigue como falso.
            'error'=> false,
            'message'=>'No se encontro la propiedad'
        ];
    }
}
