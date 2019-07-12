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
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating width100">Quantity</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Package</label>
                                            <div class="select-menu">
                                                <select class="selecter">
                                                    <option>Quiz Urdu_punjabi_abc complete</option>
                                                    <option>Quiz bangla 1-9</option>
                                                    <option>video italiano 1-9</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group width100">
                                            <label class="bmd-label-floating">School</label>
                                            <div class="select-menu">
                                                <select class="selecter">
                                                    <option>apna school</option>
                                                    <option>apna school</option>
                                                    <option>apna school</option>
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
