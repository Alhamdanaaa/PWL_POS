<?php
namespace App\Http\Controllers;

use PhpParser\Node\Expr\Cast\Object_;

class WelcomeController extends Controller{
    public function index() {
        $breadcrumb = (Object)[
            'title' => 'Selamat Datang',
            'list' => ['Homde','Welcome']
        ];
        $activeMenu = 'dashboard';

        return view('welcome', ['breadcrumb'=>$breadcrumb, 'activeMenu' => $activeMenu]);
    }
}