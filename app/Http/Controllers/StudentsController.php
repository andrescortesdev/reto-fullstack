<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\StudentCourse;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;
        $students = Student::when($q, function ($query) use ($q) {
            $query->where('name', 'like', '%' . $q . '%')
                ->orWhere('lastname', 'like', '%' . $q . '%')
                ->orWhere('email', 'like', '%' . $q . '%');
        })->paginate(10);

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Student::where('email', $request->email)->count();
        if($student == 0){
            $student = Student::create($request->all());
            return redirect()->route('estudiantes.index')->with('success','Se ha creado correctamente el nuevo estudiante :).');
        }
        return redirect()->route('estudiantes.index')->with('danger','El correo registrado ya existe en la base de datos :/.');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $courses = Course::all();
        $courses_associates = StudentCourse::where('student_id', $id)->get();

        return view('students.show', compact('student', 'courses', 'courses_associates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id)->update($request->all());
        return redirect()->route('estudiantes.index')->with('success','Se ha actualizado correctamente el estudiante :).');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id)->delete();
        return redirect()->route('estudiantes.index')->with('success','Has eliminado correctamente al estudiante.');
    }

    public function associateCourse(Request $request)
    {
        $course = $request->course_id;
        $student = $request->student_id;

        $associate_student = StudentCourse::where('course_id', $course)
            ->where('student_id', $student)->count();
        if ($associate_student == 0) {
            $associate = StudentCourse::create([
                'course_id' => $course,
                'student_id' => $student,
            ]);
            return redirect()->route('estudiantes.show', $student)->with('success','Se ha asociado el estudiante con el curso correctamente');
        }
        return redirect()->route('estudiantes.show', $student)->with('danger','un estudiante no puede tener dos materias inscritas al tiempo');

    }

    public function associateCourseRemove($id)
    {
        $associete = StudentCourse::find($id);
        $associete->delete();
        return redirect()->route('estudiantes.show', $associete->student_id)->with('success','Se ha eliminado la materia del estudiante correctamente.');
    }
}
