@extends('template/template')

@section('content')
<form action="{{route('commentaire.store')}}" method="post" class="container d-flex flex-column" style="margin-left:15%">
    @csrf
    @if ($errors->any())

    <div class="alert alert-danger mt-4">
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{$error}}</li>
         @endforeach
        </ul>
    </div>
    @endif

    Nom: <input type="text" name="nom">
    contenu: <input type="text" value="" name="contenu">
    article_id: <input type="number" value="" name="article_id">


    <button class="btn btn-primary" type="submit">Submit</button>
    </form>

@endsection
