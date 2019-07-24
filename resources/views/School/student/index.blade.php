@extends('layouts.admin.app')
@section('student_nav', 'active')
@section('title', 'School | Students')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary green-bg">
                        <div class="pull-left">
                            <h4 class="card-title ">students</h4>
                            <p class="card-category">students list</p>
                        </div>
                        <a href="{{route('student.create')}}" class="btn pull-right">new student</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-blog">
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
                                    Statistics
                                </th>
                                <th>
                                    License
                                </th>
                                <th>
                                    Action
                                </th>
                                </thead>
                                <tbody>
                                @foreach($students as $index=>$student)
                                <tr>
                                    <td>
                                        {{++$index}}
                                    </td>
                                    <td>
                                        {{$student->first_name . " " . $student->last_name }}
                                    </td>
                                    <td>
                                        {{$student->email}}
                                    </td>
                                    <td>
                                        {{$student->phone}}
                                    </td>
                                    <td>
                                        <a href="">view statistics</a>
                                    </td>
                                    <td>
                                        <a href="{{route('student.show',$student->id)}}">view licenses</a>
                                    </td>
                                    <td>
                                        <!-- <a href="macaddress.html" class="btn-sm1"><i class="material-icons">screen_lock_portrait</i></a> -->
                                        <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>
                                        <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>
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