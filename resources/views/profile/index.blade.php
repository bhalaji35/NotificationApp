@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Profile</div>

                <div class="card-body">

                    <li class="list-group-item" style="font-weight: bold;">Name : {{$users->name}}</li>
                    <li class="list-group-item" style="font-weight: bold;">Date of Birth : {{$users->date_of_birth}}</li>
                    <li class="list-group-item" style="font-weight: bold;">Age : {{$users->age}}</li>
                    <li class="list-group-item" style="font-weight: bold;">Father name : {{$users->father_name}}</li>
                    <li class="list-group-item" style="font-weight: bold;">Mother name : {{$users->mother_name}}</li>
                    <li class="list-group-item" style="font-weight: bold;">Gender : {{$users->gender}}</li>
                    <li class="list-group-item" style="font-weight: bold;">Address : {{$users->address}}</li>
                    <li class="list-group-item" style="font-weight: bold;">Blood Group : {{$users->blood_group}}</li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
