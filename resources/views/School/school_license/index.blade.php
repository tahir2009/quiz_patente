@extends('layouts.admin.app')
@section('license_nav', 'active')

@section('title', 'School | License')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary green-bg">
                        <div class="pull-left">
                            <h4 class="card-title ">student license</h4>
                            <p class="card-category"></p>
                        </div>
                    </div>
                    <div class="card-body align-center">
                        <div class="view-school green-bg">
                            <h4><b><i class="fa fa-graduation-cap" aria-hidden="true"></i>Name</b>apna school</h4>
                            <h4><b><i class="fa fa-envelope" aria-hidden="true"></i>Email</b>apnaschool@patenepertutti.com</h4>
                            <h4><b><i class="fa fa-phone" aria-hidden="true"></i>phone</b>+923124326247</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-blog">
                                <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    licenses
                                </th>
                                <th>
                                    packages
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Started at
                                </th>
                                <th>
                                    Ended at
                                </th>
                                <!-- <th>
                                  Action
                                </th> -->
                                </thead>
                                <tbody>
                                @foreach($licenses as $index => $license)
                                <tr>
                                    <td>
                                        {{++$index}}
                                    </td>
                                    <td>
                                        {{$license->license}}
                                    </td>
                                    <td>
                                        {{$license->package->description}}
                                    </td>
                                    <td >
                                        <div class="text-{{empty(@$license->student[0]) ? 'danger' : 'success'}}">
                                            {{empty(@$license->student[0]) ? 'unsold' : 'sold'}}
                                        </div>
                                    </td>
                                    <td>
                                        {{ @$license->student[0]->pivot->started_at ? date_format(date_create(@$license->student[0]->pivot->started_at), 'd, M Y')  : ''}}
                                    </td>
                                    <td>
                                        @if(@$license->student[0]->pivot->started_at)
                                            @php($expired_at = date('Y-m-d H:i:s', strtotime('+' . $license->package->duration . ' months', strtotime($license->student[0]->pivot->started_at))))
                                            {{ date_format(date_create($expired_at), 'd, M Y') }}
                                        @endif
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection