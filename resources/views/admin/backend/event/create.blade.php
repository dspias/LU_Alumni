@extends('admin.layouts.admin_format')

@section('title', '| create programs & events')

@section('navhead', 'ADD Programs or Events')

@section('content')
    <!-- Start content -->
	      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Any Program/Event</h4>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Program/Event Title</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
					  <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Organized By</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
					  <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Program/Event Date</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Program/Event Location</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
					  <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Program/Event's Facebook Link</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
					  
					  <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Some Info About This Program/Event</label>
                            <textarea class="form-control" rows="3"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Add Program/Event</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              
            </div>
          </div>
        </div>
      </div>
	
    <!-- close content-->
@endsection

@section('scripts')
@endsection