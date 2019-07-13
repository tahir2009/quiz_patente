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
              <h4 class="card-title">Create packages</h4>
              <p class="card-category">Package Form</p>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Description</label>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group width100">
                      <label class="bmd-label-floating">Price</label>
                      <input type="number" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="marginex12"></div>
                    <div class="form-group width100">
                      <label class="bmd-label-floating">Duration</label>
                      <div class="marginex12"></div>
                      <input type="text" class="date-view1" name="datefilter" value="" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="marginex12"></div>
                    <div class="form-group">
                      <label class="bmd-label-floating">Feature</label>
                      <div class="select-menu">
                        <select class="selecter" name="nationalities[]" multiple="multiple">
                          <option>Quiz Urdu_punjabi_abc complete</option> 
                          <option>Quiz bangla 1-9</option> 
                          <option>video italiano 1-9</option> 
                        </select>
                      </div>
                    </div>
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
  
</div>
@endsection
