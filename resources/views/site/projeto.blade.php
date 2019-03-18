@extends('site/layout.app',["current" => "projetos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/2.jpg)">
        <div class="auto-container">
            <h1>Projeto</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Início</a></li>
                <li><a href="/projetos">Projetos</a></li>
                <li>projeto</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Project Single Section-->
    <section class="project-single-section">
        <div class="auto-container">
            <div class="inner-container">
                <!--Upper Box-->
                <div class="upper-box">
                    <div class="single-item-carousel owl-carousel owl-theme">
                        <div class="slide">
                            <div class="image">
                                <img src="images/projetos/1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="images/projetos/2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="images/projetos/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="title">LIMPEZA DO AR CONTAMINADO</h2>
                <div class="row clearfix">
                    <!--Content Box-->
                    <div class="content-column col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="text">
                                <p>Durante as várias fases de operação do alto-forno, como por
exemplo, na corrida, na perfuração e tamponamento do furo
de corrida, na separação da escória e na calha basculante
de gusa, ocorrem emissões de gases altamente poluentes.
Essas emissões, que em sua maioria são resultado da reação
química entre o metal líquido e o oxigênio ambiente, bem
como dos cristais de carbono precipitados do gusa, devem
ser capturadas e filtradas de maneira confiável. </p>
                                <p>A grande superfície do fluxo de material vazado no furo de
corrida libera uma quantidade considerável de calor no meio
ambiente. Dessa forma é criado um fluxo de convecção
estável acima do fluxo de corrida. Nesse ponto a KUTTNER
oferece como solução a aplicação da coifa ciclonada, cuja
eficiência para fluxos de convecção pulsante já foi
devidamente comprovada. As coifas são posicionadas fora
da área de movimentação da perfuratriz e da máquina de
tamponamento. Na área de retenção e na área da calha
basculante são utilizadas coifas fechadas. A otimização do
fluxo de todos os componentes assegura que as emissões
liberadas sejam capturadas seguramente e que a aspiração
do ar falso seja minimizada. A influência das correntes
transversais também é reduzida a níveis mínimos. </p>
                            </div>
                            <ul class="social-icon-one">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <!-- <li><a href="#"><span class="fa fa-twitter"></span></a></li> -->
                                <!-- <li><a href="#"><span class="fa fa-dribbble"></span></a></li> -->
                                <!-- <li><a href="#"><span class="fa fa-google-plus"></span></a></li> -->
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Info Column-->
                    <div class="info-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <ul>
                                <li><span>Categoria : </span>Energia</li>
                                <li><span>Cliente : </span>WEG</li>
                                <li><span>Data : </span>01/01/2019</li>
                                <!-- <li><span>Link : </span><a href="#">www.steelthemes.com</a></li> -->
                                <!-- <li><span>Rating </span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half-empty"></span>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
    <!--End Project Single Section-->

@endsection