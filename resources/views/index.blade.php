@extends("layouts/structure")

@section("title", "Page de connexion")

@section("main_content")

    <section>
        <form class='form' action="/connection" method="POST">
            @csrf
            <h1>Connectez-vous !</h1>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" placeholder="Entré votre nom d'utilisateur">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" placeholder="Entré votre mot de passe">
            <button type="submit">Se connecter</button> 
            <a class="center" href='/register'>Créer un compte</a>
        </form>
        
    </section>
@endsection
