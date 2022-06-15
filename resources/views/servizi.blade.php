@extends('layouts.main_pages')
@section('head')
@parent
    <link rel="stylesheet" href="{{url('css/servizi.css') }}">
    <script src="{{url('js/servizi.js') }}" defer> </script>
    <script> const csrf_token = '{{ csrf_token() }}'; </script>
@endsection

@section ('benvenuto')
<a id="benvenuto"> I nostri servizi </a>
<a href="{{ route('booking') }}">Prenota una camera</a>
@endsection

@section('content')
<section id="prima">
          <div class="container"> </div>
            <div class="text_container">
                <div class="contenuto1"> </div>
                <div class="contenuto2"> </div>
            </div>
        </section>
    <section id="seconda">
          <div class="container"> </div>
        <div class="text_container">
            <div class="contenuto1"> </div>
            <div class="contenuto2"> </div>
        </div>
    </section>
    <section id="terza">
              <h3>Inserisci qui la parola chiave 'Alcoholic' o 'Non_Alcoholic' per scoprire i nostri cocktail alcolici e analcolici migliori e scegli il tuo preferito! </h3>
              <form name="form">
              <label> <input type='text' name='search'></label><input id="button" type='submit' value="Cerca" >
              </form>
          <div class="container"></div>
    </section>
    <section id="quarta">
              <h3>Cerca e scegli il tuo piatto preferito! </h3>
              <form id="due" name="form">
              <label> <input type='text' name='search'></label><input id="button_2" type='submit' value="Cerca" >
              </form>
          <div class="container"></div>
          <div class="button-container">
                <input type="submit" value="Invia i tuoi preferiti!" id="submit"> </button>
              </div>
    </section>
@endsection

@section ('footer')
<a href="{{ route('booking') }}">Prenota una camera</a>
@endsection
