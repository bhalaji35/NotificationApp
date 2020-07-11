@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Course Completion Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="confirm" >
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group row">
                            <label for="course_code" class="col-md-4 col-form-label text-md-right">{{ __('Course Code') }}</label>

                            <div class="col-md-6">
                                <select name="course_code" class="form-control{{ $errors->has('course_code') ? ' is-invalid' : '' }}" name="course_code" value="{{ old('course_code') }}" required autofocus>
                                    @foreach($Courses as $course) 
                                    {
                                        @if($course->status=='REGISTERED')
                                            <option value="{{ $course->course_code }}">{{ $course->course_code }}</option>
                                       @endif
                                    }
                                    @endforeach

                                </select>

                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="TYPE COMPLETED in CAPITAL LETTER " class="form-control{{ $errors->has('confirm') ? ' is-invalid' : '' }}" name="confirm" value="{{ old('confirm') }}" required autofocus>

                            </div>
                        </div>

                        {{ method_field('put') }}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Complete') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection