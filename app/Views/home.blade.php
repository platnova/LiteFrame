@extends('layouts.base')
@section('content')
    <div id="slide1" class="slide">
        <!-- Hero Area Section -->
        <section id="hero-area" class="">
            <div class="hero-inner">
                <div class="container">
                    <div class="row">
                        <div class="col s12 l12 center">
                            <h3 class="herotext myanimated myfadeIn" style="">
                                <img src="{{asset('img/logo.png') }}" alt="LiteFrame logo"/>
                                {{config('app.name')}}
                            </h3>
                            <p class="herotext2 myanimated2 myfadeInUp">The PHP framework built to be swift and
                                strong.</p>
                        </div>
                    </div>

                    <div class="container">
                        <div class="center">
                            <div class="mg70"></div>
                            <h4 class="lightext"> Get started with LiteFrame</h4>
                            <h6 class="lightext">As a user, or a contributor. </h6>
                            <div class="mg30"></div>
                            <div class="row">
                                <a target="_blank" href="https://github.com/AVONnadozie/LiteFrame/releases"
                                   class="btn-large metallic waves-effect waves-light lato ">Download</a>
                                <a target="_blank" href="https://avonnadozie.github.com/LiteFrame"
                                   class="btn-large metallic waves-effect waves-light lato ">Documentation</a>
                                <a target="_blank" href="https://github.com/AVONnadozie/LiteFrame"
                                   class="btn-large metallic waves-effect waves-purple lato ">GitHub</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Hero Area Section End-->

        <div class="">
            <div class="container">
                <div class="descbdr">
                    <div class="desc-bg z-depth-1-half" style="background-color:rgba(0, 0, 0, 0.3);">

                        <div class="desctop">
                            <p class="center deschead-1"> Light. As Air. </p>
                        </div>
                        <div class="divider"></div>

                        <div class="row">
                            <div class="descitem">
                                <div class=" descpad">
                                    <div class="col s12 m4 l4">
                                        <div class="row picpad">
                                            <div class="desc-img center-align" style="margin: auto">
                                                <i class="fa fa-paper-plane-o metallic-text fa-5x"></i>
                                            </div>
                                        </div>
                                        <div class="row textpad">
                                            <h4 class="center deschead">Light & Clean.</h4>
                                            <p class="center descsub"> A feather-weight, lightning-fast PHP framework.
                                                All of the functionality with none of the clutter.
                                                LiteFrame is built with the philosophy: "If it's not essential, it's not
                                                included"
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col s12 m4 l4">
                                        <div class="row picpad">
                                            <div class="desc-img center-align " style="margin: auto">
                                                <i class="fa fa-code metallic-text fa-5x"></i>
                                            </div>
                                        </div>
                                        <div class="row textpad">
                                            <h4 class="center deschead">Easy To Use.</h4>
                                            <p class="center descsub"> From file organization to installation and
                                                function
                                                calls,
                                                ease of use comes first. No need for the command line. Just create your
                                                files and go!
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col s12 m4 l4">
                                        <div class="row picpad">
                                            <div class="desc-img center-align " style="margin: auto">
                                                <i class="fa fa-file-text-o metallic-text fa-5x"></i>
                                            </div>
                                        </div>
                                        <div class="row textpad">
                                            <h4 class="center deschead">Docs for Dummies.</h4>
                                            <p class="center descsub"> Documentation so simple, anyone will understand!
                                                We avoid using too much technical jargon in our docs.
                                                Understanding the documentation is not reserved for advanced users.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="center">
                <a target="_blank" href="https://avonnadozie.github.com/LiteFrame"
                   class="btn-large metallic waves-effect waves-light lato ">Get Started</a>
            </div>
            <div class="mg30"></div>
        </div>
    </div>
@endsection


@section('footer')
    <section id="bottom">
        <div class="divider"></div>
        <div class="container">
            <div class="row center mg30">
                <div class="col-xs-12" style="padding-top: 10px">
                    <p class="lightext">Copyright &copy; {{date('Y')}} {{config('app.name')}}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WOW JS plugin for animation -->
    <script src="{{asset('js/wow.js') }}"></script>
    <!-- All JS plugin Triggers -->
    <script src="{{asset('js/main.js')}}"></script>

@endsection

