@extends('layout.app')

@section('content')
   
    <div style="margin-top: 25px; ">

      @if ($notes->count()>0)
          
      @foreach ($notes as $note)
      <div style=" background-color:rgb(51, 41, 41); color: white; padding: 25px; margin: 10px 0; display: flex; flex-direction:column ">
          {{$note->note}} <a href="{{route('notes.show', $note)}}">Read more</a>
      </div>
  @endforeach
  @else
  <h2 style="text-align:center; margin: 35% 0">Note is empty! Please add note</h2>   
      @endif

        
    </div>
@endsection