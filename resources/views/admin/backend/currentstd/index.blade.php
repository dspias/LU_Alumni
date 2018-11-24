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
                  <h4 class="card-title ">Current Student List</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>SL.No.</th>

                        <th>Name</th>

                        <th>Department</th>

                        <th>University Id</th>

                        <th>Graduation year</th>

                        <th>View More</th>

                      </thead>
                      <tbody>
                        <tr>
                          <td>01</td>

                          <td>Raju Deb Rupok</td>

                          <td>CSE</td>

                          <td>1512020204</td>

                          <td>2017</td>
                          <td class="text-primary">
                            <a href="{{ route('admin.currentstd.show', ['id' => 1]) }}" class="btn btn-info btn-sm">View</a>
                          </td>

                        </tr>

                        <tr>
                          <td>01</td>

                          <td>Raju Deb Rupok</td>

                          <td>CSE</td>

                          <td>1512020204</td>

                          <td>2017</td>
                          <td class="text-primary">
                            <a href="{{ route('admin.currentstd.show', ['id' => 2]) }}" class="btn btn-info btn-sm">View</a>
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