@extends('site/layout.app',["current" => "contato"])

@section('page')
<section class="page-title" style="background-image:url(images/background/2.jpg)">
    <div class="auto-container">
        <h1>Contato</h1>
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
                                        <div class="image"><a href="#"><img src="images/contato/kuttner no bake solutions.jpg"
                                                    alt=""></a></div>
                                    </div>
                                    <div class="info-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="lucation">Kuttner No-Bake Solutions</div>
                                        <ul>
                                            <li>
                                                <span class="icon flaticon-place"></span>
                                                <h5>R. Abelardo Benedicto Libório</h5>
                                                <p>Libéria, 951</p>
                                                <p>Piracicaba, São Paulo</p>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-support"></span>
                                                <h5>Telefone</h5>
                                                <p><a href="#">(19) 3302-4770</a></p>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-plane"></span>
                                                <h5>Email</h5>
                                                <p><a href="#">info@kuttner-nbs.com.br</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="branch-info-box">
                                <div class="row clearfix">
                                    <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="image"><a href="#"><img src="images/contato/kuttner do brasil.jpg"
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
                                                <p><a href="#">(31) 3399 7200</a></p>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-plane"></span>
                                                <h5>Email</h5>
                                                <p><a href="#">kuttner@kuttner.com.br</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="branch-info-box">
                                <div class="row clearfix">
                                    <div class="image-column col-md-6 col-sm-6 col-xs-12">
                                        <div class="image"><a href="#"><img src="images/contato/grupo kuettner.jpg"
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
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="map-column col-md-5 col-sm-12 col-xs-12">
                <div class="map-outer">
                    <!--Map Canvas-->
                    <div class="map-canvas" data-zoom="17" data-lat="-22.6645525" data-lng="-47.6038755"
                        data-type="satellite" data-hue="#f05000" data-title="Kuttner no-bake solutions" 
                        data-icon-path="images/icons/map-marker.png"
                        data-content="R. Abelardo Benedicto Libório, Libéria, 951, Piracicaba, São Paulo<br>
                        <a href='mailto:info@kuttner-nbs.com.br'>info@kuttner-nbs.com.br</a>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section Two -->


<!-- Contact Form Section -->
<section class="contact-form-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Title Column -->
            <div class="image-column col-md-4 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="image"><img src="images/contato/kuttner no bake solutions mail.jpg" alt=""></div>
                </div>
            </div>

            <!-- Form Column -->
            <div class="form-column col-md-8 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Entre em contato</h2>
                        <div class="text">Kuttner no-bake solutions</div>
                    </div>
                    <!--Contact Form-->
                    <div class="contact-form style-two">
                    <form method="post" action="sendemail">
                            <div class="row clearfix">
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="username" value="" placeholder="Nome*"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Email*"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="subject" value="" placeholder="Assunto"
                                            required>
                                    </div>
                                </div>
                                <div class="column col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Mensagem"></textarea>
                                    </div>
                                </div>
                                <div class="column col-md-12 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection