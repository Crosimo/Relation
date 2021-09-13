@extends('template/template')

@section('content')
<form action="{{route('role.store')}}" method="post" class="container d-flex flex-column" style="margin-left:15%">
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

    id: <input type="number" value="" name="id">
    nom: <input type="text" value="" name="nom">
  


    <button class="btn btn-primary" type="submit">Submit</button>
    </form>

@endsection
