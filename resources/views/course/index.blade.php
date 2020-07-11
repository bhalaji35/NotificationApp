@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Available Course Lists') }}</div>

                <div class="card-body">
                    <table class="table table-bordered"  style="width: 100%">
                        <tbody  style="width: 100%">
                            <tr style="width: 100%">
                                <th>Course Code</th>
                                <th>Course Name</th>
                            </tr>
                            @foreach($Courses as $course)
                            <tr style="width: 100%">
                                <td>{{$course->course_code}}</td>
                                <td>{{$course->course_name}}</td>
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