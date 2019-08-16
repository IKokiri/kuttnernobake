<header class="main-header style-two">
    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">                       
                <div class="top-right pull-left clearfix">
                    <span class="linguagem">
                        <a class="linguagem_active" href="/">PT</a>
                        <a calss="" href="/">EN</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-right logo-outer">
                    <div class="logo"><a href="/"><img width="400px" src="/images/kuttnernobakesolutionslogo.png" alt="" title=""></a></div>
                </div>
                <div class="pull-left upper-right clearfix">
                    <!--Info Box-->
                    <div class="upper-column info-box" style="margin-left: 0px;">
                        <div class="icon-box" style="left:0px"><span class="machinery-icon-map"></span></div>
                        <address>
                            R. Abelardo Benedicto Libório <br>
                            nº 951<br>
                            <strong>Piracicaba, São Paulo</strong>
                        </address>
                    </div>
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="machinery-icon-contact"></span></div>
                        <ul>
                            <li><a href="tel:+551933024770">+55 19 3302 4770</a></li> 
                            
                            <li><a href="mailto:info@kuttner-nbs.com.br"><strong>info@kuttner-nbs.com.br</strong></a></li>
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
                <a href="/" class="img-responsive"><img src="/images/kuttnernobakesolutionslogop.png" alt="" title=""></a>
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