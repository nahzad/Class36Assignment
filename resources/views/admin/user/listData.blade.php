@extends('admin.layouts.default')

@section('title', 'User')

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
                            <li class="btn btn-info"><a href="{{ url('users/create') }}">Add New</a></li>
                        </ul>
                    </div>
                </div>

                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>

                            <th colspan="2" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($users))
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>

                                    <td class="text-center">
                                        <button class="btn btn-outline-info"><a
                                                href="{{ url('users/edit') }}/{{ $user->id }}"><i
                                                    class="icon-pencil7"></i></a></button>
                                        <button class="btn btn-outline-danger"><a
                                                href="{{ url('users/delete') }}/{{ $user->id }}"><i
                                                    class="icon-bin"></i></a></button>
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
