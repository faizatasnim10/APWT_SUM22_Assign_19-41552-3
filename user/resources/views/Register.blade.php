@extends('layouts.main1')
@section('content')
<h1 align='center'>Please register your account</h1>
<div align='center'>
<form action="" method="post">
    {{@csrf_field()}}
    Name : <input type="text" value="{{old('name')}}" name="name"> </br><br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    Email : <input type="text" value="{{old('email')}}" name="email"> </br><br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    Password: <input type="password" name="password"></br><br>
    @error('password')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    Type: <input type="text box" name="type"></br><br>
    @error('type')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    <input type="submit" value="Create">
</form>
</div>
@endsection
