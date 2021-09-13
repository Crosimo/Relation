@extends('template/template')

@section('content')
<form action="{{route('commentaire.update', $data->id)}}" method="post" class="container" style="margin-left:15%">
    @csrf

    Nom: <input type="text" value="{{$data->nom}}" name="nom">
    contenu: <input type="text" value="{{$data->contenu}}" name="contenu">
    article_id: <input type="number" min=1 max=5 value="{{$data->article_id}}" name="article_id">


    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
