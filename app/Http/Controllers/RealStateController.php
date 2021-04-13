<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RealState;
use App\Models\RealStateCollections;
use Illuminate\Support\Facades\Validator;

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
        $user = $request->user(); //traer usuario logeado
        $newRow = [ // preparar datos para insertar en db
            'user_id'=>$user->id,
            'name' => $request->get('name')
        ];

        $validator = Validator::make($newRow , [ //validar los datos creados arriba
            'name' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) { //si la validacion falla mostrar los errores
            return  $validator->errors();
        } else { //si no hubo error de validacion guardar los datos y retornar la fila guardada
           $nuevaFilaEnDB =  new RealState($newRow);
           $nuevaFilaEnDB->save();
           return $nuevaFilaEnDB;
        }

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
        if(is_null($realState)){
            return [ //si no muestra un mensaje de error pero el error sigue como falso.
                'error'=> true,
                'message'=>'No se encontro la propiedad'
            ];
        }
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
        $newRow = [ // preparar datos para insertar en db
            'name' => $request->get('name')
        ];
        //busca las propiedades del usuario logeado que cohincidan con el id enviado
        $realState = RealState::where('user_id', '=' , $user->id)->where('id','=',$id)->first();
        $validator = Validator::make($newRow , [ //validar los datos creados arriba
            'name' => 'required|alpha_dash|max:255'
        ]);
        if ($validator->fails()) { //si la validacion falla mostrar los errores
            return  $validator->errors();
        }

        if(is_null($realState)){
            return [ //si no muestra un mensaje de error pero el error sigue como falso.
                'error'=> true,
                'message'=>'Inválido, imposible continuar'
            ];
        }
        //1.traer los datos enviados en la peticion
        
        //2.actualizar $realState y guardar
        //var_dump($realState->toArray());
        $realState->name=$request->get('name');
        //var_dump($realState->toArray()); die;
        //3.devolver la propiedad con datos actualizados
        $realState->save();
        return $realState;
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
