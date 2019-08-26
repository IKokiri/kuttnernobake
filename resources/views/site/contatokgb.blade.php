@extends('site/layout.app',["current" => "contato"])

@section('page')
<section class="page-title" style="background-image:url(/images/kuttnernobakesolutionsbg1.jpeg)">
    <div class="auto-container">
        <h1>Grupo Kuttner</h1>
        <ul class="page-breadcrumb">
            <li><a href="/">Início</a></li>
            <li>Contato</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Section Two -->
<section class="contact-section-two">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Contato</h2>
        </div>
        <div class="row clearfix">
            <div class="carousel-column col-md-7 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="branches-carousel owl-carousel owl-theme">
                        <div class="slide">
                        <div class="branch-info-box">
                                <div class="row clearfix">
                                    <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="image"><a href="#"><img src="/images/grupo kuettner.jpeg"
                                                    alt=""></a></div>
                                    </div>
                                    <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="lucation">Grupo Kuttner</div>
                                        <ul>
                                            <li>
                                                <span class="icon flaticon-place"></span>
                                                <h5>Alfredstr. 28,</h5>
                                                <p>45130 </p>
                                                <p>Essen, Alemanha</p>
                                            </li>
                                            <li>
                                                <span class="icon flaticon-support"></span>
                                                <h5>Telefone</h5>
                                                <p><a href="#">+49 201 7293 0</a></p>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-plane"></span>
                                                <h5>Email</h5>
                                                <p><a href="#">info@kuettner.de</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                                 <ul>
                                    <li><a href="http://www.kuettner.com/Default.aspx?ID=117">
                                        <span class="icon flaticon-technology"></span>
                                        <h5>Contatos no site oficial:</h5>
                                        <h5>
                                        Grupo Küttner
                                        </h5>
                                        <!-- <p>Contatos Kuttner do Brasil</p> -->
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>

            <div class="map-column col-md-5 col-sm-12 col-xs-12">
                <div class="map-outer">
                    <!--Map Canvas-->
                    <div class="map-canvas" data-zoom="17" data-lat="51.4391847" data-lng="7.0025846"
                        data-type="road" data-hue="#f05000" data-title="Grupo Küttner" 
                        data-icon-path="/images/map-marker.png"
                        data-content="Alfredstr. 28, 45130, Essen, Alemanha<br>
                        <a href='mailto:info@kuettner.de'>info@kuettner.de</a>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section Two -->
@component('site/layout.component_email')
@endcomponent

@endsection