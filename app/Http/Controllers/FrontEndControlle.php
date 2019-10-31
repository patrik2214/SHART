<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndControlle extends Controller
{
    //funcion index
    public function index()
    {
        //va a retornar una vista que esta en la carpeta web y el archivo se llama index
        return view('web.index');
    } 
}
