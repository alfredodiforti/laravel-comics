@extends('layouts.structure')

@section('content')
<main>
     <div class="backgroundhero">
         <div class="container">
            <img src="{{ asset('img/cover-home.jpg')}}" alt="cover">
         </div>        
     </div>
     <section class="comics">
         <div class="container">
             <ul>
                 @foreach ($comics as $comic)
                 <li>
                     <a href="{{ route('comic-det', $comic['slug']) }}"> <img src="{{$comic['image']}}" alt="{{$comic['title']}}">{{$comic['title']}}</a>
                 </li>                     
                 @endforeach
             </ul>
         </div>
     </section>
</main>
@endsection
