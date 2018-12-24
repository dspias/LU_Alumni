@extends('layouts.withnav')

@section('title', '| your profile')

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
                    @if(isset($user->avatar))
                        <img src="{{ asset('images/'.$user->avatar) }}" alt="user image" class="img-responsive">
                    @else
                        <img src="{{ asset('images/cover_pic.jpg') }}" alt="user image" class="img-responsive">
                    @endif
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
                            @if (isset($user->company_name))
                                <td><a href="#">{{ $user->company_name }}</a></td>
                            @else
                                <td>empty</td>
                            @endif
                                
                            </tr>
                            <tr>
                                <th class="text-muted">Work Profile</th>
                            @if (isset($user->company_name))
                                <td><a href="#">{{ $user->designation }}</a></td>
                            @else
                                <td>empty</td>
                            @endif
                            </tr>
                        </table>
                    </div>
                    <div class="personal-info">
                        <h6 class="text-muted">PERSONAL INFO</h6>
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-muted">Current Living Place</th>
                            @if (isset($user->bio))
                                <td><a href="#">{{ $user->bio }}</a></td>
                            @else
                                <td>empty</td>
                            @endif
                            </tr>
                            <tr>
                                <th class="text-muted">Department</th>
                                <td><a href="#">{{ $user->department }}</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Batch</th>
                                <td><a href="#">{{ $user->university_batch }}</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Graduation Year</th>
                                <td><a href="#">{{ $user->graduation_year }}</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Email</th>
                                <td><a href="#">{{ $user->email }}</a></td>
                            </tr>
                            <tr>
                                <th class="text-muted">Mobile</th>
                            @if (isset($user->mobile))
                                <td><a href="#">{{ $user->mobile }}</a></td>
                            @else
                                <td>empty</td>
                            @endif
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            {{--  Right Part  --}}

        @if($user->graduation_year < date('Y'))
            <div class="col-md-8">
                <div class="profile-details">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="posts card gedf-card alumni-post">
                                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="new-post">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="postTitle" placeholder="Your Post Title" name="title" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="cat_id" required>
                                                        <option data-display="Select Category">Select Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?" name="body" required></textarea>

                                            <input accept="image/*, image/heic, image/heif, .pdf, .doc, .docx" type="file" class="hide inputfile" id="upload" data-multiple-caption="{count} files selected" multiple name="avatar" />
                                            <label for="upload"><span><i class="fas fa-file-medical"></i> File</span> </label>
                                            <button type="submit" class="btn btn-outline-info btn-share float-right">Share</button>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        @foreach($posts as $post)
                            <div class="posts card gedf-card alumni-post">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-2">
                                                @if($post->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('images/'.$post->avatar) }}" alt="">
                                                @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                                @endif
                                                
                                            </div>
                                            <div class="ml-2">
                                                <div class="h5 m-0">{{ $post->user->first_name }}</div>
                                                <div class="text-muted">{{ $post->user->department." ".$post->user->university_batch }} Batch</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit-btn">
                                        <button class="btn btn-light btn-sm" id="editBtn"><i class="fas fa-pencil-alt"></i></button>
                                    </div>
                                </div>
                                <div class="card-body" id="viewPost">
                                    
                                    <h5 class="card-title">{{ $post->title }}</h5>

                                    <p class="card-text">
                                        {{ $post->body }}
                                    </p>
                            <?php
                            
                                $mime = null;
                                if(isset($post->avatar)){
                                    $info = new SplFileInfo($post->avatar);
                                    $mime = $info->getExtension();
                                }
                            ?>
                            @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                    <figure class="card-image text-center">
                                        <img src="{{ asset('postsfiles/'.$post->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                    </figure>
                            @else
                                    <div class="card-file">
                                        <a href="{{ route('posts.file.download', ['filename' => $post->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $post->title }}.{{ $mime }}</a>
                                    </div>
                                    
                            @endif
                                </div>
                                <div class="card-body d-none" id="editPost">
                                    <form action="" method="PUT" enctype="multipart/form-data">
                                        @csrf
                                        <div class="new-post">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="postTitle" placeholder="Your Post Title" name="title" value="{{ $post->title }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="cat_id">
                                                        <option data-display="Select Category">Select Category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}" @if($post->cat_id == $category->id) selected @endif>{{ $category->category_name }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?" name="body">{{ $post->body }}</textarea>

                                            <input accept="image/*, image/heic, image/heif, .pdf, .doc, .docx" type="file" class="hide inputfile" id="upload" data-multiple-caption="{count} files selected" multiple name="avatar" value="{{ $post->avatar }}"/>
                                            <label for="upload"><span><i class="fas fa-file-medical"></i> File</span> </label>
                                            <button class="btn btn-outline-info btn-share float-right btn-sm" type="submit">Update</button>
                                            <button class="btn btn-info btn-share float-right btn-sm" style="margin-right: 5px;" id="cancelBtn" type="button">Cancel</button>
                                            
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <div class="float-left">
                                        <a href="#" class="card-link"><i class="far fa-heart"></i> Like <sup>(50)</sup></a>
                                        <a href="#" class="card-link comment"><i class="far fa-comments"></i> Comment <sup>(122)</sup></a>
                                    </div>
                                    <div class="float-right">

                                    <?php
                                        // $date = date_create($post->updated_at);
                                        $myDateTime = new DateTime($post->updated_at);
                                        $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                        
                                    ?>
                                        <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | H:i A') }}</strong>
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
                            
                        @endforeach
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2 offset-md-5">
                                        {{ $posts->links() }}
                                    </div>
                                    <div class="offset-md-5">				
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="col-md-8">
                <div class="profile-details">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="posts card gedf-card alumni-post">
                                <div class="card-body text-center">
                                    <h3>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, officiis ex optio eum quam temporibus commodi iste harum id sint!
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
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
