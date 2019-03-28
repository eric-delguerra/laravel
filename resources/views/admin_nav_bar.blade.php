<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administration</a>
    <div class="dropdown-menu" aria-labelledby="dropdown01">
        <a class="dropdown-item" href="/admin">Modif/Supp Produits</a>
        <a class="dropdown-item" href="/admin/create">Ajout Produit</a>
        <a class="dropdown-item" href="/admin/category">Modif/Supp Catégories</a>
        <a class="dropdown-item" href="/admin/category/create">Ajout Catégorie</a>
        <a class="dropdown-item" href="{{action('promoController@create')}}">Ajout Promo</a>
        <a class="dropdown-item" href="/admin/promo">Modif/Supp Promo</a>
        <a class="dropdown-item" href="/admin/orders">Historique Commandes</a>
    </div>
</li>