@extends('admin.layouts.admin_format')

@section('title', '| Departments')

@section('navhead', 'Departments List')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title float-left">Departments</h2>
                            <a href="{{ route('admin.departments.create') }}"><button class="btn btn-info float-right">Add New</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class=" text-primary">
                                        <th>
                                            Sl.
                                        </th>
                                        <th>
                                            DEPARTMENT NAME
                                        </th>
                                        <th>
                                            ACTION
                                        </th>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                01
                                            </td>
                                            <td>
                                                <a href="#">Department Of Computer Science & Engineering</a>
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                    <label class="btn btn-danger btn-sm">
                                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>Delete
                                                    </label>
                                                    <label class="btn btn-info btn-sm">
                                                        <input type="radio" name="options" id="option2" autocomplete="off">Details
                                                    </label>
                                                </div>
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
            
    <!-- close content-->
@endsection

@section('scripts')
@endsection