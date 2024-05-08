<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenjualanController extends Controller
{
    
    public function index(){
        return PenjualanModel::all();
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'pembeli' => 'required',
            'penjualan_kode' => 'required',
            'penjualan_tanggal' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $barang = PenjualanModel::create([
            'user_id' => $request->user_id,
            'pembeli' => $request->pembeli,
            'penjualan_kode' => $request->penjualan_kode,
            'penjualan_tanggal' => $request->penjualan_tanggal,
            'image' => $request->image->hashName(),
            // 'image' => $request->image,
        ]);
        return response()->json($barang,201);
    }
    public function show($id)
    {
        $transaksi = PenjualanModel::find($id);

        // Jika transaksi ditemukan
        if ($transaksi) {
            return response()->json([
                'success' => true,
                'transaksi' => $transaksi,
            ], 200);
        }

        // Jika transaksi tidak ditemukan
        return response()->json([
            'success' => false,
            'message' => 'Transaksi not found.',
        ], 404);
    }
}
