@extends('layouts.admin')

@section('content')

    <ul>
        
        <li>{{$project->title}}</li>
        <li>{{$project->decription}}</li>
        <li>{{$project->authors}}</li>
        
    </ul>
    
@endsection