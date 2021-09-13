@extends('template/template')

@section('content')
<form action="{{route('user.update', $data->id)}}" method="post" class="container" style="margin-left:15%">
    @csrf

    lastname: <input type="text" value="{{$data->lastname}}" name="lastname">
    firstname: <input type="text" value="{{$data->firstname}}" name="firstname">
    birthdate: <input type="number" value="{{$data->birthdate}}" name="birthdate">
    picture: <input type="text" value="{{$data->picture}}" name="picture">
    role_id: <input type="text" value="{{$data->role_id}}" name="role_id">
    age: <input type="number" value="{{$data->age}}" name="age">
    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
