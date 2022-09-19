@extends('admin.layouts.default')

@section('title', 'Blog Category')

@section('content')

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        {{-- <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4> <span class="text-semibold">Datatables</span> - List</h4>
            </div>


        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="datatable_basic.html">Datatables</a></li>
                <li class="active">list</li>
            </ul>


        </div>
    </div> --}}
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">

            <!-- Basic datatable -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">List Data Table</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                            <li class="btn btn-info"><a href="{{ route('blogCategory.create') }}">Add New</a></li>
                        </ul>
                    </div>
                </div>

                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th colspan="2" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($blogCategories))
                            @foreach ($blogCategories as $key => $category)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $category->name }}</td>

                                    <td>
                                        @if ($category->status == 1)
                                        <span class="label label-success">Active</span>
                                        @else
                                        <span class="label label-danger">In Active</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <button><a href="{{ route('blogCategory.edit',$category->id) }}"><i class="icon-pencil7"></i></a></button>
                                        <form action="{{ route('blogCategory.destroy', $category->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                        <button type="submit"><i class="icon-bin"></i></button>
                                    </form>

                                    </td>



                                </tr>
                            @endforeach
                        @else
                            <td colspan="6">No data found !</td>
                        @endif

                    </tbody>
                </table>
            </div>
            <!-- /basic datatable -->

        @endsection
