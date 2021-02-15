@extends('template.main')
@section('content')
    <div class="mt-5 container">
        <h1>{{$item[0]}}</h1>
        <h1>{{$item[1]}}</h1>
        <h1>{{$item[2]}}</h1>
        <h1>{{$item[3]}}</h1>
    </div>
    <div class="mt-5 container">
        @foreach ($item as $item)
            <h1>{{$item}}</h1>
        @endforeach
    </div>
    
@endsection