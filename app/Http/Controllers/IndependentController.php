<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndependentController extends Controller
{
    // User

    public function IndexIndependents()
    {
       $todos = Todo::paginate();

        return view('Independents.Index', compact('todos')); 
        //falta crear vista usuario, pero en teoria es lo mismo que el index de abajo
    }
    

    // Admin
    public function Index() { 

      $todos = Todo::paginate();

      return view('Admin.Independents.Index', compact('todos'));
     }

}