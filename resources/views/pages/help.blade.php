@extends('master.master')
@section('content')

    <div class="container col-md-12" align="center" style="margin-top: 120px">
@foreach($tests as $test)

    <li><a href="/help/{{$test->id}}"><h2>{{$test->title}}</h2></a></li>
@endforeach
    </div>


@endsection