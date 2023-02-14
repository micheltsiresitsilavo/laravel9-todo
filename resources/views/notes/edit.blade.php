@extends('layout.app')

@section('content')
    <h1>Note edit</h1>
    <form action="{{route('notes.update', $note)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="note">Note</label><br>
        <textarea name="note"  cols="30" rows="10">{{$note->note}}</textarea><br><br>
        <input type="text" name="degree" value="{{$note->degree}}" placeholder="Degree"><br><br>
        <input type="text" name="region" value="{{$note->region}}" placeholder="Region"><br><br>
        <input type="text" name="city" value="{{$note->city}}" placeholder="City"><br><br>
        <button type="submit">Edit Your Note</button>
    </form>
@endsection