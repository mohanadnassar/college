<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;


class CourseController extends Controller
{
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required'
        ]);

        $course->saveCourse($data);
        return redirect('/home')->with('success', 'New support course has been created! Wait sometime to get resolved');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses  = Course::where('user_id', auth()->user()->id)->get();

        return view('courses.index',compact('courses'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::where('user_id', auth()->user()->id)
            ->where('id', $id)
            ->first();

        return view('courses.edit', compact('course', 'id'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = new Course();
        $data = $this->validate($request, [
            'description'=>'required',
            'title'=> 'required'
        ]);
        $data['id'] = $id;
        $course->updateCourse($data);

        return redirect('/home')->with('success', 'New support course has been updated!!');
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect('/home')->with('success', 'Course has been deleted!!');
    }
}
