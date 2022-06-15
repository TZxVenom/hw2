@extends('layouts.main_pages')
@section('head')
@parent
    <link rel="stylesheet" href="{{url('css/booking.css') }}">
    <script src="{{url('js/booking.js') }}" defer> </script>
@endsection

@section ('benvenuto')
<a id="benvenuto"> Prenota la tua camera </a>
<a href="{{ route('servizi') }}"> I nostri servizi</a>
@endsection

@section('content')
<section>
          <div class="container">
                <div class="titolo"> 
                    <h1> Le nostre camere </h1>
                </div>
                <div class="contenuto"> 
                    <h2> Benchmark </h2> <h3>A partire da €80 a notte </h3>
                    <p> Adatta per una persona, ma abbastanza spaziosa per due, la camera Benchmark dispone di un letto a una piazza e mezzo, armadio, una soffice poltrona e scrivania con sedia in legno. (5 camere in totale)</p>
                    <h2> The Sovereign </h2> <h3>A partire da €150 a notte </h3>
                    <p> Che siate una coppia o viaggiate da soli, The Sovereign vi aspetta per i vostri momenti di svago. Dispone di un morbido letto matrimoniale, mobili da cucina per due persone, comò, armadio e divano di velluto. (5 camere in totale) </p>
                    <h2> Diamond </h2> <h3>A partire da €300 a notte </h3>
                    <p> Con due letti matrimoniali che possono ospitare fino a quattro persone, la doppia standard è tutt'altro. Dispone di mobili da cucina per lavorare o pranzare/cenare, due armadi e un divanetto accogliente. (3 camere in totale)</p>
                    <h2> Aspire </h2> <h3>A partire da €200 a notte </h3>
                    <p> Disponiamo di tre diverse suite, ognuna con una camera da letto con letto matrimoniale, zona soggiorno separata, con set da pranzo e divano letto, ampio bagno con vasca idromassaggio e terrazza privata. (3 camere in totale) </p>
          </div>
    </section>
    <section class="booking">
        @if($error == 'wrong')
        <section class='error'> "Il numero di stanze selezionato per il tipo di camera non è disponibile!" </section>
        @endif
        <div class="container2">
            <form name='booking' method='post' class="form" action="{{ route('booking') }}">
            <input type="hidden" name="_token" value= "{{csrf_token()}}">
                <div class="camera">
                    <label for="camera" class="input-label">Scegli la camera </label>
                    <select name="camera" class="options" id="camera">  
                        <option value=""> --Seleziona la camera-- </option>
                        <option value="Benchmark">Benchmark</option>
                        <option value="The Sovereign">The Sovereign</option>
                        <option value="Diamond">Diamond</option>
                        <option value="Aspire">Aspire</option>
                    </select>
                </div>
                <div class="check-in">
                    <label for="check-in" class="input-label">Check-in </label>
                    <input type="date" class="input" name="check-in">
                    <span class="sotto">Data errata</span>
                </div>
                <div class="check-out">
                    <label for="check-out" class="input-label">Check-out </label>
                    <input type="date" class="input" name="check-out">
                    <span class="sotto">Data errata</span>
                </div>
                <div class="persone">
                    <label for="persone" class="input-label">Persone </label>
                    <select class="options" name="persone" id="persone">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="8">8</option>
                        <option value="10">10</option>
                        <option value="12">12</option>
                    </select>
                    <span class="sotto">Controlla bene i numeri</span>
                </div>
                <div class="numero_camere">
                    <label for="numero_camere" class="input-label">Numero camere </label>
                    <select class="options" name="numero_camere" id="numero_camere">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <span class="sotto">Controlla bene i numeri</span>
                </div>
                <p>
                    <label>&nbsp;<input id='submit' type='submit' value="Prenota" ></label>
                </p>
            </form>
        </div>
    </section>
@endsection

@section ('footer')
<a href="{{ route('servizi') }}">
@endsection