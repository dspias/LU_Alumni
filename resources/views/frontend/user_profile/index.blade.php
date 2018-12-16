@extends('layouts.withnav')

@section('title', '| Departments')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fire-css/assets/faq.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}">
@endsection

@section('content')

<section class="profile-part">
    <div class="container">
        <div class="row">
            {{--  Left Part  --}}
            <div class="col-md-4">
                <div class="user-profile">
                    <figure class="profile-pic">
                        <img src="{{asset('images/cover_pic.jpg')}}" alt="" class="img-responsive">
                    </figure>
                    <div class="btn-group">
                        <a href="#" class="btn btn-outline-dark btn-add-post">Add Post</a>
                        <a href="#" class="btn btn-outline-dark btn-edit-profile">Edit Profile</a>
                    </div>
                    <div class="work-link">
                        <h6 class="text-muted">WORK LINKS</h6>
                        {{--  <ul>
                            <li><a href="#">Company Website</a></li>
                            <li><a href="#">Work Profile</a></li>
                            <li><a href="#">Portfolio</a></li>
                        </ul>  --}}
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-muted">Company</th>
                                <td><a href="#">Tech-Next IT Firm</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Work Profile</th>
                                <td><a href="#">Fullstack Developer</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Porfolio</th>
                                <td><a href="#">Download Portfolio</a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="skills">
                        <h6 class="text-muted">SKILLS</h6>
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-muted">HTML</th>
                                <td><a href="#">100%</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">CSS</th>
                                <td><a href="#">98%</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">PHP</th>
                                <td><a href="#">90%</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Java</th>
                                <td><a href="#">74%</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            {{--  Right Part  --}}
            <div class="col-md-8">
                <div class="profile-details">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="posts card gedf-card alumni-post">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="new-post">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="postTitle" placeholder="Your Post Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <select>
                                                        <option data-display="Select Category">Select Category</option>
                                                        <option value="1">Category 01</option>
                                                        <option value="1">Category 02</option>
                                                        <option value="1">Category 03</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                            <input accept="image/*, image/heic, image/heif, .pdf, .doc, .docx" type="file" class="hide inputfile" id="upload" data-multiple-caption="{count} files selected" multiple />
                                            <label for="upload"><span><i class="fas fa-file-medical"></i> File</span> </label>
                                            <button class="btn btn-outline-info btn-share float-right">Share</button>
                                        </div>
                                    </div>
                                </form>
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
                                    <div class="edit-btn">
                                        <button class="btn btn-light btn-sm" id="editBtn"><i class="fas fa-pencil-alt"></i></button>
                                    </div>
                                </div>
                                <div class="card-body" id="viewPost">
                                    <a class="card-link" href="#">
                                        <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adip.</h5>
                                    </a>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                                    </p>
                                    <div class="card-file">
                                        <a href="#" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> FileName.PDF</a>
                                    </div>
                                    {{--  <figure class="card-image">
                                        <img src="{{ asset('images/back.jpg') }}" alt="" class="img-responsive">
                                    </figure>  --}}
                                </div>
                                <div class="card-body d-none" id="editPost">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="new-post">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="postTitle" placeholder="Your Post Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <select>
                                                        <option data-display="Select Category">Select Category</option>
                                                        <option value="1">Category 01</option>
                                                        <option value="1">Category 02</option>
                                                        <option value="1">Category 03</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                            <input accept="image/*, image/heic, image/heif, .pdf, .doc, .docx" type="file" class="hide inputfile" id="upload" data-multiple-caption="{count} files selected" multiple />
                                            <label for="upload"><span><i class="fas fa-file-medical"></i> File</span> </label>
                                            <button class="btn btn-outline-info btn-share float-right btn-sm" type="submit">Update</button>
                                            <button class="btn btn-info btn-share float-right btn-sm" style="margin-right: 5px;" id="cancelBtn" type="button">Cancel</button>
                                            
                                        </div>
                                    </form>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="{{ asset('js/nice-select.js') }}"></script>
<script >
    
    $(document).ready(function() {
        $('select').niceSelect();
    });

</script>

@endsection
