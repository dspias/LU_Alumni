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
                                            @foreach($posts as $post)
                                            <td>
                                            <a href="#">{{ $post->first_name }}</a>
                                            </td>
                                            <td>
                                                <a href="#">{{ $post->title }}</a>
                                            </td>
                                            <td>
                                                
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                         <a href="#" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i> 
                                                            Delete
                                                        </a> 
                            
                                                        <a href="#" class="btn btn-info btn-sm">
                                                            <i class="fas fa-info-circle"></i> 
                                                            Details
                                                        </a>
                                                    </div>

                                            </td>
                                        @endforeach
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- paginate --}}

            </div>
        </div>
    </div>
        
    <!-- close content-->
@endsection

@section('scripts')
@endsection