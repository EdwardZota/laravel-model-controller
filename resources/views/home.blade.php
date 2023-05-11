@extends('layouts.layoutPrimary')

@section('page-title','Film')

@section('content')


<div class="container">
    <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3 mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="{{url('https://picsum.photos/300/300')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$movie->title}}</h5>
                          <p class="card-text">Titolo in lingua originale: <br /> {{$movie->original_title}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Nazionalità: {{$movie->nationality}}</li>
                          <li class="list-group-item">Data di rilascio: {{$movie->date}}</li>
                          <li class="list-group-item">Voto: {{$movie->vote}}</li>
                        </ul>
                      </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection
