@extends('layouts.main1')
@section('content')
<h1 align='center'>Login into your account</h1>
<div align='center'>
<form action="" method="post">
    {{@csrf_field()}}
    Email : <input type="text" value="{{old('email')}}" name="email"> </br><br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    Password: <input type="password" name="password"></br><br>
    @error('password')
        <span class="text-danger">{{$message}}</span><br><br>
    @enderror
    <input type="submit" value="Login">
</form>
</div>
@endsection
