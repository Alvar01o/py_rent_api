<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar todos los usuarios
        //agregar paginacion
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
                'user_id'=>$real_state_id->id,
                'status' => $request->get('status'),
                'description' => $request->get('description'),
                'price' => $request->get('price'),
            ];
    
            $validator = Validator::make($newRow , [ //validar los datos creados arriba
                'name' => 'required|unique:posts|max:255',
                'user_id' => 'required',
            ]);
    
            if ($validator->fails()) { //si la validacion falla mostrar los errores
                return  $validator->errors()->add('field', 'Algo salió mal');
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
    public function show($id)
    {
        // devolver datos de usuario por id
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
