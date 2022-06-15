@extends('layouts.main_pages')
@section('head')
@parent
    <link rel="stylesheet" href="{{url('css/reservations.css') }}">
    <script src="{{url('js/reservations.js') }}" defer> </script>
@endsection

@section ('benvenuto')
<a href="{{ route('booking') }}">Prenota una camera</a>
<a href="{{ route('servizi') }}">I nostri servizi</a>
@endsection

@section('content')
        <section id="prima">
        </section>
        <div class="button-container">
            <button>Cancella le tue prenotazioni </button>
        </div>
        <section id="seconda">
            <div class="preferiti"> I tuoi preferiti </div>
          <div class="container"></div>
          <div class="button-container">
          <button>Cancella i tuoi preferiti </button>
        </div>
    </section>
@endsection