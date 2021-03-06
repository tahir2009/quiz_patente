@extends('layouts.admin.app')
@section('package_nav', 'active')

@section('title', 'Home Page')

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary green-bg">
              <h4 class="card-title">Update packages</h4>
              <p class="card-category"> Update Form</p>
            </div>
            <div class="card-body">
              <form action="{{ url('admin/package',$package->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('put')
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Description</label>
                      <input type="text" name="description" value="{{ $package->description }}" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">
                      @if ($errors->has('description'))
                      <span class="alert">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group width100">
                      <label class="bmd-label-floating">Price</label>
                      <input type="number" name="price" value="{{ $package->price }}" class="form-control {{ $errors->has('price') ? ' is_invalid' : '' }}">
                      @if($errors->has('price'))
                      <span class="alert">{{ $errors->first('price') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="marginex12"></div>
                    <div class="form-group width100">
                      <label class="bmd-label-floating">Duration</label>
                      <div class="marginex12"></div>
                      <input type="text" class="date-view1" name="duration" value="{{ $package->duration }}" class="form-control {{ $errors->has('duration') ? 'is_invalid' : ''}}" />
                      @if($errors->has('duration'))
                      <span class="alert">{{ $errors->first('duration') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="marginex12"></div>
                    <div class="form-group">
                      <label class="bmd-label-floating">Feature</label>
                      <div class="select-menu">
                        <select class="selecter form-control {{ $errors->has('feature_description') ? 'is_invalid' : ''}}" name="feature_descriptions[]" multiple="multiple">
                            @foreach($features as $index => $feature)
                             <option value="{{ $index }}" {{ $package->features()->where('description', $feature[0]->description)->first() ? 'selected' : '' }}>{{ $index }}</option>
                            @endforeach
                          </select>
                          @if($errors->has('feature_descriptions'))
                           <span class="alert">{{ $errors->first('feature_descriptions') }} </span>
                          @endif
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Package</button> 
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
  
</div>
@endsection
