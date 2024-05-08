<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function index(){
        return BarangModel::all();
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'barang_kode' => 'required|string|min:3|unique:m_barang,barang_kode',
            'barang_nama' => 'required|string|max:100', // nama harus diisi, berupa string, dan maksimal 100 karakter
            'kategori_id' => 'required| integer',
            'harga_jual' => 'required| integer', 
            'harga_beli' => 'required| integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $barang = BarangModel::create([
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'image' => $request->image->hashName(),
            // 'image' => $request->image,
        ]);
        return response()->json($barang,201);
    }
    public function show(BarangModel $id){
        return $id;
    }
    public function update(Request $request,BarangModel $id){
        $id->update($request->all());
        return BarangModel::find($id);
    }
    public function destroy(BarangModel $id){
        $id->delete();
        return response()->json([
            'success'=>true,
            'message'=>'Data terhapus',
        ]);
    }
}
