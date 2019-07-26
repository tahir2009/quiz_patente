@extends('layouts.admin.app')
@section('instructor_nav', 'active')
@section('title', 'School | Students')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary green-bg">
                            <h4 class="card-title">create instructor</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('instructor.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">First Name</label>
                                            <input type="text" name="first_name"
                                                   {{ old('first_name') }} class="form-control {{ $errors->has('first_name') ? ' is-invalid' : '' }}">
                                            @if($errors->has('first_name'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Last Name</label>
                                            <input type="text" value="{{ old('last_name') }}" name="last_name"
                                                   class="form-control {{ $errors->has('last_name') ? ' is-invalid' : '' }}">
                                            @if($errors->has('last_name'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" value="{{ old('email') }}" name="email"
                                                   class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                            @if($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password" value="{{ old('password') }}" name="password"
                                                   class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                            @if($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Confirm Password</label>
                                            <input type="password" value="{{ old('password_confirmation') }}"
                                                   name="password_confirmation"
                                                   class="form-control  {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}">

                                            @if($errors->has('password_confirmation'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Phone number</label>
                                            <input type="number" value="{{ old('phone') }}" name="phone"
                                                   class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}">
                                            @if($errors->has('phone'))
                                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12"></div>
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                        <button type="submit" class="btn btn-primary pull-right">create account</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection