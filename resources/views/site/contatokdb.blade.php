@extends('site/layout.app',["current" => "contato"])

@section('page')
<section class="page-title" style="background-image:url(/images/kuttnernobakesolutionsbg1.jpeg)">
    <div class="auto-container">
        <h1>Kuttner do Brasil</h1>
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
                                        <div class="image"><a href="#"><img src="/images/kuttner do brasil.jpeg"
                                                    alt=""></a></div>
                                    </div>
                                    <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="lucation">Kuttner do Brasil</div>
                                        <ul>
                                            <li>
                                                <span class="icon flaticon-place"></span>
                                                <h5> R. Santiago Balesteiros</h5>
                                                <p>Cinco, 610</p>
                                                <p>Contagem, Minas Gerais</p>
                                            </li>
                                            <li>
                                                <span class="icon flaticon-support"></span>
                                                <h5>Telefone</h5>
                                                <p><a href="#">+55 31 3399 7200</a></p>
                                            </li>
                                            <li>
                                                <span class="icon flaticon-plane"></span>
                                                <h5>Email</h5>
                                                <p><a href="#">kuttner@kuttner.com.br</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <br>
                                 <ul>
                                    <li><a href="http://www.kuttner.com.br/Default69ca.html?ID=42">
                                        <span class="icon flaticon-technology"></span>
                                        <h5>Contatos no site oficial:</h5>
                                        <h5>
                                        Kuttner do Brasil
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
                    <div class="map-canvas" data-zoom="17" data-lat="-19.9397298" data-lng="-44.074559"
                        data-type="road" data-hue="#f05000" data-title="Kuttner do Brasil" 
                        data-icon-path="/images/map-marker.png"
                        data-content="R. Santiago Balesteiros, 610 - Cinco, Contagem - MG<br>
                        <a href='mailto:kuttner@kuttner.com.br'>kuttner@kuttner.com.br</a>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section Two -->

<!--End Contact Section Two -->
@component('site/layout.component_email')
@endcomponent

@endsection