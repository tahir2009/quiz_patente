@extends('layouts.admin.app')

@section('content')

    <div class="card">
        <div class="card-header">
            Login
        </div>
        @if(session()->has('alert'))
            <div class="mt-1">
                @alert(['type' => session()->get('alert.type')])
                @if(session()->has('alert.heading'))
                    @slot('heading')
                        {!! session()->get('alert.heading') !!}
                    @endslot
                @endif
                @if(session()->has('alert.reason'))
                    @slot('reason')
                        {!! session()->get('alert.reason') !!}
                    @endslot
                @endif
                {!! session()->get('alert.message') !!}
                @endalert
            </div>
        @endif
        <div class="card-body">
            <form method="post" action="{{ url('login') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Enter email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @else
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.
                        </small>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           id="exampleInputPassword1"
                           placeholder="Password" value="{{ old('password') }}">
                    @if($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection