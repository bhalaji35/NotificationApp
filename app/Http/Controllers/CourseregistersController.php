<?php

namespace App\Http\Controllers;

use App\Courseregister;
use Illuminate\Http\Request;
use App\Course;
use App\User;
use Illuminate\Notifications\Notifiable;
use App\Notifications\coursecompletion;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;

class CourseregistersController extends Controller {
    use Notifiable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
       $user = Auth::User()->id;
        $courses = Courseregister::all()->where('user_id','=',$user);

        return view('course.mycourse', ['Mycourses' => $courses]);

        
    }
  
   

   
    public function dropdown() {
        $course = Course::all();
        return view('course.register', ['Courses' => $course]);
    }
    public function completedropdown() {
        $user=Auth::User()->id;
        $course = Courseregister::all()->where('user_id','=',$user);
        
        return view('course.edit', ['Courses' => $course]);
    }
    public function confirm(Request $request) {
        
        $user=Auth::User()->id;
        $username=Auth::User()->name;
        $co=$request->input('course_code');
        Courseregister::where('user_id', '=', $user)
                ->where('course_code', '=', $co)
                ->update([
                    'status'=>$request->input('confirm')
                ]);
        $notification = User::where('id', '!=',auth()->id())->get();
        Notification::send($notification, new coursecompletion($co,$username));
        return back()->with('success','Course completed');
    }
    
    public function store(Request $request) {
        if (Courseregister::all()->where('user_id', '=', Auth::User()->id)->where('course_code', '=',$request->input('course_code'))->count() >= 1) {
            return redirect()->back()->with('warning','You already registered this course');
        }
        else
        {
            Courseregister::create([
                    'course_code' => $request->input('course_code'),
                    'user_id' => Auth::User()->id,
                    'status' => 'REGISTERED'
                ]);
                return redirect()->back()->with('success','Registered successfully');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function show(Courseregister $courseregister) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function edit(Courseregister $courseregister) {
         $edit=Courseregister::all()->where('user_id', '=', Auth::User()->id)->where('course_code', '=',$courseregister);
         return view('course.edit', ['viewcourses' => $edit]);
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courseregister $courseregister) {
     
        Courseregister::where('user_id', '=', $user)
                ->where('course_code', '=', $courseregister)
                ->update([
                    'status'=>$request->input('confirm')
                ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courseregister $courseregister) {
        //
    }

}
