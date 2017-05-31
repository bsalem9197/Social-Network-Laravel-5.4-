@extends('profile.master')

@section('content')
<div class="container">
<ol class="breadcrumb">
  <li><a href="{{url('/')}}">Home</a></li>
 

</ol>
<div class="container">
    <div class="row">
      @include('profile.sidebar')


    <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name}}</div>

                <div class="panel-body">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
