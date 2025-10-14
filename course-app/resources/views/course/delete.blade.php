@extends ('layouts.app')

@section('content')

<h1> Deletar Curso </h1>
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

    <button type='submmit' class='btn-btn-primary'>Deletar Curso</button>
    <button type="button" onclick="history.back()" class="btn btn-secondary">
        Voltar
    </button>

</form>
@endsection