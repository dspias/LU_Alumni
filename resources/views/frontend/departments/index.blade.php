@extends('layouts.withnav')

@section('title', '| Departments')

@section('stylesheet')
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fire-css/assets/faq.css') }}">
    <style>
        .fire_faq .faq_tab_menu .nav{
            padding: 10px;
            margin-bottom: 100px;
            border-radius: 8px;
            border: 0px solid;
            box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
            max-height: 70vh;
            overflow-y: scroll;
            overflow-x: hidden;
        }
        .fire_faq .faq_tab_menu .nav>li>a.active, .fire_faq .faq_tab_menu .nav>li>a:focus, .fire_faq .faq_tab_menu .nav>li>a:hover{
            border-radius: 8px;
            background-color: #a3c624;
            font-weight: bold;
        }
        .fire_faq .faq_tab_menu .nav>li>a{
            border-bottom: 0px solid;
            margin-top: 3px;
            margin-bottom: 3px;
            font-weight: bold;
        }
        .fire_faq .faq_tab_content {
            box-shadow: 0 0 15px 0px rgba(0, 0, 0, 0.1);
            margin-left: 20px;
            margin-top: 23px;
            border-radius: 8px;
        }
    </style>
@endsection

@section('content')
    

    <section class="fire_faq" style="margin-top: 7rem;">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="faq_tab_menu clearfix">
                        

                        <div class="installation">
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

                <div class="col-xl-9 col-lg-8">
                    <div class="faq_tab_content">
                        <div id="myTabContent" class="tab-content">

                            {{-- <!--BBA--> --}}
                            <div id="depof_bba" role="tabpanel" class="tab-pane fade show active">
                                <h4 class="fw_300 color_22">Department of BBA</h4>
                                <div class="tab_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis autem voluptatibus ipsa facilis quidem maiores in vero quibusdam libero excepturi obcaecati blanditiis laboriosam accusamus ullam porro repellat sed, rem perferendis aperiam mollitia, quisquam alias nulla repellendus. Quae repellat mollitia possimus. Est, eligendi molestiae? Dolorem ratione accusantium delectus debitis natus sint.</p>
                                </div>
                            </div>

                            {{-- <!--CSE--> --}}
                            <div id="depof_cse" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of CSE</h4>
                                <div class="tab_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis autem voluptatibus ipsa facilis quidem maiores in vero quibusdam libero excepturi obcaecati blanditiis laboriosam accusamus ullam porro repellat sed, rem perferendis aperiam mollitia, quisquam alias nulla repellendus. Quae repellat mollitia possimus. Est, eligendi molestiae? Dolorem ratione accusantium delectus debitis natus sint.</p>
                                </div>
                            </div>

                            {{-- <!--ENGLISH--> --}}
                            <div id="depof_english" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of English</h4>
                                <div class="tab_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis autem voluptatibus ipsa facilis quidem maiores in vero quibusdam libero excepturi obcaecati blanditiis laboriosam accusamus ullam porro repellat sed, rem perferendis aperiam mollitia, quisquam alias nulla repellendus. Quae repellat mollitia possimus. Est, eligendi molestiae? Dolorem ratione accusantium delectus debitis natus sint.</p>
                                </div>
                            </div>

                            {{-- <!--tab-pane-9--> --}}
                            <div id="depof_arc" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Architecture </h4>
                                <div class="tab_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis autem voluptatibus ipsa facilis quidem maiores in vero quibusdam libero excepturi obcaecati blanditiis laboriosam accusamus ullam porro repellat sed, rem perferendis aperiam mollitia, quisquam alias nulla repellendus. Quae repellat mollitia possimus. Est, eligendi molestiae? Dolorem ratione accusantium delectus debitis natus sint.</p>
                                </div>
                            </div>

                            {{-- <!--LLB--> --}}
                            <div id="depof_llb" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of LLB </h4>
                                <div class="tab_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis autem voluptatibus ipsa facilis quidem maiores in vero quibusdam libero excepturi obcaecati blanditiis laboriosam accusamus ullam porro repellat sed, rem perferendis aperiam mollitia, quisquam alias nulla repellendus. Quae repellat mollitia possimus. Est, eligendi molestiae? Dolorem ratione accusantium delectus debitis natus sint.</p>
                                </div>
                            </div>

                             {{-- <!--LLB--> --}}
                            <div id="depof_civil" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Civil Engineering </h4>
                                <div class="tab_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis autem voluptatibus ipsa facilis quidem maiores in vero quibusdam libero excepturi obcaecati blanditiis laboriosam accusamus ullam porro repellat sed, rem perferendis aperiam mollitia, quisquam alias nulla repellendus. Quae repellat mollitia possimus. Est, eligendi molestiae? Dolorem ratione accusantium delectus debitis natus sint.</p>
                                </div>
                            </div>

                              {{-- <!--LLB--> --}}
                            <div id="depof_eee" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of EEE </h4>
                                <div class="tab_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis autem voluptatibus ipsa facilis quidem maiores in vero quibusdam libero excepturi obcaecati blanditiis laboriosam accusamus ullam porro repellat sed, rem perferendis aperiam mollitia, quisquam alias nulla repellendus. Quae repellat mollitia possimus. Est, eligendi molestiae? Dolorem ratione accusantium delectus debitis natus sint.</p>
                                </div>
                            </div>
                            

                              {{-- <!--LLB--> --}}
                            <div id="depof_islam" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Islamic Studies</h4>
                                <div class="tab_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis autem voluptatibus ipsa facilis quidem maiores in vero quibusdam libero excepturi obcaecati blanditiis laboriosam accusamus ullam porro repellat sed, rem perferendis aperiam mollitia, quisquam alias nulla repellendus. Quae repellat mollitia possimus. Est, eligendi molestiae? Dolorem ratione accusantium delectus debitis natus sint.</p>
                                </div>
                            </div>
                            

                            {{-- <!--LLB--> --}}
                            <div id="depof_puh" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Public Health</h4>
                                <div class="tab_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis autem voluptatibus ipsa facilis quidem maiores in vero quibusdam libero excepturi obcaecati blanditiis laboriosam accusamus ullam porro repellat sed, rem perferendis aperiam mollitia, quisquam alias nulla repellendus. Quae repellat mollitia possimus. Est, eligendi molestiae? Dolorem ratione accusantium delectus debitis natus sint.</p>
                                </div>
                            </div>
                            

                            {{-- <!--LLB--> --}}
                            <div id="depof_thm" role="tabpanel" class="tab-pane fade">
                                <h4 class="fw_300 color_22">Department of Tourism and Hospitality Management </h4>
                                <div class="tab_text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis autem voluptatibus ipsa facilis quidem maiores in vero quibusdam libero excepturi obcaecati blanditiis laboriosam accusamus ullam porro repellat sed, rem perferendis aperiam mollitia, quisquam alias nulla repellendus. Quae repellat mollitia possimus. Est, eligendi molestiae? Dolorem ratione accusantium delectus debitis natus sint.</p>
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
//Extra Script Files Here
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script>
    $(".fire_faq .faq_tab_menu .nav").niceScroll();
</script>

@endsection
