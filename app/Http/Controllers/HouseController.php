<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\HouseInformation;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $houses = HouseInformation::where('user_id', '=' , $user->id)->paginate();
        return $houses;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. traer usuario logeado
        //2. preparar datos para insertar en db
        //2.1 -real_state_id, description, status, price
        //3. validar los datos
        //4. si la validacion falla mostrar los errores
        //5. si no hubo error de validacion guardar los datos y retornar la fila guardada
        $user = $request->user(); //traer usuario logeado
        $newRow = [ // preparar datos para insertar en db
            'user_id'=>$user->id,
            'status' => $request->get('status'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'real_state_id'=>$request->get('real_state_id'),
        ];

        $validator = Validator::make($newRow , [ //validar los datos creados arriba
            'description' => 'required',
            'user_id' => 'required',
            'status'=>'required',
            'price'=>'required',
            'real_state_id'=> 'required',

        ]);

        if ($validator->fails()) { //si la validacion falla mostrar los errores
            return  $validator->errors()->add('field', 'Algo salió mal');
        } else { //si no hubo error de validacion guardar los datos y retornar la fila guardada
           $nuevaFilaEnDB =  new HouseInformation($newRow);
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
        $house = HouseInformation::where('user_id', '=' , $user->id)->where('id','=',$id)->first();
        if(is_null($house)){
            return [ //si no muestra un mensaje de error pero el error sigue como falso.
                'error'=> true,
                'message'=>'No se encontro la propiedad'
            ];
        }
        return $house;
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
        $user = $request->user();
        $newRow = [ // preparar datos para insertar en db
            'user_id'=>$user->id,
            'status' => $request->get('status'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'real_state_id'=>$request->get('real_state_id'),
        ];
        //busca las propiedades del usuario logeado que coincidan con el id enviado
        $house = HouseInformation::where('user_id', '=' , $user->id)->where('id','=',$id)->first();
        $validator = Validator::make($newRow , [ //validar los datos creados arriba
            'description' => 'required',
            'user_id' => 'required',
            'status'=>'required',
            'price'=>'required',
            'real_state_id'=> 'required',
        ]);
        if ($validator->fails()) { //si la validacion falla mostrar los errores
            return  $validator->errors();
        }

        if(is_null($house)){
            return [ //si no muestra un mensaje de error pero el error sigue como falso.
                'error'=> true,
                'message'=>'Inválido, imposible continuar'
            ];
        }
       
        $house->update($newRow);
        return $house;
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
            $house = HouseInformation::where('user_id', '=' , $user->id)->where('id','=',$id)->delete();
    
            return ($house) ? [ // si se encontro se elimina
                'error'=> false,
                'message'=>'Propiedad Eliminada'
            ] : [ //si no muestra un mensaje de error pero el error sigue como falso.
                'error'=> false,
                'message'=>'No se encontro la propiedad'
            ];
    }
}
