@extends('template/template')

@section('content')
<h1 style="text-align: center"><a class="btn btn-primary" href="{{route('article.create')}}">Créer</a></h1>
<table class="table container" style="margin-left: 15%">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Description</th>
        <th scope="col">user_id</th>
        <th scope="col">button</th>


      </tr>
    </thead>
    <tbody >
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{$item->nom}}</th>
            <td>{{$item->description}}</td>
            {{-- <td>{{$item->user_id}}</td> --}}
            <td>{{$item->user->role->nom}}</td>
            <td><form action="{{route('article.destroy', $item->id)}}" method="post">@csrf @method("DELETE")<button type="submit" href="" class="btn btn-danger">Delete</button></form> <a href="{{route('article.edit', $item->id)}}" class="btn btn-primary">Edit</a></td>

          </tr>
        @endforeach

    </tbody>
</table>
@endsection
