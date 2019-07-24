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
                            <small>{{ auth()->user()->students()->count() }}</small>
                        </h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i>
                            <a href="{{ route('student.index') }}">Click to view</a>
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
                        <h4 class="card-title">{{ auth()->user()->licenses()->count() }}</h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i>
                            <a href="{{ route('student.index') }}">Licenses</a>
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
                        @php($sold_licenses = 0)
                        @php($unsold_licenses = 0)
                        @php($active_licenses = 0)
                        @foreach(auth()->user()->licenses as $license)
                            @if(empty(@$license->student[0]))
                                @php($unsold_licenses++)
                            @else
                                @php($sold_licenses++)
                            @endif

                            @if(@$license->student[0]->pivot->started_at)
                                @php($active_licenses++)
                            @endif
                        @endforeach
                        <p class="card-category">Active License</p>
                        <h4 class="card-title">
                            <small>{{ $active_licenses }}</small>
                        </h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i>
                            <a href="{{ route('student.index') }}">Click to view</a>
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
                        <h4 class="card-title">{{ $unsold_licenses }}</h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i>
                            <a href="{{ route('student.index') }}">Click to view</a>
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
                            <small>{{ $sold_licenses }}</small>
                        </h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">store</i>
                            <a href="{{ route('student.index') }}">Click to view</a>
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
                            <a href="{{ route('student.index') }}">Click to view</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection