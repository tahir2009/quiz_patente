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
                            <form action="{{ url('admin/feature', $feature->id) }}" enctype="multipart/form-data" method="POST">
                               @method('put')
                               @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Description</label>
                                                <input type="text" value="{{ $feature->description }}" name="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"  >
                                             @if($errors->has('description'))
                                                <span class="alert alert-danger" role="alert">
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
                                                <select  name="language_id" multiple="multiple" class="selecter form-control {{ $errors->has('language_id') ? ' is-invalid' : '' }}">
                                                    <option value="language_id">Choose...</option>
                                                    <option value="all">All</option>
                                                    @foreach($languages as $language)
                                                         <option value="{{ $language->id }}" {{ $feature->language->id === $language->id ? 'selected' : '' }}>{{ $language->language }}</option>
                                                     @endforeach
                                                </select>
                                                @if($errors->has('language_id'))
                                                    <span class="alert alert-danger" role="alert">
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
                                                    <option value="quiz" {{ ($feature->for === 'quiz' ? 'selected': '')  }}>Quiz</option>
                                                    <option value="book" {{ ($feature->for === 'book' ? 'selected': '')  }}>Book</option>
                                                    <option value="video" {{ ($feature->for === 'video' ? 'selected': '')  }}>Video</option>
                                                </select>
                                                @if($errors->has('for'))
                                                    <span class="alert alert-danger" role="alert">
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
                                                <select class="selecter form-control {{ $errors->has('chapter_id') ? ' is-invalid' : '' }}" name="chapter_id" multiple="multiple">
                                                    <option value="chapter_id">Choose...</option>
                                                    @foreach($chapters as $start)
                                                    <option value="{{ $start->id }}" {{ $feature->chapter->id === $start->id ? 'selected':'' }}>{{ $start->name }}</option>
                                                 @endforeach                       
                                                </select>
                                                @if($errors->has('chapter_id'))
                                                <span class="alert alert-danger" role="alert">
                                                    <strong>{{ $errors->first('chapter_id') }}</strong>
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
                                                <select class="selecter form-control {{ $errors->has('lesson_id') ? ' is-invalid' : '' }}" name="lesson_id" multiple="multiple">
                                                    <option value="lesson_id">Choose...</option>
                                                    @foreach($chapters as $end)
                                                    <option value="{{ $end->id }}"{{ $feature->chapter->id===$end->id ? 'selected' :'' }}>{{ $end->name }}</option>
                                                 @endforeach
                                                </select>
                                                @if($errors->has('lesson_id'))
                                                <span class="alert alert-danger" role="alert">
                                                    <strong>{{ $errors->first('lesson_id') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update Features
                                        </button>
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