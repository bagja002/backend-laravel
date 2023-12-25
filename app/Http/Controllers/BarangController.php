<?php

namespace App\Http\Controllers;

use App\Model\barang;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class BarangController extends Controller
{
    ////get All barang 
    public function index()
    {
        $barang = barang::all();

        return response()->json($barang);
    }

    public function getBarangByid($id)
    {
        $barang = barang::find($id);
        return response()->json($barang);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                "nama_barang" =>'required|string',
                "lokasi"=>'required|string',
                "total_barang"=>'required|string',
                "jenis_barang"=>'required|string',
                "status"=>'string'
            ]);
            $totalBarang = intval($data['total_barang']);

            if ($totalBarang === 0) {
                $data['status'] = 'Kosong'; // Set status to empty if total_barang is 0
            } elseif ($totalBarang > 10) {
                $data['status'] = 'Terpenuhi'; // Set status to 'Terpenuhi' if total_barang is greater than 10
            }
            


        } catch (ValidationException $e) {
            return response()->json(['error' => $e->errors()], 422);
        }

        $barang = barang::create($data);
        return response()->json($barang);
    }
}
