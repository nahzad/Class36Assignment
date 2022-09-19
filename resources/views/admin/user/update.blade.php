@extends('admin.layouts.default')

@section('title','User Create')

@section('content')

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    {{-- <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4> <span class="text-semibold">Create User</span> - Form</h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="datatable_basic.html">Create User</a></li>
                <li class="active">Form</li>
            </ul>
        </div>
    </div> --}}
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
       <!-- Formdatatable -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Update User</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ url('users/update') }}/{{ $users->id }}" method="POST">
                    @csrf
                    <fieldset class="content-group">
                        <legend class="text-bold"></legend>
                        <div class="form-group">
                            <label class="control-label col-lg-2">User Name</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" class="form-control" placeholder="Enter your username" value="{{ $users->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">User Mail</label>
                            <div class="col-lg-10">
                                <input type="text" name="email" class="form-control" placeholder="Enter your e-Mail..." value="{{ $users->email }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input type="password" name="password" class="form-control" value="{{ $users->password }}">
                            </div>
                        </div>
                    </fieldset>

                    <div class="text-right">
                        <a href="{{ url('users') }}" class="btn btn-info text-left"><i class="icon-arrow-left5 position-left"></i>Back to List</a>

                        <button type="submit" class="btn btn-primary">Submit </button>

                    </div>

                </form>
            </div>
        </div>
        <!-- /form horizontal -->



        <!-- /Formdatatable -->

@endsection
