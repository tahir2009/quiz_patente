@extends('layouts.admin.app')
@section('features_nav', 'active')

@section('title', 'Admin | Feature')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary green-bg">
                        <div class="pull-left">
                            <h4 class="card-title ">Features</h4>
                            <p class="card-category">Features list</p>
                        </div>
                        <a href="{{ route('feature.create')}}" class="btn pull-right">New Features</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive extra-feature" style="overflow:visible;">
                            <table class="table table-blog">
                                <thead class="text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>
                                        Detail
                                    </th>
                                    <th>
                                        Language
                                    </th>
                                    <th>
                                        For
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </thead>
                                <tbody>
                                @foreach($features as $index => $feature)
                                    <tr>
                                        <td>
                                            {{++$index}}
                                        </td>
                                        <td>quiz</td>
                                        <td>
                                            <div class="select-menu">
                                                <select class="selecter">
                                                    <option selected="selected">chapters</option>
                                                    @foreach($feature as $index => $f)
                                                    <option>{{ $f->chapter ? $f->chapter->name : $f->lesson->name }} </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            {{ $feature[0]->language->language}}
                                        </td>
                                        <td>
                                            {{$feature[0]->for}}
                                        </td>
                                        <td>
                                            <a href="{{ route('feature.edit', $feature[0]->id)}}" class="btn-sm1"><i class="material-icons">edit</i></a>
                                            <form  method="post"
                                                  action="{{ route('feature.destroy', $feature[0]->id) }}"
                                                  onsubmit="return confirm('Do you really want to delete this feature?');">
                                                @csrf
                                                @method('delete')
                                                <button  class="btn-sm1"><i class="material-icons">delete</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            2--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            Quiz Urdu_punjabi_abc complete--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <div class="select-menu">--}}
{{--                                                <select class="selecter">--}}
{{--                                                    <option selected="selected">chapters</option>--}}
{{--                                                    <option>Quiz Quiz Urdu_punjabi_abc complete  Quiz Urdu_punjabi_abc complete  Urdu_punjabi_abc complete  </option>--}}
{{--                                                    <option>Quiz Quiz Urdu_punjabi_abc complete   Quiz Urdu_punjabi_abc complete   Urdu_punjabi_abc complete  </option>--}}
{{--                                                    <option>Quiz Urdu_punjabi_abc complete  </option>--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            urdu--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            quiz--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                            <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                    <td>--}}
{{--                                        3--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        Quiz Urdu_punjabi_abc complete--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <div class="select-menu">--}}
{{--                                            <select class="selecter">--}}
{{--                                                <option selected="selected">chapters</option>--}}
{{--                                                <option>Quiz Quiz Urdu_punjabi_abc complete  Quiz Urdu_punjabi_abc complete  Urdu_punjabi_abc complete  </option>--}}
{{--                                                <option>Quiz Quiz Urdu_punjabi_abc complete   Quiz Urdu_punjabi_abc complete   Urdu_punjabi_abc complete  </option>--}}
{{--                                                <option>Quiz Urdu_punjabi_abc complete  </option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        urdu--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        quiz--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <a href="" class="btn-sm1"><i class="material-icons">edit</i></a>--}}
{{--                                        <a href="" class="btn-sm1"><i class="material-icons">delete</i></a>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
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