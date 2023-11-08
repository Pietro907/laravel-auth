<div class="table-responsive mt-5">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">STATUS</th>
                <th scope="col">DATE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td scope="row">{{$project->id}}</td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->authors}}</td>
                    <td>{{$project->slug}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
