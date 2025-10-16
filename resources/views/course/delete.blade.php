@extends ('layouts.app')

@section('content')
<div class="p-4">
<h1> Deletar Curso </h1>
</div>
<div class="container mt-4">
<form method="post" action="{{ route('course.destroy', $course->id) }}">

    @csrf
    @method('delete')
    <div>
        <label for='title'> Course Title</label>
        <input type='text' name='title' value='{{$course->title}}' required/>
    </div>
    <div>
        <label for='description'> Course Description</label>
        <input type='text' name='description' value='{{$course->description}}' required/>
    </div>
    <div>
        <label for='courseHeader'> Course Header</label>
        <input type='text' name='courseHead' value='{{$course->courseHead}}' required/>
    </div>

    <button type='submmit' class='btn btn-primary mt-3'>Deletar Curso</button>
    <button type="button" onclick="history.back()" class="btn btn-secondary mt-3">
        Voltar
    </button>

</form>
</div>
@endsection