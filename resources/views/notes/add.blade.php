@extends('layout.app')

@section('content')
<div style="  display:flex; flex-direction:column; align-items:center; margin: 25px 0">
    <h1 class="add_note" >Add Note</h1>
    @if ($errors->any())
    <div style="background-color: rgba(243, 20, 20, 0.658);border-radius:8px;font-weight:bold; max-width: 50%; display: flex; align-items: center;padding:15px; margin: 15px 0">
        <ul style="list-style: none">
            @foreach ($errors->all() as $error)
                <li style="color:rgba(243, 9, 9, 0.849)">{{$error}}</li>
            @endforeach
        </ul>
    </div>
        
    @endif
    <form action="{{route('notes.store')}}" method="POST">
        @csrf
        <label for="note">Note</label><br>
        <textarea name="note"  cols="30" rows="10" style="padding: 20px ; width: 335px; height: 128px;" placeholder="Tap here your note"></textarea><br><br>
        <input type="text" name="degree" placeholder="Degree"><br><br>
        <input type="text" name="region" placeholder="Region"><br><br>
        <input type="text" name="city" placeholder="City"><br><br>
        <button type="submit">Add Your Note</button>
    </form>
</div>
    
@endsection
