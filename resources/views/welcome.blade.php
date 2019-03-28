
@extends('layout')







@section('contact')

    <div class = ShopName>
        <h1>EVERYTHING AND ALL</h1>

</div>
<div class = "Container">
    <div class = "WelcomeMessage">
        Bienvenue sur notre boutique fourre-tout!</br>
        De tout, de rien, vous y trouverez de quoi assouvir votre soif de tout!
    </div>
    <div class = "Caroussel">
<div id="carouselExampleControls" class="carousel slide" style="width: 500px; height:300px; data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/images/lesPaul.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/Livrequetes.jpg" alt="des livres de requètes">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/poussettechiens.jpg" alt="poussette pour chiens">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/nico.jpg" alt="Le Nico">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</div>
</div>
@endsection
