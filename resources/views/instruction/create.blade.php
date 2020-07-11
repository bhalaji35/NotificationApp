@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Instruction') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('notify' ) }}" >
                        @csrf
                        

                        <div class="form-group row">
                            <label for="instruction" class="col-md-4 col-form-label text-md-right">{{ __('Instruction') }}</label>

                            <div class="col-md-6">
                                <input id="instruction" type="text" class="form-control{{ $errors->has('Instruction') ? ' is-invalid' : '' }}" name="instruction" value="{{ old('instruction') }}" required autofocus>

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Class') }}</label>

                            <div class="col-md-6">
                                <select name="class" class="form-control{{ $errors->has('class') ? ' is-invalid' : '' }}">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    
                                </select>

                                @if ($errors->has('class'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('class') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('SEND') }}
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
