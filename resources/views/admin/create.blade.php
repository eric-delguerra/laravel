@extends('AdminLayout')

@section('content')
    <p><h1>Ajouter un produit à la base</h1></p>
    <br>

    <form>
        <div class="form-group">
            <label for="new_product">New product</label>
            <input type="text" class="form-control" id="title" placeholder="Product name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" placeholder=" €">
        </div>
        <div class="form-group">
            <label for="content">Description</label>
            <textarea class="form-control" id="content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop