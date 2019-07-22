@extends('layouts.admin.app')
@section('dashboard_nav', 'active')
@section('title', 'School | Dashboard')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">commute</i>
                        </div>
                        <p class="card-category">No of students</p>
                        <h4 class="card-title">
                            <small>1</small>
                        </h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i>
                            <a href="tables.html">Click to view</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">verified_user</i>
                        </div>
                        <p class="card-category">No Of Licenses</p>
                        <h4 class="card-title">2</h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i>
                            <a href="tables.html">Licenses</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <p class="card-category">Active License</p>
                        <h4 class="card-title">
                            <small>2</small>
                        </h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i>
                            <a href="tables.html">Click to view</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <p class="card-category">Unsold License</p>
                        <h4 class="card-title">0</h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i>
                            <a href="tables.html">Click to view</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">commute</i>
                        </div>
                        <p class="card-category">Sold License</p>
                        <h4 class="card-title">
                            <small>1</small>
                        </h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i>
                            <a href="tables.html">Click to view</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">commute</i>
                        </div>
                        <p class="card-category">Total Licenses</p>
                        <h4 class="card-title">
                            <small>1</small>
                        </h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i>
                            <a href="tables.html">Click to view</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection