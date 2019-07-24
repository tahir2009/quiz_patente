@extends('layouts.admin.app')
@section('instructor_nav', 'active')
@section('title', 'School | Students')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary green-bg">
                        <div class="pull-left">
                            <h4 class="card-title ">instructor</h4>
                            <p class="card-category">instructor list</p>
                        </div>
                        <a href="{{route('instructor.create')}}" class="btn pull-right">create instructor</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-blog align-center">
                                <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Action
                                </th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        rizwanulhaq
                                    </td>
                                    <td>
                                        rizwanulhaq@patentepertutti.it
                                    </td>
                                    <td>
                                        +0092123456788
                                    </td>
                                    <td>
                                        <a href="time_schedule.html" class="btn-sm1"><i class="material-icons">watch_later</i></a>
                                        <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>
                                        <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        rizwanulhaq
                                    </td>
                                    <td>
                                        rizwanulhaq@patentepertutti.it
                                    </td>
                                    <td>
                                        +0092123456788
                                    </td>
                                    <td>
                                        <a href="time_schedule.html" class="btn-sm1"><i class="material-icons">watch_later</i></a>
                                        <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>
                                        <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        rizwanulhaq
                                    </td>
                                    <td>
                                        rizwanulhaq@patentepertutti.it
                                    </td>
                                    <td>
                                        +0092123456788
                                    </td>
                                    <td>
                                        <a href="time_schedule.html" class="btn-sm1"><i class="material-icons">watch_later</i></a>
                                        <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>
                                        <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>
                                    </td>
                                </tr>

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