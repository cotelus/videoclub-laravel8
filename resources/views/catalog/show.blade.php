@extends('layouts.master')

@section('content')

<div class="container-fluid mt-3">
    <div class="row col-10 offset-1">
        <div class="col-sm-4 ">
            {{-- Display movie's  poster--}}
            <img class="rounded float-right" src="{{$movie->poster}}" style="height:300px">
        </div>
        <div class="col-sm-8">
            {{-- Display movie's data: title, year, director, description and state 
                    Also include a section to manage movie's state and return to catalog section
            --}}
            <h2>{{$movie->title}}</h2>
            <h4>Año: {{$movie->year}}</h4>
            <h4>Director: {{$movie->director}}</h4>
            <p><strong>Resumen:</strong> {{$movie->synopsis}}</p>
            <br>

            {{-- This IF STATEMENT controls whether it is rented or not --}}
            @if ($movie->rented == false)
                <p style="color: LightGreen"><strong>Estado:</strong> Película disponible para alquilar.</p>
            @else
                <p style="color:LightCoral"><strong>Estado:</strong> Película actualmente alquilada.</p>
            @endif

            <div class="row col-sm-12">
                <button type="button" class="btn btn-danger">Devolver película</button>
                <button type="button" onclick="{{url("/catalog/edit/$movie->id")}}" class="btn ml-1 btn-warning text-light">Editar película</button>
                <button type="button" class="btn ml-1 btn-outline-dark">Volver al listado</button>
            </div>

        </div>
    </div>
</div>

@stop