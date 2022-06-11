@extends('layouts.main1')
@section('content')
<h2 align='center'>This is dashboard</h2>
<table border="1"align="center">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach($mids as $s)
            <tr>
                <td><a href="{{route('mid.details',['id'=>$s->id,'name'=>$s->name])}}">{{$s->name}}</td>
                <td>{{$s->email}}</td>
            </tr>
        @endforeach
    </table>
    @endsection