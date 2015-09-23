@extends('template.template')         
@section('content')         
    <div class="content section form-page">   

        <div class="main-heading">
            <h2>My Account <span class="edit-button"><a href="{{url('users/'.$user -> id.'/edit')}}"><i class="fa fa-pencil"></i></a></span></h2>
        </div>
        <div class="content-wrapper">
            <h3>Username:</h3>
            <span>{{$user -> username}}</span>
            <h3>First Name:</h3>
            <span>{{$user -> firstname}}</span>
            <h3>Last Name:</h3>
            <span>{{$user -> lastname}}</span>
            <h3>Email:</h3>
            <span>{{$user -> email}}</span>
        </div>
    </div>
@stop
