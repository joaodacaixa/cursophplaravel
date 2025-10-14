@extends ('layouts.app')

@section('content')
<div class="p-4">
<h1> Adicionar Curso </h1>
</div>
<div class="container mt-4">
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

    <button type='submmit' class='btn btn-primary mt-3'>Criar Curso</button>
    <button type="button" onclick="history.back()" class="btn btn-secondary mt-3">
        Voltar
    </button>

</form>
</div>
@endsection