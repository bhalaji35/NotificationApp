@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add course') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('store' ) }}" >
                        @csrf
                        <div class="form-group row">
                            <label for="course_code" class="col-md-4 col-form-label text-md-right">{{ __('Course Code') }}</label>

                            <div class="col-md-6">
                                <input id="course_code" type="text" class="form-control{{ $errors->has('course_code') ? ' is-invalid' : '' }}" name="course_code" value="{{ old('course_code') }}" required autofocus>

                                @if ($errors->has('course_code'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('course_code') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="course_name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name') }}</label>

                            <div class="col-md-6">
                                <input id="course_name" type="text" class="form-control{{ $errors->has('course_name') ? ' is-invalid' : '' }}" name="course_name" value="{{ old('course_name') }}" required autofocus>

                                @if ($errors->has('course_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('course_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ADD') }}
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
