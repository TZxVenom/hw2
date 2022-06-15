@extends('layouts.main_pages')
@section('head')
@parent
    <link rel="stylesheet" href="{{url('css/home.css') }}">
    <script src="{{url('js/home.js') }}" defer> </script>
    <script> const BOOKING_URL = "{{ route('booking') }}"; </script>
@endsection

@section ('benvenuto')
<a id="benvenuto"> Benvenuto {{$username}}! </a>
<a href="{{ route('servizi') }}"> I nostri servizi </a>
<a href="{{ route('booking') }}">Prenota una camera</a>
@endsection

@section('content')

<section id="prima">
            <div> </div>
            <div class="container"></div>
        </section>
        <section id="seconda">
            <div class="container">
                <div class="contenuto"> </div>
            </div>
        </section>
        <section id="terza">
            <div class="container_reversed">
                <div class="contenuto"> </div> 
            </div>
        </section>
        <section id="quarta">
            <div class="container">
                <div class="contenuto"> </div>
            </div>
        </section>
        <section id="quinta">
            <div class="button-container">
                <button type="button">Scopri le nostre camere! </button>
            </div>
            <div class="container"></div>
            <div class="text_container"> <div class="contenuto1"> </div>  <div class="contenuto2"> </div> </div>
            <div class="container2"></div>
            <div class="text_container2"> <div class="contenuto1"> </div>  <div class="contenuto2"> </div> </div>
        </section>
        <div id="overlay"> </div>
@endsection

@section ('footer')
<a href="{{ route('servizi') }}"> I nostri servizi </a>
<a href="{{ route('booking') }}">Prenota una camera</a>
@endsection

