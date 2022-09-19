@extends('admin.layouts.default')

@section('title','Update Blog')

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
                <h5 class="panel-title">Update Blog </h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('blogs.update',$blogsInfo->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <fieldset class="content-group">
                        <legend class="text-bold"></legend>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Title</label>
                            <div class="col-lg-10">
                                <input type="text" name="title" class="form-control" placeholder="Title here "
                                value="{{ $blogsInfo->title }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Sub Title</label>
                            <div class="col-lg-10">
                                <input type="text" name="sub_title" class="form-control" placeholder="Sub Title here " value="{{ $blogsInfo->sub_title }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Description</label>
                            <div class="col-lg-10">
                                <textarea name="description" rows="5" cols="5" class="form-control" placeholder="Description here">{{ $blogsInfo->description }}</textarea>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label class="control-label col-lg-2">Thumbnail</label>
                            <div class="col-lg-10">
                                <input type="file" name="thumbnail" class="form-control" >
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label class="control-label col-lg-2">Status</label>
                            <div class="col-lg-10">
                                <select name="status" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="1" @if ($blogsInfo->status == 1) selected @endif>Active</option>
                                    <option value="0" @if($blogsInfo->status == 0) selected @endif>In Active</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <div class="text-right">
                        <a href="{{ route('blogs.index') }}" class="btn btn-info text-left"><i class="icon-arrow-left5 position-left"></i>Back to List</a>
                        <button type="submit" class="btn btn-primary">Submit </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form horizontal -->



        <!-- /Formdatatable -->

@endsection
