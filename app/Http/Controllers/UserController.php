<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
    // Prak 6(awal)
        // // tambah data user dengan Eloquent Model
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan', 
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        // UserModel::insert($data);//tambah data ke tabel

        // // coba akses model UserModel
        // $user = UserModel::all();//ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);

    //Prak 6 (Akhir) 
        // tambah user dengan Eloquent Model
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);//update data user
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);//update data user
        
        // // coba akses model UserModel
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);
        
        // $user = UserModel::Find(1);
        // return view('user', ['data' => $user]);
        // $user = UserModel::where('level_id',1)->first();
        // return view('user', ['data' => $user]);
        // $user = UserModel::firstwhere('level_id',1);
        // return view('user', ['data' => $user]);
        $user = UserModel::findor(20,['username','nama'],function(){
            abort(404);
        });
        return view('user', ['data' => $user]);
    }
}