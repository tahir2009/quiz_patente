@extends('layouts.admin.app')
@section('features_nav', 'active')

@section('title', 'Admin | Feature')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary green-bg">
                            <h4 class="card-title">Feature</h4>
                            <p class="card-category">New Features</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('admin/feature') }}" enctype="multipart/form-data" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description</label>
                                            <input type="text" name="description" value="{{ old('description') }}" class="form-control {{ $errors->has('description') ? ' is_invalid' : ''}}">
                                            @if($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Language</label>
                                            <div class="marginex12"></div>
                                            <div class="select-menu">
                                                <select class="selecter form-control {{ $errors->has('language_id') ? ' is-invalid' : '' }}" name="language_id" multiple="multiple">
                                                    <option value="language_id">Choose...</option>
                                                    <option value="all">All</option>
                                                    @foreach($languages as $language)
                                                        <option value="{{ $language->id }}">{{ $language->language }}</option>
                                                     @endforeach
                                                </select>
                                                @if($errors->has('language_id'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('language_id') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">For</label>
                                            <div class="marginex12"></div>
                                            <div class="select-menu">
                                                <select  name="for" class="selecter form-control {{ $errors->has('for') ? ' is-invalid' : '' }}" multiple="multiple">
                                                    <option value="">Choose...</option>
                                                    <option value="quiz">Quiz</option>
                                                    <option value="book">Book</option>
                                                    <option value="video">Video</option>
                                                </select>
                                                @if($errors->has('for'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('for') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Start</label>
                                            <div class="marginex12"></div>
                                            <div class="select-menu">
                                                <select class="selecter form-control {{ $errors->has('start_chapter') ? ' is-invalid' : '' }}" name="start_chapter" multiple="multiple">
                                                    <option value="start_chapter">Choose...</option>
                                                    @foreach($chapters as $start)
                                                    <option value="{{ $start->id }}">{{ $start->name }}</option>
                                                 @endforeach                       
                                                </select>
                                                @if($errors->has('start_chapter'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('start_chapter') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">End</label>
                                            <div class="marginex12"></div>
                                            <div class="select-menu">
                                                <select class="selecter form-control {{ $errors->has('end_chapter') ? ' is-invalid' : '' }}" name="end_chapter" multiple="multiple">
                                                    <option value="end_chapter">Choose...</option>
                                                    @foreach($chapters as $end)
                                                    <option value="{{ $end->id }}">{{ $end->name }}</option>
                                                 @endforeach
                                                </select>
                                                @if($errors->has('end_chapter'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('end_chapter') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">create Features
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection