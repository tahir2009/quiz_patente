@extends('layouts.app')
@section('package_nav', 'active')

@section('title', 'Home Page')

@section('content')
    <div class="card-style" style="">
        <div class="card">
            <div class="card-header">
                Create Account
                <a href="{{ route('package.index') }}" class="float-right btn btn-sm btn-secondary">Cancel</a>
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('admin/package') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="description">Description</label>
                            <input type="text" value="{{ old('description') }}" name="description"
                                   class="form-control form-control-sm{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                   id="description" placeholder="Description">
                            @if($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="price">Price</label>
                            <input type="number" value="{{old('price')}}" name="price"
                                   class="form-control form-control-sm {{ $errors->has('price') ? ' is-invalid' : '' }}"
                                   id="price">
                            @if($errors->has('price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <label for="duration">Duration</label>
                            <input type="number"
                                   class="form-control form-control-sm {{ $errors->has('duration') ? ' is-invalid' : '' }} "
                                   id="duration" name="duration" value="{{old('duration')}}">
                            @if($errors->has('duration'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('duration') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="feature">Feature</label>
                            <select id="feature" name="feature_descriptions[]"
                                    class="form-control form-control-sm {{ $errors->has('feature_descriptions') ? ' is-invalid' : '' }}"
                                    multiple>
                                @foreach($features as $index => $feature)
                                    <option value="{{ $index }}">{{ $index }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('feature_descriptions'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('feature_descriptions') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('package.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-sm btn-primary">Create Package</button>
                </form>

            </div>
        </div>
    </div>
@endsection
