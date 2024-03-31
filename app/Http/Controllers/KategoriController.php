<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\KategoriModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable){
        return $dataTable->render('kategori.index');
    }
    public function create(): View{
        return view('kategori.create');
    }

    public function store(StorePostRequest $request): RedirectResponse{
    //     $validated = $request->validate([
    //         'kategori_kode' => 'bail|required|unique:m_kategori|max:6', 
    //         'kategori_nama' => 'bail|required|unique:m_kategori|max:25',   
    //     ]);
    // return redirect('/kategori');
        // retrived the validated input data 
        $validated = $request->validated();

        // retrived a portion of the validated input data
        $validated = $request->safe()->only(['kategori_kode','kategori_nama']);
        $validated = $request->safe()->except(['kategori_kode','kategori_nama']);

        // store the proses
        return redirect('/kategori');
    }

    public function update($id){
        $kategori = KategoriModel::find($id);
        return view('kategori.update',['data' => $kategori]);
    }

    public function update_save($id, Request $request){
        $kategori = KategoriModel::find($id);

        $kategori->kategori_kode = $request->kategori_kode;
        $kategori->kategori_nama = $request->kategori_nama;

        $kategori->save();

        return redirect('/kategori');
    }
    public function destroy($id)
    {
        $kategori = KategoriModel::find($id);
        $kategori->delete();

        return redirect('/kategori');
    }

}
