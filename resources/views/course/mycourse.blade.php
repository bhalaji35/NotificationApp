@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Course Lists') }}</div>

                <div class="card-body">
                    <div class="d-flex mb-3" style="justify-content: center;">
                        <a href="{{ url('complete') }}"class="btn btn-info">Click here to complete course</a>

                    </div>
                    <h4 style="text-align: center;color: green">REGISTERED COURSES</h4>
                    <table class="table table-bordered"  style="width: 100%">
                        <tbody  style="width: 100%">
                            <tr >
                                <th style="width: 50%">Course Code</th>
                                <th style="width: 50%">Status</th>
                            </tr>
                            @foreach($Mycourses as $course)
                            <tr style="width: 100%">
                                @if($course->status=='REGISTERED')
                                    <td style="width: 50%">{{$course->course_code}}</td>
                                    <td style="width: 50%">{{$course->status}}</td>
                                @endif
                            @endforeach
                            </tr>
                        </tbody> 
                       
                    </table>
                    <h4 style="text-align: center;color: blue">COMPLETED COURSES</h4>
                    <table class="table table-bordered"  style="width: 100%">
                        <tbody  style="width: 100%">
                            <tr>
                                <th style="width: 50%">Course Code</th>
                                <th style="width: 50%">Status</th>
                            </tr>
                             @foreach($Mycourses as $course)
                            <tr style="width: 100%">
                                @if($course->status=='COMPLETED')
                                    <td style="width: 50%">{{$course->course_code}}</td>
                                    <td style="width: 50%">{{$course->status}}</td>
                                @endif
                            @endforeach
                            </tr>
                        </tbody> 
                      
                    </table>






                </div>
            </div>
        </div>
    </div>
</div>


@endsection