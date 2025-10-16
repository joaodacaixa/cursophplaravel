@extends('layouts.app')

@section('content')
    <div class="p-4">
    <h1>Cursos</h1>
    </div>
    <div class="container mt-4">
    <table cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Course Id</th>
                <th>Course Name</th>
                <th>Course Description</th>
                <th>Course Head</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description ?? 'No description available' }}</td>
                    <td>{{ $course->courseHead }}</td>
                   <!--{{ $course->id }}-->
                    <td>
                        <form method="post" action="{{route ('course.destroy', $course->id) }}" >
                            <a href="{{route('course.show', $course->id)}}" class="btn btn-primary mt-3"> Detalhes</a>
                            <a href="{{route('course.edit', $course->id)}}" class="btn btn-primary mt-3"> Editar</a>
                            <a href="{{route('course.showdelete', $course->id)}}" class="btn btn-primary mt-3"> Deletar op1</a>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary mt-3"> Deletar op2 </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <br>
    <br>
    <br>
    <br>
    <a href="{{ route('course.create') }}" class="btn btn-primary mt-3">
         Cadastrar
    </a>
    </div>

@endsection