@auth <!--caso esteja logado no sistema -->
    <h4>Voce esta Logado!</h4>
    <p>{{Auth::user()->id}}</p>
    <p>{{Auth::user()->name}}</p>
    <p>{{Auth::user()->email}}</p>
@endauth

@guest <!--caso nao esteja logado no sistema -->
    <h4>Voce não está Logado!</h4>
@endguest
