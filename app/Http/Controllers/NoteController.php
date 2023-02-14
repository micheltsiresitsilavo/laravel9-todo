<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Mockery\Matcher\Not;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::all();
        return view('notes.home', compact('notes'));
    }

    public function create(){
        return view('notes.add');
    }

    public function store(Request $request){

       $noteValide = $request->validate([
        'note' => 'required',
        'degree' => 'required',
        'region' => 'required',
        'city' => 'required',
       ]);
        Note::create($noteValide);

        return to_route('notes.home');
    }

    public function show(Note $note){

        return view('notes.show', compact('note'));
    }

    public function edit(Note $note){
        return view('notes.edit', compact('note'));
    }

    public function update(Note $note, Request $request){
 
        $noteValide = $request->validate([
            'note' => 'required',
            'degree' => 'required',
            'region' => 'required',
            'city' => 'required',
           ]);

        $note->update($noteValide);

        return redirect("/notes/$note->id");
    }
}
