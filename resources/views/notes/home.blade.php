@extends('layout.app')

@section('content')
   
    <div style="margin-top: 25px; ">

      @if ($notes->count()>0)
          
      @foreach ($notes as $note)
      <div style="position:relative; background-color:rgba(51, 41, 41, 0.904); color: white; padding: 25px; margin: 10px 0; display: flex; flex-direction:column ">
         <div style="; display: flex; margin-bottom: 10px; position: absolute; top:0; right:0">
            <p class="minima">Created at: <span class="minima">{{$note->created_at->format('Y-m-d')}}</span></p>
         </div>
         <p style="border-left: 2px orange solid; padding-left:10px; margin-top:15px;
          display: -webkit-box;
          text-overflow:ellipsis;
          overflow: hidden;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: 3;
          
          ">
       {{$note->note}}
    </p>
    <a href="{{route('notes.show', $note)}}" style="color:rgba(68, 158, 68, 0.815); font-weight:bold; margin:15px 0;text-decoration: none; text-decoration:underline">Read more</a>

      </div>
  @endforeach
  @else
  <h2 style="text-align:center; margin: 35% 0">Note is empty 😩! Please🙏🙏🙏 add note📝 </h2>   
      @endif

        
    </div>
@endsection