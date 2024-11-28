<div>
    <form action="{{route('proj.store')}}" method="POST">
        @csrf
        <label for="name">name: </label>
        <input type="text" id="name" name="name">
        <label for="deadline">deadline: </label>
        <input type="text" id="deadline" name="deadline">

        <button type="submit">submit</button>
    </form>
</div>
