@extends('AdminLayout')
@section('MetaTitle', 'Homepage Admin')
@section('content')
<div class="container">
    <br />
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>

        </tr>
        </thead>
        <tbody>
        @foreach($types as $cat)
            <tr>
                <td>{{$cat['id']}}</td>
                <td>{{$cat['name']}}</td>

                <td><a href = "{{url ("/admin/categories/delete/" . $cat['id'])}}" class="btn btn-danger">supprimer</a></td>
                <td><a href = "{{url ("/admin/categories/update/" . $cat['id'])}}" class="btn btn-primary">update</a></td>
                {{--<td>--}}
                    {{--<form action="{{action('AdminController@destroy', $product['id'])}}" method="post">--}}
                        {{--{{csrf_field()}}--}}
                        {{--<input name="_method" type="hidden" value="DELETE">--}}
                        {{--<button class="btn btn-danger" type="submit">Delete</button>--}}
                    {{--</form>--}}
                {{--</td>--}}
            </tr>

        @endforeach
        </tbody>
    </table>
    <a href="{{url ("/admin/categories/new")}}" class="btn btn-warning">Edit</a>
</div>
@endsection
