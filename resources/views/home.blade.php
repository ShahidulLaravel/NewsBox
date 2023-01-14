@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4>Welcome Back</h4>
                </div>
                <div class="card-body">
                    
                @if(Auth::user()->photo == null)
                   <img class="mb-3" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                @else
                  <img style="width:110px;margin-bottom:15px;" src="{{asset('uploads/users/')}}/{{Auth::user()->photo}}" alt="..." class="d-inline avatar-img rounded-circle">
                @endif
            
                  <h1>{{Auth::user()->name}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
