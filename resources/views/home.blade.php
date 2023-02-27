@extends('layouts.main')

@section('title', 'Home')
    
@section('content')
  <h1 class="my-5">Partenze e arrivi</h1>
  @foreach ($trains as $train)
    <div class="card my-5">
      <h3>Compagnia: {{$train->azienda}}</h3>
      <h1>Partenza: {{$train->stazione_di_partenza}}</h1>
      <h2>{{$train->orario_di_partenza}}</h2>
      <h1>Arrivo: {{$train->stazione_di_arrivo}}</h1>
      <h2>{{$train->orario_di_arrivo}}</h2>
      <h4>Treno numero: {{$train->codice_treno}}</h4>
      <h4>Carozze:{{$train->numero_carozze}}</h4>
      <h4>{{$train->in_orario ? 'PUNTUALE' : 'IN RITARDO'}}</h4>
      <h4>{{$train->cancellato ? 'CANCELLATO' : ''}}</h4>
    </div>
      
  @endforeach
@endsection