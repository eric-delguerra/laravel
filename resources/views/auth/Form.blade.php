@extends('newLayout')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Contactez nous pour toutes questions</h2>
        </div>
        <br>
        <div class="panel-body">

            <form class="" action="{{action('FormController@store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="firstname"><h3>Prénom</h3></label>
                    <input type="text" class="form-control" name="firstname" placeholder="prénom">
                </div>
                <div class="form-group">
                    <label for="lastname"><h3>Nom</h3></label>
                    <input type="text" class="form-control" name="lastname" placeholder="nom">
                </div>
                <div class="form-group">
                    <label for="content"><h3>Content</h3></label>
                    <textarea name="content" id="content" class="form-control" rows="8" cols="80"placeholder="What's on your mind?"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">validate</button>
            </form>

        </div>
    </div>

    <html>
    <head>
        <title>insertion de données dans BDD</title>
    </head>
    <body>
    <form name="insertion" action="insertion2.php" method="POST">
        <table border="0" align="center" cellspacing="2" cellpadding="2">
            <tr align="center">
                <td>nom</td>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr align="center">
                <td>prenom</td>
                <td><input type="text" name="prenom"></td>
            </tr>


            <tr align="center">
                <td colspan="2"><input type="submit" value="insérer"></td>
            </tr>
        </table>
    </form>
    </body>
    </html>

@endsection