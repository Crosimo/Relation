@extends('template/template')

@section('content')
<form action="{{route('article.store')}}" method="post" class="container d-flex flex-column " style="margin-left:15%">
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

    nom: <input type="text" value="" name="nom">
    description: <input type="text" value="" name="description">
    user_id: <input type="number" value="" name="user_id">



    <button class="btn btn-primary" type="submit">Submit</button>
    </form>

@endsection

