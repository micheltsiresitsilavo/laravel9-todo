<?php

namespace App\Http\Controllers;
use App\Models\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todos.home', compact('todos'));
    }
    public function store(Request $request){

        $todo_valide = $request->validate([
            'todo' => 'required',
        ]);

        Todo::create($todo_valide);

        return to_route('todos.home');
    }

    public function edit(Todo $todo){

        return view('todos.edit', compact('todo'));
    }

    public function update(Todo $todo, Request $request){

        $todo_valide = $request->validate([
            'todo' => 'required',
        ]);
        $todo->update($todo_valide);

        return to_route('todos.home');
    }

    public function destroy(Todo $todo){
        $todo->delete();

        return to_route('todos.home');
    }
}
