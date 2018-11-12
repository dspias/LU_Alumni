@extends('layouts.withnav')

@section('title', '| Departments')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fire-css/assets/faq.css') }}">
@endsection

@section('content')
    

    <section class="fire_faq">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="faq_tab_menu clearfix">
                        

                        <div class="installation pt_50">
                            <h5 class="color_22 fw_300">Departments</h5>
                            <ul role="tablist" class="nav nav-tabs">
                                <li class="nav-item"><a class="active" data-toggle="tab" href="#depof_bba" role="tab" aria-selected="false">Department of Business Administration</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_cse" role="tab" aria-selected="false">Department of CSE</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_english" role="tab" aria-selected="false">Department of English</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_arc" role="tab" aria-selected="false">Department of Architecture</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_llb" role="tab" aria-selected="false">Department of Law</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_civil" role="tab" aria-selected="false">Department of Civil Engineering</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_eee" role="tab" aria-selected="false">Department of EEE</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_islam" role="tab" aria-selected="false">Department of Islamic Studies</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#depof_puh" role="tab" aria-selected="false">Department of Public Health</a></li>
                                <li class="nav-item"><a id="button" data-toggle="tab" href="#depof_thm" role="tab" aria-selected="false">Department of Tourism and Hospitality Management</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/col-4-->


                <div class="col-xl-6 col-lg-5">
                    <div class="faq_tab_content">
                        <div id="myTabContent" class="tab-content">

                            <!--BBA-->
                            <div id="depof_bba" role="tabpanel" class="tab-pane fade show active">
                                <h4 class="fw_300 color_22">Department of BBA</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--CSE-->
                            <div id="depof_cse" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of CSE</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--ENGLISH-->
                            <div id="depof_english" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of English</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--tab-pane-9-->
                            <div id="depof_arc" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Architecture </h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                            <!--LLB-->
                            <div id="depof_llb" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of LLB </h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                             <!--LLB-->
                            <div id="depof_civil" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Civil Engineering </h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>

                              <!--LLB-->
                            <div id="depof_eee" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of EEE </h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>
                            

                              <!--LLB-->
                            <div id="depof_islam" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Islamic Studies</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>
                            

                              <!--LLB-->
                            <div id="depof_puh" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Public Health</h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>
                            

                              <!--LLB-->
                            <div id="depof_thm" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Tourism and Hospitality Management </h4>
                                <div class="tab_text">
                                    <p>your content</p>
                                </div>
                            </div>
                            

                            <!--/tab-pane-->
                        </div>
                    </div>
                </div>
                <!--/col-8-->



                            <!-- ======= Marquee =======-->
                        
                          

                          <div class="col-xl-3 col-lg-2">
                            <marquee  direction="up"  onmouseover="this.stop()" onmouseout="this.start()" id="marquee">

                                <div class="faq_tab_content">
                                    <div id="myTabContent" class="tab-content">

                                        <div id="popular_cat1" role="tabpanel" class="tab-pane fade show active">
                                        <h4 class="fw_300 color_22">Header 1</h4>
                                        <div class="tab_text">
                                          <p>This is the paragraph 1</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    
                                        
                       
                            <div class="faq_tab_content">
                                    <div id="myTabContent" class="tab-content">

                                        <div id="popular_cat1" role="tabpanel" class="tab-pane fade show active">
                                        <h4 class="fw_300 color_22">Header 2 </h4>
                                        <div class="tab_text">
                                          <p>This is the paragraph 2</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="faq_tab_content">
                                    <div id="myTabContent" class="tab-content">

                                        <div id="popular_cat1" role="tabpanel" class="tab-pane fade show active">
                                        <h4 class="fw_300 color_22">Header 3 </h4>
                                        <div class="tab_text">
                                          <p>This is the paragraph 3</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    
                                        
                       
                            <div class="faq_tab_content">
                                    <div id="myTabContent" class="tab-content">

                                        <div id="popular_cat1" role="tabpanel" class="tab-pane fade show active">
                                        <h4 class="fw_300 color_22">Header 4</h4>
                                        <div class="tab_text">
                                          <p>This is the paragraph 4    shghshdhshdghsghhhhhhhhhhhhhhhhhhhhhhhhhhhhhgh</p>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </marquee>
                                
                        </div>     
                          


                <!--=========-->
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
