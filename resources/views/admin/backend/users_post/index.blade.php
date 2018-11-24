@extends('admin.layouts.admin_format')

@section('title', '| users post')

@section('navhead', 'Users Post')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">User's Post</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class=" text-primary">
                                        <th>
                                            USERNAME
                                        </th>
                                        <th>
                                            POST TITLE
                                        </th>
                                        <th>
                                            ACTION
                                        </th>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">Student Name</a>
                                            </td>
                                            <td>
                                                <a href="#">This Is a Post Title</a>
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