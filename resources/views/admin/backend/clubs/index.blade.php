@extends('admin.layouts.admin_format')

@section('title', '| Clubs')

@section('navhead', '')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title float-left">Popular Clubs</h2>
                            <a href="{{ route('admin.club.create') }}"><button class="btn btn-info float-right">Add New Club</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class=" text-primary">
                                        <th>
                                            CLUB NAME
                                        </th>
                                        <th>
                                            CLUB MOTO
                                        </th>
                                        <th>
                                            ACTION
                                        </th>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">The Banned Community</a>
                                            </td>
                                            <td>
                                                <a href="#">World Stop To Listen</a>
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