@extends('newLayout')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Contactez nous pour toutes questions</h2>
        </div>
        <div class="panel-body">
            <form class="" action="{{action('FormController@store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="firstname">prénom</label>
                    <input type="text" class="form-control" name="firstname" placeholder="prénom">
                </div>
                <div class="form-group">
                    <label for="lastname">nom</label>
                    <input type="text" class="form-control" name="lastname" placeholder="nom">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="8" cols="80"placeholder="What's on your mind?"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">validate</button>
            </form>
        </div>
    </div>