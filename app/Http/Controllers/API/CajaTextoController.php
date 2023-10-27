<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CajasTexto;

class CajaTextoController extends Controller
{
    public function get(){
        try { 
            $data = CajasTexto::get();
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }
  
    public function create(Request $request){
        try {
            $data['nombre'] = $request['nombre'];            
            $data['id_categoria'] = $request['id_categoria'];
            $res = CajasTexto::create($data);
            return response()->json( $res, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    public function getById($id){
        try { 
            $data = CajasTexto::find($id);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    public function update(Request $request,$id){
        try { 
            $data['nombre'] = $request['nombre'];
            $data['id_categoria'] = $request['id_categoria'];
            Person::find($id)->update($data);
            $res = CajasTexto::find($id);
            return response()->json( $res , 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }
  
    public function delete($id){
        try {       
            $res = CajasTexto::find($id)->delete(); 
            return response()->json([ "deleted" => $res ], 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }
}
