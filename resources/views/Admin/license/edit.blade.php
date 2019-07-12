@extends('layouts.app')
@section('license_nav', 'active')

@section('title', 'Home Page')

@section('content')
    <div class="card-style" style="">
        <div class="card">
            <div class="card-header">
                Update License
                <a href="{{ route('school_account.index') }}" class="float-right btn btn-sm btn-secondary">Cancel</a>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('license.update', $license->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-row  ">
                        <div class="form-group col-md-12">
                            <label for="mac_address">Mac Address</label>
                            <input type="text"
                                   class="form-control form-control-sm {{ $errors->has('mac_address') ? ' is-invalid' : '' }}"
                                   value="{{@$license->student[0]->mac_address}}"
                                   id="mac_address" name="mac_address" placeholder="Mac Address">
                            @if($errors->has('mac_address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('mac_address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('school_account.index') }}" class="btn btn-sm btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-sm btn-primary">Update License</button>
                </form>
            </div>
        </div>
    </div>
@endsection
