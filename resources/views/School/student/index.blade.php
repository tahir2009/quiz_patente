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
                        <a href="create-account.html" class="btn pull-right">new student</a>
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
                                        <a href="">view statistics</a>
                                    </td>
                                    <td>
                                        <a href="student-licenses.html">view licenses</a>
                                    </td>
                                    <td>
                                        <!-- <a href="macaddress.html" class="btn-sm1"><i class="material-icons">screen_lock_portrait</i></a> -->
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
                                        <a href="">view statistics</a>
                                    </td>
                                    <td>
                                        <a href="student-licenses.html">view licenses</a>
                                    </td>
                                    <td>
                                        <!-- <a href="macaddress.html" class="btn-sm1"><i class="material-icons">screen_lock_portrait</i></a>
                                         -->
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
                                        <a href="">view statistics</a>
                                    </td>
                                    <td>
                                        <a href="student-licenses.html">view licenses</a>
                                    </td>
                                    <td>
                                        <!-- <a href="macaddress.html" class="btn-sm1"><i class="material-icons">screen_lock_portrait</i></a>
                                         --><a href="" class="btn-sm1"><i class="material-icons">edit</i></a>
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