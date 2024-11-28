<div>
    <form action="{{route('proj.update', $project)}}" method="POST">
        @method('PATCH')
        @csrf
        <label for="name">name: </label>
        <input type="text" id="name" name="name" value="{{$project->name}}">
        <label for="deadline">deadline: </label>
        <input type="text" id="deadline" name="deadline"  value="{{$project->deadline}}">

        <button type="submit">submit</button>
</div>
