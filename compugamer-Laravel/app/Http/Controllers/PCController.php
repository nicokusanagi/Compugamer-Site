<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\products;
use Illuminate\Http\Request;

class PCController extends Controller
{
    public function index(){
        $products = Products::all();
        return view ('index', compact('products'));
    }
    public function adicionar(){
        return view ('adicionar');
    }
    public function fone(){
        return view ('fone');
    }
    public function gabin(){
        return view ('gabin');
    }
    public function mouse(){
        return view ('mouse');
    }
    public function teclado(){
        return view ('teclado');
    }
    public function login(){
        return view ('login ');
    }
}
