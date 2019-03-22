<header class="main-header style-two">
            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                       
                        <div class="top-right pull-left clearfix">
                            <ul class="clearfix right-info">
                                <li><i class="icon flaticon-clock-circular-outline"></i> Segunda - Sexta: 07:00 - 17:00 </li>
                            </ul>
                            <div class="language dropdownn">
                                <a class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" href="#"><span class="icon flaticon-globe"></span>
                                    Brasil <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu1">
                                    <li><a href="/">Brasil</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-right logo-outer">
                            <div class="logo"><a href="/"><img width="300px" src="/images/logo.png" alt="" title=""></a></div>
                        </div>

                        <div class="pull-left upper-right clearfix">

                            <!--Info Box-->
                            <div class="upper-column info-box" style="margin-left: 0px;">
                                <div class="icon-box" style="left:0px"><span class="machinery-icon-map"></span></div>
                                <ul>
                                    <li>R. Abelardo Benedicto Libório</li>
                                    <li>Libéria, 951</li>
                                    <li><strong>Piracicaba, São Paulo</strong></li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="machinery-icon-contact"></span></div>
                                <ul>
                                    <li>+55 19 3302 4770</li> 
                                    <li><strong>info@kuttner-nbs.com.br</strong></li>
                                </ul>
                            </div>

                            <!--social Box-->
                            <div class="upper-column info-box">
                                <div class="social-icons">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!--Header Lower-->
            <div class="header-lower">

                <div class="auto-container">
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
 
                            @component('site/layout.component_nav',["current" => $current])
                            @endcomponent 

                        </nav>
                    </div>
                </div>
            </div>
            <!--End Header Lower-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-right">
                        <a href="/" class="img-responsive"><img src="/images/logo-small.png" alt="" title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="right-col pull-left">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            @component('site/layout.component_nav',["current" => $current])
                            @endcomponent 
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->
        </header>