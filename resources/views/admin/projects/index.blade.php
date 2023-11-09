@extends('layouts.admin')

@section('content')
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>

                <tr class="">
                    <th scope="col">ID</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">DATE</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($projects as $project)
                    <tr>
                        <td scope="row">{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>
                            @if ($project->thumb)
                                <img class="w-25" src="{{$project->thumb}}" alt="{{$project->thumb}}">
                            @else
                                N/A
                            @endif
                        </td>

                        <td>{{ $project->description }}</td>
                        <td>{{ $project->authors }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->tech}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
