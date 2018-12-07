@extends('layouts.withnav') @section('title', '| Home') @section('stylesheet')
<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}"> @endsection @section('content')

<section class="career-advice-part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="career-category">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-item nav-link active" id="nav-itJob-tab" data-toggle="tab" href="#nav-itJob" role="tab" aria-controls="nav-itJob" aria-selected="true">IT Jobs</a>
                        <a class="nav-item nav-link" id="nav-govt-tab" data-toggle="tab" href="#nav-govt" role="tab" aria-controls="nav-govt" aria-selected="false">Govt. Job</a>
                        <a class="nav-item nav-link" id="nav-bcs-tab" data-toggle="tab" href="#nav-bcs" role="tab" aria-controls="nav-bcs" aria-selected="false">BCS</a>
                        <a class="nav-item nav-link" id="nav-ideas-tab" data-toggle="tab" href="#nav-ideas" role="tab" aria-controls="nav-ideas" aria-selected="false">Ideas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="border-left: 1px solid #eeeeee88; border-right: 1px solid #eeeeee88;">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="nav-itJob" role="tabpanel" aria-labelledby="nav-itJob-tab">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Career & Networking</li>
                                <li class="breadcrumb-item"><a href="#">Career Advice</a></li>
                                <li class="breadcrumb-item active" aria-current="page">IT-Jobs</li>
                            </ol>
                        </nav>
                        <hr>
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            <img class="rounded-circle" style="width: 45px; height: 45px;" src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-1/c0.0.720.720a/19247567_1645808748823959_3658195382233747207_n.jpg?_nc_cat=110&_nc_eui2=AeH2jM9F05xik0diMN-5oqkx4chX45GXA5JouGvYe89IJEk6c10zBfBKdumFr4V63o2YPork8v8vck7UGRo2oSgZYhGdmce1E4Gu65-bq-ji4A&_nc_ht=scontent.fdac6-1.fna&oh=894adb112004260cf12473aa4dc84d0e&oe=5CAB3E18" alt="">
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">Sabbir Ahmed</div>
                                            <div class="text-muted">CSE 32nd Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <a class="card-link" href="#">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                                </a>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="float-left">
                                    <a href="#" class="card-link"><i class="far fa-heart"></i> Like <sup>(122)</sup></a>
                                    <a href="#" class="card-link comment"><i class="far fa-comments"></i> Comment <sup>(122)</sup></a>
                                </div>
                                <div class="float-right">
                                    <strong class="post-time-date">12-01-2019 | 09.03am</strong>
                                </div>
                            </div>
                            <div class="card-body post-comment">
                                <div class="new-comment">
                                    <textarea class="form-control" id="postComment" rows="1" placeholder="Post a comment"></textarea>
                                    <button class="btn btn-primary btn-sm btn-block btn-comment">Comment</button>
                                </div>

                                <div class="user-comments">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-2">
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-9/41626289_2278594075706605_3080735949286539264_n.jpg?_nc_cat=100&_nc_eui2=AeHO6xpHzaTksOt0xAbgd1MQ9gUdaLA-7INu5nnmT-o5OcKUOG0ZSfTaclhIhjBSMafNrEGVfJTacM5DmSJa8nniGJ_o1qhfv7uafK7HOPsgVA&_nc_ht=scontent.fdac6-1.fna&oh=c4b68fd8c5d60b617d13f0d7f457d644&oe=5C731368" alt="">
                                            </div>
                                            <div class="ml-2">
                                                <div class="h5 m-0"><a href="#">Pias Das Raaj</a></div>
                                                <div class="text-muted">10-10-2010 | 02.02pm</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comnt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, enim? Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, repudiandae.</div>
                                </div>
                                <div class="user-comments">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-2">
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-9/24991333_704642113072260_4420828549095238564_n.jpg?_nc_cat=105&_nc_eui2=AeEtpqeU76QNLpOJD_duJ2QzB37M9RNVAdeQPXpzLecuesOJKqX39atPz3Q6fAJ0V4PgQaisK140uEBVuIdfiEGg40OO2W51ScXVLHd7wvq_EQ&_nc_ht=scontent.fdac6-1.fna&oh=a0a1d76621b96c2d8af8cb55dff73b4b&oe=5C676ACF" alt="">
                                            </div>
                                            <div class="ml-2">
                                                <div class="h5 m-0"><a href="#">Raju Deb Rupok</a></div>
                                                <div class="text-muted">10-10-2010 | 02.02am</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comnt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, enim? Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, repudiandae.</div>
                                </div>
                            </div>
                        </div>
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            <img class="rounded-circle" style="width: 45px; height: 45px;" src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-1/c0.0.720.720a/19247567_1645808748823959_3658195382233747207_n.jpg?_nc_cat=110&_nc_eui2=AeH2jM9F05xik0diMN-5oqkx4chX45GXA5JouGvYe89IJEk6c10zBfBKdumFr4V63o2YPork8v8vck7UGRo2oSgZYhGdmce1E4Gu65-bq-ji4A&_nc_ht=scontent.fdac6-1.fna&oh=894adb112004260cf12473aa4dc84d0e&oe=5CAB3E18" alt="">
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">Sabbir Ahmed</div>
                                            <div class="text-muted">CSE 32nd Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <a class="card-link" href="#">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                                </a>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="float-left">
                                    <a href="#" class="card-link"><i class="far fa-heart"></i> Like <sup>(122)</sup></a>
                                    <a href="#" class="card-link comment"><i class="far fa-comments"></i> Comment <sup>(122)</sup></a>
                                </div>
                                <div class="float-right">
                                    <strong class="post-time-date">12-01-2019 | 09.03am</strong>
                                </div>
                            </div>
                            <div class="card-body post-comment">
                                <div class="new-comment">
                                    <textarea class="form-control" id="postComment" rows="1" placeholder="Post a comment"></textarea>
                                    <button class="btn btn-primary btn-sm btn-block btn-comment">Comment</button>
                                </div>

                                <div class="user-comments">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-2">
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-9/41626289_2278594075706605_3080735949286539264_n.jpg?_nc_cat=100&_nc_eui2=AeHO6xpHzaTksOt0xAbgd1MQ9gUdaLA-7INu5nnmT-o5OcKUOG0ZSfTaclhIhjBSMafNrEGVfJTacM5DmSJa8nniGJ_o1qhfv7uafK7HOPsgVA&_nc_ht=scontent.fdac6-1.fna&oh=c4b68fd8c5d60b617d13f0d7f457d644&oe=5C731368" alt="">
                                            </div>
                                            <div class="ml-2">
                                                <div class="h5 m-0"><a href="#">Pias Das Raaj</a></div>
                                                <div class="text-muted">10-10-2010 | 02.02pm</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comnt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, enim? Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, repudiandae.</div>
                                </div>
                                <div class="user-comments">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-2">
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="https://scontent.fdac6-1.fna.fbcdn.net/v/t1.0-9/24991333_704642113072260_4420828549095238564_n.jpg?_nc_cat=105&_nc_eui2=AeEtpqeU76QNLpOJD_duJ2QzB37M9RNVAdeQPXpzLecuesOJKqX39atPz3Q6fAJ0V4PgQaisK140uEBVuIdfiEGg40OO2W51ScXVLHd7wvq_EQ&_nc_ht=scontent.fdac6-1.fna&oh=a0a1d76621b96c2d8af8cb55dff73b4b&oe=5C676ACF" alt="">
                                            </div>
                                            <div class="ml-2">
                                                <div class="h5 m-0"><a href="#">Raju Deb Rupok</a></div>
                                                <div class="text-muted">10-10-2010 | 02.02am</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comnt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, enim? Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, repudiandae.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-govt" role="tabpanel" aria-labelledby="nav-govt-tab">Government Jobs</div>
                    <div class="tab-pane fade" id="nav-bcs" role="tabpanel" aria-labelledby="nav-bcs-tab">BCS Preparation</div>
                    <div class="tab-pane fade" id="nav-ideas" role="tabpanel" aria-labelledby="nav-ideas-tab">IDEAS</div>
                </div>
            </div>
            <div class="col-md-3">
                <h3 class="color-two">Suggested Alumni</h3>
                <hr>
                <div class="owl-carousel owl-theme suggested-alumni text-center" id="sugestedAlumni">
                    {{--  @@foreach ($collection as $item)  --}}
                    <div class="item team-member ">
                        <div class="card text-center" style="width: 18rem;">
                            <a href="#"><img class="card-img-top" src="{{ asset('images/profile_pic.jpg') }}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title color-two" style="margin-bottom: 0px;"><a href="#" class="user-title">Sabbir Ahmed</a></h5>
                                <p class="card-text text-center" style="font-size: 14px; font-weight: bold; color: #666;">32nd Batch, CSE Department</p>
                                <ul class="social-list">
                                    <li><a href="#" target="_blank"<i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"<i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"<i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>                        
                    {{--  @endforeach --}}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection @section('scripts')
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
@endsection