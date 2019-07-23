@extends('layouts.admin.app')
@section('student_nav', 'active')

@section('title', 'Home Page')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary green-bg">
                            <h4 class="card-title">Create New Student</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('student.store') }}" enctype="multipart/form-data">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Country</label>
                                            <div class="select-menu">
                                                <select name="country_id"
                                                        class= " selecter  form-control{{ $errors->has('country_id') ? ' is-invalid' : '' }}">
                                                    <option selected="selected">Choose...</option>
                                                    @foreach($countries as $country)
                                                        <option value="{{ $country->id }}" {{ old('country_id') === $country->id ? 'selected' : '' }}>{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('country_id'))
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('country_id') }}</strong>
                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="col-md-6 col-sm-6 col-xs-12">--}}
{{--                                        <div class="checkbox-column">--}}
{{--                                            <div class="form-check">--}}
{{--                                                <label class="form-check-label">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" checked>--}}
{{--                                                    <span class="form-check-sign">--}}
{{--                                <span class="check"></span>--}}
{{--                              </span>--}}
{{--                                                    <h6>for booking</h6>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check">--}}
{{--                                                <label class="form-check-label">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="" checked>--}}
{{--                                                    <span class="form-check-sign">--}}
{{--                                <span class="check"></span>--}}
{{--                              </span>--}}
{{--                                                    <h6>chat enable</h6>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
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