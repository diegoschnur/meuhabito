<?php

namespace App\Http\Controllers;

use App\Habito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HabitosController extends Controller
{
    public function index(){
        $habitos = Habito::all();
        return view('habitos', ['habitos'=>$habitos]);
    }
}
