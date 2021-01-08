@extends('layouts.structure')

@section('content')
<main>
     <div class="backgroundhero" style="background-image: url({{$comic['image-hero']}})">
         <div class="container">
            <img src="{{ $comic['image-cover']}}" alt="{{$comic['title']}}">
         </div>        
     </div>
     <section class="comic">
         <div class="containerb">
             <div class="">
                 <h1>{{$comic['title']}}</h1>
                 <h2>{{$comic['price']}} €</h2>
                 <p>{!!$comic['body']!!}</p>
             </div>
             
         </div>
     </section>
</main>
@endsection