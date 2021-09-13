@extends('template/template')

@section('content')
<h1 style="text-align: center"><a class="btn btn-primary" href="{{route('commentaire.create')}}">Créer</a></h1>
<table class="table container" style="margin-left:15%">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Contenu</th>
        <th scope="col">Dépendance</th>
        <th scope="col">Bouton</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)

        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->contenu}}</td>
            <td>{{$item->article_id}}</td>
            <td><form action="{{route('commentaire.destroy', $item->id)}}" method="post">@csrf @method("DELETE")<button type="submit" href="" class="btn btn-danger">Delete</button></form> <a href="{{route('commentaire.edit', $item->id)}}" class="btn btn-primary">Edit</a></td>
          </tr>
        @endforeach

    </tbody>
</table>
@endsection
