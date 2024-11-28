<div>
   dinisi list projectnya

  <p>cretea here </p> <a href=" {{route('proj.create')}}"> create</a>

   @foreach ($projects as $project)
       <h1>
        nama = {{$project->name}}
       </h1>
       <h2>
        deadline = {{$project->deadline}}
       </h2>

       <a href="{{route('proj.edit',$project)}}"> EDIT</a>
       <form action="{{route('proj.delete',$project)}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">delete</button>
       </form>
   @endforeach


</div>
