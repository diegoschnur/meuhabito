<?php

namespace App\Http\Controllers;

use App\Habito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HabitosController extends Controller
{
    public function index(){
        $habitos = Habito::all();
        return view('habitos.index', ['habitos'=>$habitos]);
    }

    public function create(){
        return view ('habitos.create');
    }
}
