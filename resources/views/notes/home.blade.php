@extends('layout.app')

@section('content')
   
    <div style="margin-top: 25px; ">

        {{-- <ul style="list-style: none">
            @foreach ($notes as $note)
                <li>{{$note->note}} <a href="{{route('notes.show', $note)}}">Read more</a></li>
            @endforeach
        </ul> --}}
        
            @foreach ($notes as $note)
            <div style=" background-color:rgb(51, 41, 41); color: white; padding: 25px; margin: 10px 0; display: flex; flex-direction:column ">
                {{$note->note}} <a href="{{route('notes.show', $note)}}">Read more</a>
            </div>
        @endforeach
    </div>
@endsection