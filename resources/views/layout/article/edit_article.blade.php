@extends('template/template')

@section('content')
<form action="{{route('article.update', $data->id)}}" method="post" class="container" style="margin-left:15%">
    @csrf

    Nom: <input type="text" value="{{$data->nom}}" name="nom">
    description: <input type="text" value="{{$data->description}}" name="description">
    user_id: <input type="text" value="{{$data->user_id}}" name="user_id">
    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
