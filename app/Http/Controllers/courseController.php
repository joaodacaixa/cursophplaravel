<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Redirect;

class courseController extends Controller
{
    public function index(){
        $courses=Course::all();
        return view('course.index', compact('courses'));
    }
     //chama a tela de cadastro
    public function create(){
       
        return view('course.create');
    }

    //salva o registro no bd apos as devidas validacoes
    public function store(Request $request){


        $validatedRequest=$request->validate(
            ['title'=>'string|max:255',
            'description'=>'string|max:255',
            'courseHead'=>'String|max:80']
        );
        $course= new Course();
        $course->title=$validatedRequest['title'];
        $course->description=$validatedRequest['description'];
        $course->courseHead=$validatedRequest['courseHead'];
        $course->save();
        //return response()->json(['message'=> 'ARQUIVO SALVO'], 200);
        return redirect()->route('course.index');

    }
    //exibe o dado de forma individual
    public function show($id){
        $course=Course::find($id);
        if(!$course){
            return response() -> json(['message'=>'REGISRO NÃO ENCONTRADO!'],404);
        }
        return view('course.show', compact('course'));
    }

   //exibe os dados para a tela de exclusao 
    public function showdelete($id){
        $course=Course::find($id);
        if(!$course){
            return response() -> json(['message'=>'REGISRO NÃO ENCONTRADO!'],404);
        }
        return view('course.delete', compact('course'));
    }

    //efetiva a exclusao no BD
    public function destroy($id){
        $course=Course::find($id);
        if(!$course){
            return response()->json(['message'=>'REGISTRO NAO ENCONTRADO',404]);
        }
        $course->delete();
        return redirect()->route('course.index');
    }

    //exibe os dados para a tela de edicao 
     public function edit(Request $request,$id){
        $course=Course::find($id);
        if (!$course){
            return response() -> json(['message'=> 'REGISTRO NAO LOCALIZADO'], 404);
        }
               
        return view('course.edit', compact('course'));
    }

    //efetiva a alteracao no BD
    public function update(Request $request, $id){
         $course=Course::find($id);
        if (!$course){
            return response() -> json(['message'=> 'REGISTRO NAO LOCALIZADO'], 404);
        }
        $validatedRequest = $request->validate(
            ['title'=>'string|max:255',
            'description'=>'string|max:255',
            'courseHead'=>'String|max:80']
        );
        $course->fill($request->all());
        $course->update();
        return redirect()->route('course.index');
    }
}
