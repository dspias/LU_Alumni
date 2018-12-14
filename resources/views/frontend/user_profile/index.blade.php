@extends('layouts.withnav')

@section('title', '| Departments')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fire-css/assets/faq.css') }}">
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="new-post">
                                        <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                        {{--  <input accept="image/*, image/heic, image/heif, .pdf, .doc, .docx" display="inline" role="button" type="file">  --}}
                                        <input accept="image/*, image/heic, image/heif, .pdf, .doc, .docx" type="file" class="hide inputfile" id="upload" data-multiple-caption="{count} files selected" multiple />
                                        <label for="upload"><span><i class="fas fa-file-medical"></i></span> </label>
                                        <button class="btn btn-outline-info btn-share float-right">Share</button>
                                    </div>
                                </div>
                                {{--  <div class="card-footer">
                                    <button class="btn btn-info float-right">Share</button>
                                </div>  --}}
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
<script >
    
    $("#button").on("click", function() {
    $("body").scrollTop(0);
    });

</script>

@endsection
