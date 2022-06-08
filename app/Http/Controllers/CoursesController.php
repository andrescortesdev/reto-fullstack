<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentCourse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;
        $courses = Course::when($q, function ($query) use ($q) {
            $query->where('name', 'like', '%' . $q . '%');
        })->paginate(10);
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = Course::create($request->all());
        return redirect()->route('cursos.index')->with('success','Se ha creado correctamente el nuevo curso :).');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit', compact('course'));
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
        $course = Course::find($id)->update($request->all());
        return redirect()->route('cursos.index')->with('success','Se ha actualizado correctamente el curso :).');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id)->delete();
        return redirect()->route('cursos.index')->with('success','Se ha eliminado correctamente el curso :).');
    }

    public function top()
    {
        $to = Carbon::now();
        $from = $to->subMonth(6);
        $top = StudentCourse::whereHas('courses', function ($q) use ($to, $from) {
            $q->where('created_at', '>', $from);
        })->select('course_id', DB::raw('count(*) as total'))
            ->groupBy('course_id')->orderBy('total', 'desc')->limit(3)->get();
        return view('courses.top', compact('top'));
    }
}
