@extends('layouts.admin.app')

@section('create_school_nav', 'active')

@section('title', 'Admin | School Accounts update')


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
                            <form action="{{ url('admin/school_account',$school_account->id) }}" enctype="multipart/form-data" method="POST">
                                    {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            
                                            <input type="text" value="{{ $school_account->name }}" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
                                            @if($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" name="email" value="{{ $school_account->email }}" class="form-control {{ $errors->has('email') ? ' is-invalid' : ''}}">
                                            @if($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Password</label>
                                            <input type="password" value="{{ $school_account->password }}" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}">
                                            @if($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Confirm Password</label>
                                            <input type="password" value="{{ $school_account->password_confirmation }}" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : ''}}">
                                            @if($errors->has('password_confirmation'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Package</label>
                                            <div class="select-menu">
                                                <select class="selecter form-control {{ $errors->has('package') ? ' is-invalid' : ''}}" name="package" >
                                                    <option selected="selected">Choose...</option>
                                                    <option value="free" {{ $school_account->package ==='free' ? 'selected' : '' }}>Free</option>
                                                    <option value="silver" {{ $school_account->package ==='silver' ? 'selected' : '' }}>Silver</option>
                                                    <option value="gold" {{ $school_account->package ==='gold' ? 'selected' : '' }}>Gold</option>
                                                </select>
                                                @if($errors->has('package'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('package') }}</strong>
                                             </span>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">School Type</label>
                                            <div class="select-menu">
                                                <select class="selecter form-control {{ $errors->has('school_type') ? ' is-invalid' : ''}}" name="school_type" >
                                                    <option>Choose...</option>
                                                    <option  value="driving" {{ $school_account->school_type==='driving' ? 'selected' : '' }} >Driving</option>
                                                    <option value="theory" {{ $school_account->school_type==='theory' ? 'selected' : '' }}>Theory</option>
                                                    <option value="both" {{ $school_account->school_type==='both' ? 'selected' : '' }}>Both</option>
                                                </select>
                                                @if($errors->has('school_type'))
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('school_type') }}</strong>
                                                 </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="form-group width100">
                                            <label class="bmd-label-floating">Package date</label>
                                            <div class="marginex12"></div>
                                            <input type="text" value="{{ $school_account->date }}" name="date" class="date-view1 form-control {{ $errors->has('date') ? ' is-invalid' : '' }}" />
                                            @if($errors->has('date'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('date') }}</strong>
                                             </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="marginex12"></div>
                                        <div class="marginex8"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating width100">Phone number</label>
                                            <input type="number" value="{{ $school_account->phone }}"  name="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}">
                                            @if($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                             </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="marginex12"></div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nationalities</label>
                                            <div class="select-menu">
                                                <select name="nationalities[]" multiple="multiple" class="selecter form-control {{ $errors->has('nationalities') ? ' is-invalid' : '' }}" >
                                                    <option value="all">All</option>
                                                    @foreach(\App\Country::all() as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('nationalities'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('nationalities') }}</strong>
                                             </span>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Type in an address</label>
                                            <input id="geocomplete" name="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" type="text" placeholder="" value="{{ $school_account->address }}" />
                                            <input id="find" class="search" type="button"  value="find"/>
                                            @if($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">latitude</label>
                                            <input  name="latitude" value=" {{ $school_account->latitude}} " type="text" class="form-control {{ $errors->has('latitude') ? ' is-invalid' : '' }}" id="latitude">
                                            @if($errors->has('latitude'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('latitude') }}</strong>
                                             </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">longitude</label>
                                            <input  name="longitude" type="text" value="{{ $school_account->longitude }}" class="form-control {{ $errors->has('longitude') ? ' is-invalid' : '' }}" id="longitude">
                                        </div>
                                        <div class="mb30"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="map_canvas" id="map"></div>
                                        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
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
    
@section('script')
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDUiNLmrmC-jZyCu48aTgTk928BYvyvLNo"></script>
<script>
    window.onload = function () {
        var map;

        function initialize() {
            var myLatlng = new google.maps.LatLng($('#latitude').val(), $('#longitude').val());

            var myOptions = {
                zoom: 8,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("map"), myOptions);

            var marker = new google.maps.Marker({
                draggable: true,
                position: myLatlng,
                map: map,
                title: "Your location"
            });

            google.maps.event.addListener(marker, 'dragend', function (event) {
                document.getElementById("latitude").value = event.latLng.lat();
                document.getElementById("longitude").value = event.latLng.lng();
                infoWindow.open(map, marker);
            });
        }

        google.maps.event.addDomListener(window, "load", initialize());
    }
</script>
@endsection


