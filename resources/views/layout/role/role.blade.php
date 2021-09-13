@extends('template/template')

@section('content')
<h1 style="text-align: center"><a class="btn btn-primary" href="{{route('role.create')}}">Créer</a></h1>
<table class="table container" style="margin-left:15%">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">bouton</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nom}}</td>
            <td><form action="{{route('role.destroy', $item->id)}}" method="post">@csrf @method("DELETE")<button type="submit" href="" class="btn btn-danger">Delete</button></form> <a href="{{route('role.edit', $item->id)}}" class="btn btn-primary">Edit</a></td>

          </tr>
        @endforeach

    </tbody>
</table>
@endsection
