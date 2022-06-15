<!doctype html>
<html>
    <head>
        <script> 
        const REGISTER_ROUTE_URL = "{{ route('register') }}";
        </script>
    <link rel="stylesheet" href="{{url('css/register.css') }}">
    <script src="{{url('js/register.js') }}" defer> </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@700&display=swap" rel="stylesheet">
    </head>
<body>
    <main>
        <div id=container> 
            <div id='immagine'> <img src="{{url('images/signup_back.jpg') }}" /> </div>
            <div id='testo'> <h1>Benvenuto al Vaine</h1><br><p>Riempi i campi per iscriverti al sito</p></div>
            <div id='form'>
                <form name='signup' method='post' action="{{ route('register') }}">
                    <p>
                        <span>Iscrizione</span>
                    </p>
                    <input type="hidden" name="_token" value= "{{csrf_token()}}">
                    <div class="name">
                        <label>Nome  <input type='text' name='name' value='{{old("name")}}'></label>
                        <span class="sotto">Nome mancante</span>
                    </div>
                    <div class="surname">
                        <label>Cognome <input type='text' name='surname' value='{{old("surname")}}' ></label>
                        <span class="sotto">Cognome mancante</span>
                    </div>    
                    <div class="username">
                        <label>Nome utente <input type='text' name='username' value='{{old("username")}}'></label>
                        <span class="sotto">Nome utente non disponibile</span>
                    </div>
                    <div class="email">
                        <label>Email <input type='text' name='email' value='{{old("email")}}'></label>
                        <span class="sotto">Indirizzo email non valido</span>
                    </div>
                    <div class="password">
                        <label> Password <input type='password' name='password' value='{{old("password")}}'></label>
                        <span class="sotto">Inserisci almeno 8 caratteri</span>
                    </div>
                    <div class="password_confirm">
                        <label> Conferma Password <input type='password' name='password_confirm'></label>
                        <span class="sotto">Le password non coincidono</span>
                    </div>
                    <p>
                        <label>&nbsp;<input id='submit' type='submit' value="Registrati" ></label>
                    </p>
                    <div class="signup">Hai un account? <a href="{{ route('login') }}"> Accedi</a> </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>