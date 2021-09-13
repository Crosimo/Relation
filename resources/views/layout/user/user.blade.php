@extends('template/template')

@section('content')
<h1 style="text-align: center"><a class="btn btn-primary" href="{{route('user.create')}}">Créer</a></h1>
<table class="table container" style="margin-left:15%">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">prénom</th>
        <th scope="col">date de naissance</th>
        <th scope="col">role_id</th>
        <th scope="col">age</th>
        <th scope="col">Bouton</th>


      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->lastname}}</td>
            <td>{{$item->firstname}}</td>
            <td>{{$item->birthdate}}</td>
            <td>{{$item->role_id}}</td>
            <td>{{$item->age}}</td>
            <td><form action="{{route('user.destroy', $item->id)}}" method="post">@csrf @method("DELETE")<button type="submit" href="" class="btn btn-danger">Delete</button></form> <a href="{{route('user.edit', $item->id)}}" class="btn btn-primary">Edit</a></td>

          </tr>
        @endforeach

    </tbody>
</table>
@endsection
