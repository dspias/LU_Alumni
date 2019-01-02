@extends('layouts.withnav') 

@section('title', '| general advice') 
@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
@endsection

@section('content')

<section class="career-advice-part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="career-category">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true">General</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="border-left: 1px solid #eeeeee88; border-right: 1px solid #eeeeee88;">
                <div class="tab-content" id="v-pills-tabContent">

                    {{-- start general tab --}}
                    <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-gre-tab">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Career & Networking</li>
                                <li class="breadcrumb-item"><a href="#">General Advice</a></li>
                                <li class="breadcrumb-item active" aria-current="page">GENERAL</li>
                            </ol>
                        </nav>

                        <hr>

                    @foreach($genAdvices as $genAdvice)
                        <div class="posts card gedf-card alumni-post">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            @if($genAdvice->user->avatar)
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="{{ asset('images/'.$genAdvice->avatar) }}" alt="">
                                            @else
                                                <img class="rounded-circle" style="width: 45px; height: 45px;" src="http://www.juliehamilton.ca/resources/finance-icon-2.png" alt="">
                                            @endif
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">{{ $genAdvice->user->first_name }}</div>
                                            <div class="text-muted">{{ $genAdvice->user->department." ".$genAdvice->user->university_batch }} Batch</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                    
                                <h5 class="card-title">{{ $genAdvice->title }} ( {{ \App\Models\Category\Category::find($genAdvice->cat_id)->category_name }} )</h5>

                                <p class="card-text">
                                    {{ $genAdvice->body }}
                                </p>
                    @isset($genAdvice->avatar)
                        <?php
                        
                            $mime = null;
                            if(isset($genAdvice->avatar)){
                                $info = new SplFileInfo($genAdvice->avatar);
                                $mime = $info->getExtension();
                            }
                        ?>
                        @if($mime == "jpeg" || $mime == "png" || $mime == "jpg" || $mime == "svg")
                                <figure class="card-image text-center">
                                    <img src="{{ asset('postsfiles/'.$genAdvice->avatar) }}" target="_blank" alt="post image" class="img-responsive" style="border:1px solid #ccc;">
                                </figure>
                        @else
                                <div class="card-file">
                                    <a href="{{ route('posts.file.download', ['filename' => $genAdvice->avatar]) }}" class="btn btn-default btn-block btn-lg"><i class="fas fa-file-download"></i> {{ $genAdvice->title }}.{{ $mime }}</a>
                                </div>
                                
                        @endif                            
                    @endisset
                            </div>

                            <div class="card-footer">
                                <div class="float-left">
                                    <a href="#" class="card-link"><i class="far fa-heart"></i> Like <sup>(50)</sup></a>
                                    <a href="#" class="card-link comment" id="comment{{ $genAdvice->id }}"><i class="far fa-comments"></i> Comment <sup>(122)</sup></a>
                                </div>
                                <div class="float-right">

                                <?php
                                    // $date = date_create($genAdvice->updated_at);
                                    $myDateTime = new DateTime($genAdvice->updated_at);
                                    $myDateTime->setTimezone(new DateTimeZone('GMT+06:00'));
                                    
                                ?>
                                    <strong class="post-time-date">{{ $myDateTime->format('d-m-Y | h:i A') }}</strong>
                                </div>
                            </div>
                            <div class="card-body post-comment" id="post-comment{{ $genAdvice->id }}">
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
                                    {{ $genAdvices->links() }}
                                </div>
                                <div class="offset-md-5">				
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- close gre tab --}}

                </div>
            </div>


            {{-- suggest alumni card --}}
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
<script>
    // ============< Suggested Alumni Part >===========
$(document).ready(function(){
    $('#sugestedAlumni').owlCarousel({
        items: 1,
        margin: 0,
        loop: true,
        dots: false,
        nav: false,
        // navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        autoplay: true,
        smartSpeed: 1200,
        autoplayTimeout: 3000
      });
});
</script>
@endsection