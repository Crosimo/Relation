@extends('template/template')

@section('content')
<form action="{{route('user.store')}}" method="post" class="container d-flex flex-column" style="margin-left:15%">
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
    lastname: <input type="text" value="" name="lastname">
    firstname: <input type="text" value="" name="firstname">
    birthdate: <input type="text" value="" name="birthdate">
    role_id: <input type="number" value="" name="role_id">
    age: <input type="number" value="" name="age">

    <button class="btn btn-primary" type="submit">Submit</button>
    </form>

@endsection
