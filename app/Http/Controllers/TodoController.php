<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // User

    public function IndexTodos()
    {
       $todos = Todo::paginate();

        return view('Todos.Index', compact('todos'));
    }

    public function ShowTodos(Todo $todo){

        return view('Todos.Show', compact('todo'));
    }

    
    // Admin
    public function Index() { 

      $todos = Todo::paginate();

      return view('Admin.Todos.Index', compact('todos'));
     }

     public function Create(){
        return view('Admin.Todos.Create');
     }

     public function Store(Request $request){
      $todo = new Todo();

      $todo->FechaT = $request->FechaT;
      $todo->FechaE = $request->FechaE;
      $todo->Escuela = $request->Escuela;
      $todo->Nombre = $request->Nombre;
      $todo->DiasA = $request->DiasA;
      $todo->Grupo = $request->Grupo;
      $todo->Tel = $request->Tel;
      $todo->Paquete = $request->Paquete;
      $todo->Nota = $request->Nota;
      $todo->Estatus = $request->Estatus;

      $todo->save();

      $todos = Todo::paginate();

      return view('Admin.Todos.Index', compact('todos'));
      }

      public function Show(Todo $todo){

         return view('Admin.Todos.Show', compact('todo'));
      }

      public function Edit(Todo $todo){
         return view('Admin.Todos.Edit', compact('todo'));
     }
 
     public function Update(Request $request, Todo $todo){
         $todo->FechaT = $request->FechaT;
         $todo->FechaE = $request->FechaE;
         $todo->Escuela = $request->Escuela;
         $todo->Nombre = $request->Nombre;
         $todo->DiasA = $request->DiasA;
         $todo->Grupo = $request->Grupo;
         $todo->Tel = $request->Tel;
         $todo->Paquete = $request->Paquete;
         $todo->Nota = $request->Nota;
         $todo->Estatus = $request->Estatus;
         
         $todo->save();
 
         return redirect()->route('Todos.Show', $todo->id);
     }

     public function Delete(Todo $todo){
         return view('Admin.Todos.Delete', compact('todo'));
     }

     public function Destroy(Todo $todo){
         $todo->delete();

         return redirect()->route('Todos.Index');
     }

}