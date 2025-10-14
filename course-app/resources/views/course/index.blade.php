@extends('layouts.app')

@section('content')

    <h1>Courses</h1>

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
                        <a href="{{route('course.edit', $course->id)}}"> Edit</a>
                        <a href="{{route('course.showdelete', $course->id)}}"> Delete</a>
                        <a href="{{route('course.show', $course->id)}}"> View</a>
                        
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <button type="button" onclick="{{ route('course.create') }}" class="btn btn-secondary">
        Cadastrar
    </button>

@endsection