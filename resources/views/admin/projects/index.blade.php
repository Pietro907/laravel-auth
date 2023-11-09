@extends('layouts.admin')

@section('content')
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>

                <tr class="text-center">
                    <th scope="col">ID</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">IMAGE PROJ</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">AUTHORS</th>
                    <th scope="col">SLUG</th>
                    <th scope="col">TECH</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($projects as $project)
                    <tr class="text-center">
                        <td scope="row">{{ $project->id }}</td>
                        <td><b>{{ $project->title }}</b></td>
                        <td> 
                            @if ($project->thumb)
                                <img class="w-100 p-3" src="{{$project->thumb}}" alt="{{$project->thumb}}">
                            @else
                                N/A
                            @endif
                        </td>

                        <td><em style="font-size: xx-small">{{ $project->description }}</em></td>
                        <td><b>{{ $project->authors }}</b></td>
                        <td>
                            <a href="project/{project}">{{ $project->slug }}</a>

                            <button class="btn btn-primary text-white px-2 py-0 my-2 fs-6" type="submit">View</button>
                            <button class="btn btn-secondary text-white px-2 py-0 my-2 fs-6" type="submit">Edit</button>
                            <button class="btn btn-danger text-white px-2 py-0 my-2 fs-6" type="submit">Delete</button>
                        </td>
                        <td>{{ $project->tech}}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
