<?php

namespace App\Http\Controllers;

use App\Course;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Notifications\Notifiable;
use App\Notifications\newcourse;
use App\Notifications\classinstruction;
use Illuminate\Support\Facades\Notification;



class CoursesController extends Controller
{
    use Notifiable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'course_code' => 'required|string|max:255|unique:courses',
            'course_name' => 'required|string|max:255|',
        ]);
    }
    public function index()
    {
        $courses = Course::all();
        
        return view( 'course.index',['Courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courseName = $request->input('course_name');
        $course = Course::create([
            'course_code' =>$request->input('course_code'),
            'course_name' => $request->input('course_name'),
            'Course_id' => $request->course_id,
            
        ]);
         
        

        
        if($course){
           $notification = User::where('id', '!=', auth()->id())->get();
            //$notification->notify(new newcourse($));
            Notification::send($notification, new newcourse($courseName));
            return redirect()->back()->with('success','Course added successfully');
        }
         
        
    }
    public function instruction(Request $request)
    {
        $instruction = $request->input('instruction');
        $class=$request->input('class');
        
        $notification = User::where([ ['class', '=', $class],['id', '!=', auth()->id()] ])->get();
        Notification::send($notification, new classinstruction($instruction));
        
        return redirect()->back()->with('success','Instruction Sent');
       
         
        
    }

   
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
