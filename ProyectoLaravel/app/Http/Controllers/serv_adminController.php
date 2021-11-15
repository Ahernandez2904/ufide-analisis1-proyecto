<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DoctrineDBALDriverPDOConnection;
use Illuminate\Support\Facades\DB;

class serv_adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = DB::select('CALL `fungdb`.`mostrar_servicios`');
        return view('serviciosAdmin', [ "servicios" => $servicios ]);
    }
   
    public function create()
    {
        //
        return view ("serviciosAdmin");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        //serv_adminController::create($request->all());


        DB::select('CALL `fungdb`.`crear_servicio`("'.
        $request->input('nombre').'", '.
        $request->input('costo').','.
        $request->input('tiempo_estimado').');');
       
        return view ("serviciosAdmin");
        
   
 
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
        return view ("serviciosAdmin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view ("serviciosAdmin");
    }
}
