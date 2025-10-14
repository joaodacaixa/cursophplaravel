@extends ('layouts.app')

@section('content')

<h1> Adicionar Curso </h1>

<form method="post" action ="{{ route ('course.store')}}">
    @csrf
    <div>
        <label for='title'> Course Title</label>
        <input type='text' name='title' required/>
    </div>
    <div>
        <label for='description'> Course Description</label>
        <input type='text' name='description' required/>
    </div>
    <div>
        <label for='courseHeader'> Course Header</label>
        <input type='text' name='courseHead' required/>
    </div>

    <button type='submmit' class='btn-btn-primary'>Criar Curso</button>
    <button type="button" onclick="history.back()" class="btn btn-secondary">
        Voltar
    </button>

</form>
@endsection