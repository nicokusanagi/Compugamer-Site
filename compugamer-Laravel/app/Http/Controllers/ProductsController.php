<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view ('index');
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
