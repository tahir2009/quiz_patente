@extends('layouts.admin.app')

@section('school_accounts_nav', 'active')

@section('title', 'Admin | School Accounts')


@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary green-bg">
                            <div class="pull-left">
                                <h4 class="card-title ">School Accounts </h4>
                                <p class="card-category">Table list</p>
                            </div>
                            <a href="create-account.html" class="btn pull-right">create account</a>
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
                                        Package
                                    </th>
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        view students
                                    </th>
                                    <th>
                                        License
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($school_accounts as $index => $school_account)
                                    <tr>
                                        <td>
                                            {{++$index}}
                                        </td>
                                        <td>
                                            {{$school_account->name}}
                                        </td>
                                        <td>
                                            {{$school_account->email}}
                                        </td>
                                        <td >
                                            <a href="school-licenses.html">
                                                view Package
                                            </a>
                                        </td>
                                        <td>
                                            Registrati gratis a quizpatenteonline.it, migliorerai la tua preparazione per l'esame di teoria a 40 domande. A tua disposizione un pannello personalizzato
                                        </td>
                                        <td>
                                            <a href="view-students.html">View students</a>
                                        </td>
                                        <td>
                                            <a href="view-licenses.html">View Licenses</a>
                                        </td>
                                        <td>
                                            @if($school_account->blocked === 0)
                                                <a href="{{route('school_account.update_status',$school_account->id)}}"
                                                   class="btn btn-sm btn-outline-success">Active</a>
                                            @else
                                                <a href="{{route('school_account.update_status',$school_account->id)}}"
                                                   class="btn btn-sm btn-outline-danger">Blocked</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>
                                            <form  method="post"
                                                   action="{{ route('school_account.destroy', $school_account->id) }}"
                                                   onsubmit="return confirm('Do you really want to delete this account?');">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            2--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Apna school--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            qwerty@patentepertutti.com--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="school-licenses.html">--}}
{{--                                                view Package--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Registrati gratis a quizpatenteonline.it, migliorerai la tua preparazione per l'esame di teoria a 40 domande. A tua disposizione un pannello personalizzato--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-students.html">View students</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-licenses.html">View Licenses</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="">Active</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            3--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Apna school--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            zxcvb@patentepertutti.com--}}
{{--                                        </td>--}}
{{--                                        <td >--}}
{{--                                            <a href="school-licenses.html">--}}
{{--                                                view Package--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Registrati gratis a quizpatenteonline.it, migliorerai la tua preparazione per l'esame di teoria a 40 domande. A tua disposizione un pannello personalizzato--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-students.html">View students</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-licenses.html">View Licenses</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="">Active</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            4--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Apna school--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            asdfgh@patentepertutti.com--}}
{{--                                        </td>--}}
{{--                                        <td >--}}
{{--                                            <a href="school-licenses.html">--}}
{{--                                                view Package--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Registrati gratis a quizpatenteonline.it, migliorerai la tua preparazione per l'esame di teoria a 40 domande. A tua disposizione un pannello personalizzato--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-students.html">View students</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-licenses.html">View Licenses</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="">Active</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            5--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Apna school--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            werty@patentepertutti.com--}}
{{--                                        </td>--}}
{{--                                        <td >--}}
{{--                                            <a href="school-licenses.html">--}}
{{--                                                view Package--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Registrati gratis a quizpatenteonline.it, migliorerai la tua preparazione per l'esame di teoria a 40 domande. A tua disposizione un pannello personalizzato--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-students.html">View students</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-licenses.html">View Licenses</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="">Active</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            6--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Apna school--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            kjhgf@patentepertutti.com--}}
{{--                                        </td>--}}
{{--                                        <td >--}}
{{--                                            <a href="school-licenses.html">--}}
{{--                                                view Package--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            both--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-students.html">View students</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-licenses.html">View Licenses</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="">Active</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            7--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Apna school--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            oiuyt@patentepertutti.com--}}
{{--                                        </td>--}}
{{--                                        <td >--}}
{{--                                            <a href="school-licenses.html">--}}
{{--                                                view Package--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            both--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-students.html">View students</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-licenses.html">View Licenses</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="">Active</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            8--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Apna school--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            wertu@patentepertutti.com--}}
{{--                                        </td>--}}
{{--                                        <td >--}}
{{--                                            <a href="school-licenses.html">--}}
{{--                                                view Package--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            both--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-students.html">View students</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-licenses.html">View Licenses</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="">Active</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            9--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Apna school--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            gfre@patentepertutti.com--}}
{{--                                        </td>--}}
{{--                                        <td >--}}
{{--                                            <a href="school-licenses.html">--}}
{{--                                                view Package--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            both--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-students.html">View students</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-licenses.html">View Licenses</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="">Active</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            10--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Apna school--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            bgf@patentepertutti.com--}}
{{--                                        </td>--}}
{{--                                        <td >--}}
{{--                                            <a href="school-licenses.html">--}}
{{--                                                view Package--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            both--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-students.html">View students</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-licenses.html">View Licenses</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="">Active</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            11--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Apna school--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            xcv@patentepertutti.com--}}
{{--                                        </td>--}}
{{--                                        <td >--}}
{{--                                            <a href="school-licenses.html">--}}
{{--                                                view Package--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            both--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-students.html">View students</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-licenses.html">View Licenses</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="">Active</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            12--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Apna school--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            abx@patentepertutti.com--}}
{{--                                        </td>--}}
{{--                                        <td >--}}
{{--                                            <a href="school-licenses.html">--}}
{{--                                                view Package--}}
{{--                                            </a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            both--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-students.html">View students</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="view-licenses.html">View Licenses</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="">Active</a>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
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