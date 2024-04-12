@extends('layouts/app')

@section('content')

<div class="container my-5 py-5 px-5">

    <h1>Lista dei Film</h1>

        <div id="everything">
        @foreach ($movies as $movie)

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie -> title}}</h5>
                    <h6 class="card-subtitle mb-2">{{$movie -> original_title}}</h6>
                    <p class="card-text">{{$movie -> vote}}</p>
                </div>
            </div>

        @endforeach
        </div>

</div>

@endsection

