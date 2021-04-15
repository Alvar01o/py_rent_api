<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HouseDetails;
use Illuminate\Support\Facades\Validator;

class HouseDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $user = $request->user();
        $house_details = HouseDetails::where('user_id', '=' , $user->id)->paginate();
        return $house_details;   
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
            'rooms' => $request->get('rooms'),
            'kitchen' => $request->get('kitchen'),
            'bathrooms' => $request->get('bathrooms'),
            'house_information_id'=>$request->get('house_information_id'),
        ];

        $validator = Validator::make($newRow , [ //validar los datos creados arriba
            'user_id' => 'required',
            'rooms'=>'required',
            'kitchen'=>'required',
            'house_information_id'=> 'required',
            'bathrooms' => 'required',

        ]);

        if ($validator->fails()) { //si la validacion falla mostrar los errores
            return  $validator->errors()->add('oops', 'i did it again');
        } else { //si no hubo error de validacion guardar los datos y retornar la fila guardada
           $nuevaFilaEnDB =  new HouseDetails($newRow);
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
        $house_details = HouseDetails::where('user_id', '=' , $user->id)->where('id','=',$id)->first();
        if(is_null($house_details)){
            return [ //si no muestra un mensaje de error pero el error sigue como falso.
                'error'=> true,
                'message'=>'No se encontro la propiedad'
            ];
        }
        return $house_details;
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
        {
            $user = $request->user();
            $newRow = [ // preparar datos para insertar en db
            'user_id'=>$user->id,
            'rooms' => $request->get('rooms'),
            'kitchen' => $request->get('kitchen'),
            'bathrooms' => $request->get('bathrooms'),
            'house_information_id'=>$request->get('house_information_id'),
            ];
            //busca las propiedades del usuario logeado que coincidan con el id enviado
            $house_details = HouseDetails::where('user_id', '=' , $user->id)->where('id','=',$id)->first();
            $validator = Validator::make($newRow , [ //validar los datos creados arriba
                'user_id' => 'required',
                'rooms'=>'required',
                'kitchen'=>'required',
                'house_information_id'=> 'required',
                'bathrooms' => 'required',
            ]);
            if ($validator->fails()) { //si la validacion falla mostrar los errores
                return  $validator->errors();
            }
    
            if(is_null($house_details)){
                return [ //si no muestra un mensaje de error pero el error sigue como falso.
                    'error'=> true,
                    'message'=>'oops i did it again'
                ];
            }
    
            $house_details->update($newRow);
            return $house_details;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = $request->user();
        //busca las propiedades del usuario logeado que cohincidan con el id enviado
        $house_details = HouseDetails::where('user_id', '=' , $user->id)->where('id','=',$id)->delete();

        return ($house_details) ? [ // si se encontro se elimina
            'error'=> false,
            'message'=>'Propiedad Eliminada'
        ] : [ //si no muestra un mensaje de error pero el error sigue como falso.
            'error'=> false,
            'message'=>'No se encontro la propiedad'
        ];
}
}
