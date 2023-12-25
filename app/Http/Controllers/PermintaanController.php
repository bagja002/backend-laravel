<?php

namespace App\Http\Controllers;

use App\Model\Permintaan_barang;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PermintaanController extends Controller
{
    //
    //Get All Penerimaan 
    public function index(){
        $permintaan_barang = Permintaan_barang::all();

        return response()->json($permintaan_barang);
    }

    //get Permintaan by id 
    public function getPermintaanByid($id){
        $permintaan_barang = Permintaan_barang::find($id);
        
        return response()->json($permintaan_barang);
    }

    public function store(Request $request){

        try{

            $data = $request->validate([
                "id_user"=>'required|string',
                'nama_user'=>'required|string',
                'departement'=> 'required|string',
                'id_barang'=> 'required|string',
                'nama_barang'=> 'required|string',
                'kuantiti'=>'required|string',
                'keterangan'=>'string'
                
            ]);

        }catch(ValidationException $e){
            return response()->json(['error' => $e->errors()], 422);
        }

        $permintaan_barang = Permintaan_barang::create($data);
        return response()->json($permintaan_barang);
    }
}
