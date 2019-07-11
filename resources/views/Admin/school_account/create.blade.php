@extends('layouts.admin.app')

@section('create_school_nav', 'active')

@section('title', 'Admin | School Accounts')


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary green-bg">
                            <h4 class="card-title">Create Account</h4>
                            <p class="card-category">Create a profile</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Confirm Password</label>
                                            <input type="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Package</label>
                                            <div class="select-menu">
                                                <select class="selecter">
                                                    <option selected="selected">Choose...</option>
                                                    <option>Free</option>
                                                    <option>Silver</option>
                                                    <option>Gold</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">School Type</label>
                                            <div class="select-menu">
                                                <select class="selecter">
                                                    <option>Choose...</option>
                                                    <option>Driving</option>
                                                    <option>Theory</option>
                                                    <option>Both</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group width100">
                                            <label class="bmd-label-floating">Package date</label>
                                            <div class="marginex12"></div>
                                            <input type="text" class="date-view1" name="datefilter" value="01/01/2018 - 01/15/2018" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="marginex8"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating width100">Phone number</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nationalities</label>
                                            <div class="select-menu">
                                                <select class="selecter" name="nationalities[]" multiple="multiple">
                                                    <option>All</option>
                                                    <option>Afghanistan</option>
                                                    <option>Albania</option>
                                                    <option>Algeria</option>
                                                    <option>Andorra</option>
                                                    <option>Angola</option>
                                                    <option>Antigua e Barbuda</option>
                                                    <option>Azerbaigian</option>
                                                    <option>Argentina</option>
                                                    <option>Australia</option>
                                                    <option>Austria</option>
                                                    <option>Bahamas</option>
                                                    <option>Bahrein</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Type in an address</label>
                                            <input id="geocomplete" class="form-control" type="text" placeholder="" value="" />
                                            <input id="find" class="search" type="button" value="find"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">latitude</label>
                                            <input class="form-control" name="lat" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">longitude</label>
                                            <input class="form-control" name="lng" type="text" value="">
                                        </div>
                                        <div class="mb30"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="map_canvas"></div>
                                        <button type="submit" class="btn btn-primary pull-right">create Profile</button>
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
