<html>
    <head>
    <link rel="stylesheet" href="{{url('css/login.css') }}">
    <script src="{{url('js/login.js') }}" defer> </script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        @if($error == 'wrong')
        <section class='error'> Credenziali non valide. </section>
        @endif
        <main>
        <div id=overlay> <span id="benvenuto">Bentornato!</span> <br> Inserisci le tue credenziali per accedere al sito
        </div>
            <form name='login_form' method='post' action="{{ route('login') }}">
            <p>
                    <span>Login</span>
            </p>    
            <input type="hidden" name="_token" value= "{{csrf_token()}}">
            <div class="username">
                    <label>Username <input type='text' name='username' value='{{old("username")}}'></label>
            </div>
            <div class="password">
                    <label>Password <input type='password' name='password'></label>
            </div>
            <p>
                <label>&nbsp;<input id='submit' type='submit' value='Accedi'></label>
            </p>
            <div class="signup">Non hai un account? <a href="{{ route('register') }}">Iscriviti</a>
            </form>
        </main>
    </body>
</html>