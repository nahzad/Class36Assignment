@extends('admin.layouts.default')

@section('title','Blog Category Create')

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
                <h5 class="panel-title">Create Blog Category</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('blogCategory.store') }}" method="POST">
                    @csrf
                    <fieldset class="content-group">
                        <legend class="text-bold"></legend>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Category Name</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" class="form-control" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Status</label>
                            <div class="col-lg-10">
                                <select name="status" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">In Active</option>

                                </select>
                            </div>
                        </div>


                    </fieldset>

                    <div class="text-right">
                        <a href="{{ route('blogCategory.index') }}" class="btn btn-info text-left"><i class="icon-arrow-left5 position-left"></i>Back to List</a>

                        <button type="submit" class="btn btn-primary">Submit </button>

                    </div>

                </form>
            </div>
        </div>
        <!-- /form horizontal -->



        <!-- /Formdatatable -->

@endsection
