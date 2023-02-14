@extends('layout.app')

@section('content')
<div style="margin: 20px 35px ;border-left: 2px orange solid; padding-left: 10px">

    <h1 class="note">Note</h1>
    <ul style="list-style: none">
        <li>Note: {{$note->degree}}</li>
        <li>Region: {{$note->region}}</li>
        <li>Tanana: {{$note->city}}</li>
    </ul>

    <hr>
    <p style="margin-top: 25px">{{$note->note}}</p>
    <div style="margin-top: 15px">
        <p  style=" 
        font-size: 0.9em;
        padding: 2px 1px; font-weight:bold">Le {{$note->created_at->format('y-m-d, h:m:s')}} </p>
    </div>
    <div style="margin:20px 0; display: flex">
        <a href="{{route('notes.edit', $note)}}">Edit</a> | 
        <form action="{{route('notes.destroy', $note)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit">Delete</button>
        </form>
    </div>
</div>
  

@endsection