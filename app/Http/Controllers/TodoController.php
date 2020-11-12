<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // User
    public function TodoStore() {
       //$collection = (new MongoDB\Client)->Electronics->Cameras;
       //$cameraCount = $collection->count();
       //$page = request("pg") == 0 ? 1 : request("pg");
       //$cameras = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
       return view('Todos.Index');
    }

    // Admin
    public function Index() { 
        return view('Admin.Todos.Index');
     }
}