@extends('template/template')

@section('content')
<form action="{{route('role.update', $data->id)}}" method="post" class="container" style="margin-left:15%">
    @csrf

    Nom: <input type="text" value="{{$data->nom}}" name="nom">
  

    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
