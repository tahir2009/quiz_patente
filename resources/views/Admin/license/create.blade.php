@extends('layouts.admin.app')
@section('license_nav', 'active')

@section('title', 'Home Page')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary green-bg">
                            <h4 class="card-title">Create license</h4>
                            <p class="card-category">license Form</p>
                        </div>
                        <div class="marginex12"></div>
                        <div class="card-body">
                            <form action=" {{ url('admin/license')}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating width100">Quantity</label>
                                            <input type="number" name="limit" value="{{ old('limit') }}" class="form-control {{ $errors->has('limit') ? ' is-invalid' : '' }}">
                                            @if($errors->has('limit'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('limit') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Package</label>
                                            <div class="select-menu">
                                                <select class="selecter {{ $errors->has('package_id') ? ' is-invalid' : ''}}" name="package_id">
                                                <option value=""></option>
                                                 @foreach ( $packages as $package)
                                                    <option value="{{ $package->id}}"{{ old('package_id') === $package->id ? 'selected' : ''}}>{{ $package->description }}</option>
                                                 @endforeach
                                                </select>
                                            @if($errors->has('package_id'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('package_id') }}</strong>
                                                </span>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group width100">
                                            <label class="bmd-label-floating">School</label>
                                            <div class="select-menu">
                                                <select class="selecter form-control {{ $errors->has('school_id') ? ' is-invalid' : '' }}" name="school_id">
                                                    <option value="Choose"></option>
                                                    @foreach ( $school_accounts as $school_account)
                                                    <option value="{{ $school_account->id}}"{{ old('school_id') === $school_account->id ? 'selected' : ''}}>{{$school_account->name}}</option>
                                                    @endforeach
                                         @if($errors->has('school_id'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('school_id') }}</strong>
                                            </span>
                                        @endif>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary pull-right">Update license</button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
