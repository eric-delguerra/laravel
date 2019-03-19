@extends ('Cart.cartLayout')

@section('title')
    Shopping cart
@endsection

@section('content')

    <div class="col-xs-18 col-sm-6 col-md-3">
        <div class="thumbnail">
            <img src={{asset(images/mnmsm.jpg")}} alt="des mnmsms qui ne s'affichent pas.">
            <div class="caption">
                <h4>Thumbnail label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
            </div>
        </div>
    </div>


@endsection