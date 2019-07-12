@extends('layouts.app')
@section('license_nav', 'active')

@section('title', 'Admin | license')

@section('content')
    <div class="card-style" style="">
        <div class="card">
            <div class="card-header">
                Licenses
            </div>
            @if(session()->has('alert'))
                <div class="mt-1">
                    @alert(['type' => session()->get('alert.type')])
                    @if(session()->has('alert.heading'))
                        @slot('alert.heading')
                            {!! session()->get('alert.heading') !!}
                        @endslot
                    @endif
                    @if(session()->has('alert.reason'))
                        @slot('alert.reason')
                            {!! session()->get('alert.reason') !!}
                        @endslot
                    @endif
                    {!! session()->get('alert.message') !!}
                    @endalert
                </div>
            @endif
            <div class="card-body">

                <a href="{{route('license.create')}}" class="text-center btn btn-sm btn-primary">New License</a>
            </div>
        </div>
    </div>
@endsection
