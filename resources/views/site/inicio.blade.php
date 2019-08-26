@extends('site/layout.app',["current" => "inicio"])

@section('carousel')
    @component('site/components.component_carousel')
    @endcomponent  
@endsection

@section('highlights')
    @component('site/components.component_highlights')
    @endcomponent  
@endsection

@section('page')
<section class="services-section">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h2>Produtos</h2>
                </div>
                <div class="services-carousel owl-carousel owl-theme">
                    <!-- Services Block -->
                    <div class="services-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="images/misturador braco duplo p.jpeg" alt="Misturador Braço Duplo da empresa Kuttner No-Bake Solutions"></figure>
                                <div class="overlay-box">
                                    <div class="btn-box">
                                        <a href="/Misturadores/MisturadorBracoDuplo"><i class="icon arrow-top-right"></i>Saber mais</a>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3>Misturador braço duplo</h3> <i class="icon flaticon-user-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="images/fast loop p.jpeg" alt="Fastloop da empresa Kuttner No-Bake Solutions"></figure>
                                <div class="overlay-box">
                                    <div class="btn-box">
                                        <a href="/SistemaMoldagemVazamentoRefriamento/FastLoop"><i class="icon arrow-top-right"></i>Saber mais</a>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3>Fast Lopp</h3> <i class="icon flaticon-user-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Services Block -->
                     <div class="services-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="images/desmoldagem shake out p.jpeg" alt="Desmoldagem Shake-out da empresa Kuttner No-Bake Solutions"></figure>
                                <div class="overlay-box">
                                    <div class="btn-box">
                                        <a href="/SistemaDesmoldagem/ShakeOut"><i class="icon arrow-top-right"></i>Saber mais</a>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3>Desmoldagem Shake-out</h3> <i class="icon flaticon-user-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="images/recuperação mecanica - 6 30 toneladas hora.jpeg" alt="Recuperação Mecânica de 6 à 30 Toneladas hora da empresa Kuttner No-Bake Solutions"></figure>
                                <div class="overlay-box">
                                    <div class="btn-box">
                                        <a href="/RecuperacaoMecanicaRegeneracaoTermica/RecuperacaoMecanica4TH"><i class="icon arrow-top-right"></i>Saber mais</a>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3>Recuperação Mecânica</h3> <i class="icon flaticon-user-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Services Block -->
                    <div class="services-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="images/jato de passagem continua p.jpeg" alt="Jato de Passagem Contínua da empresa Kuttner No-Bake Solutions"></figure>
                                <div class="overlay-box">
                                    <div class="btn-box">
                                        <a href="/MaquinasJatoGranalha/JatoPassagemContinua"><i class="icon arrow-top-right"></i>Saber mais</a>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3>Jato de passagem</h3> <i class="icon flaticon-user-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
                <!-- info box -->
                <div class="info-box">
                    <h3>Entre em contato</h3>
                    <a href="contato/kuttnernobake#orcamentoContato"><i class="icon flaticon-email"></i>info@kuttner-nbs.com.br</a>
                </div>
            </div>
        </section>
        <!--End Services Section -->
        <section class="what-we-do">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Content -->
                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                        <div class="sec-title light">
                                <h2>Kuttner No-Bake Solutions</h2>
                                <h5>NOVA DENOMINAÇÃO DA IMF BRASIL</h5>
                            </div>
                            <div class="text">Com esta aquisição, o <a href="https://www.kuettner.com/en/about-us" target="_blank"><strong>Grupo Kuttner</strong></a>  consolida a sua 
                                base tecnológica em Instalações e Plantas Completas de Fundições, 
                                aliando em seu portofólio o Know How e a competência de muitos anos 
                                da IMF Brasil em equipamentos e linhas de moldagem “No-Bake” com a sua
                                 linha tradicional de <strong>soluções para fundição</strong>.
                            </div>                            
                        </div>
                    </div>
                    <!-- Video Column -->
                    <div class="video-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <figure class="image"><img src="images/video.jpeg" alt="">
                                <a href="https://youtu.be/JlW_-t0Ixok" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-play-circle"></span></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us -->
        <section class="about-us">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Info Column -->
                    <div class="info-column col-md-6 col-sm-12 col-xs-12">
                        <div class="about-company">
                            <div>
                                <div class="tabs-content">
                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="info-tab-1">
                                        <h1>Kuttner No-Bake Solutions.</h1>
                                        <div class="text-justify">
                                            <p>
                                                A <strong>Kuttner No-Bake Solutions</strong> foi incorporada no <a href="https://www.kuettner.com/en/about-us" target="_black"><strong>GRUPO Kuttner</strong></a> como afiliada da <a href="http://www.kuttner.com.br/" target="_black"><strong>Kuttner do Brasil</strong></a> em Junho de 2017. Como sucessora das empresas RB Equipamentos Industriais Ltda e IMF Brasil, a empresa já nasceu com uma experiência e expertise acumulada de mais que 30 anos em <strong>engenharia e fabricação de equipamentos e instalações para a indústria de fundição</strong>. O foco da empresa está nas <strong>fundições no-bake</strong>, com uma linha completa para todas as fases do processo desde a <strong>mistura da areia</strong> até a <strong>desmoldagem</strong> das peças, incluindo também <strong>sistemas de recuperação mecânica e térmica de areia</strong> assim como a <strong>limpeza dos fundidos</strong> por <strong>máquina granalhadora</strong>.
                                            </p>
                                            <p>
                                                A linha de produtos da <strong>Kuttner No-Bake Solutions</strong> é complementada pela linha de produtos tradicionais de <a href="http://www.kuttner.com.br/" target="_black"><strong>Kuttner do Brasil</strong></a> para <strong>fundições</strong>, tais como <strong>sistemas de preparação de carga e carregamento de fornos</strong> assim como <strong>sistemas de exaustão e limpeza de gases</strong>.
                                            </p>
                                            <p>
                                                A <strong>Kuttner No-Bake Solutions</strong> encontra-se instalada em sede própria em <strong>Piracicaba / SP</strong>, com facilidades para todo o processo de engenharia, fabricação e assistência técnica, de onde a mesma atende o mercado brasileiro assim como todos os demais mercados da América Latina
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="link-box"><a href="sobre">
                                <i class="machinery-icon-next"></i>
                                    Ver mais</a></div>
                        </div>
                    </div>
                    <!-- List Column -->
                    <div class="list-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <!-- About Block -->
                            <div class="about-block">
                                <div class="inner-box">
                                    <img src="/images/fabrica 1.jpeg" alt="" srcset="">
                                </div>
                            </div>
                            <!-- About Block -->
                            <div class="about-block">
                                <div class="inner-box">
                                <img src="/images/fabrica 2.jpeg" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us -->
        <!-- Project Section -->
        <section class="project-section" style="background-image: url(images/kuttnernobakesolutionsbg1.jpeg);">
            <div class="auto-container">
                <div class="sec-title light text-center">
                    <h2>Projetos</h2>
                </div>
                <!--Carousel Box-->
                <div class="carousel-box">
                    <div class="project-carousel owl-carousel owl-theme">
                        <!-- Project Block -->
                        <div class="project-block">
                            <div class="image-box">
                                <figure>
                                    <a href="/projeto/suporteRei">
                                    <img src="/images/suporte rei weg mexico.jpeg" alt="">
                                    </a>
                                </figure>
                                <div class="title-box">
                                    <h3><a href="/projeto/suporteRei">SUPORTE REI</a></h3>
                                    <span class="tag">MOLDES PEQUENOS</span>
                                </div>
                            </div>
                        </div>
                        <!-- Project Block -->
                        <div class="project-block">
                            <div class="image-box">
                                <figure><a href="/projeto/fundimisa"><img
                                            src="/images/moldes grandes fundimisa.jpeg" alt=""></a></figure>
                                <div class="title-box">
                                    <h3><a href="/projeto/fundimisa">FUNDIMISA</a></h3>
                                    <span class="tag">MOLDES GRANDES</span>
                                </div>
                            </div>
                        </div>
                        <!-- Project Block -->
                        <div class="project-block">
                            <div class="image-box">
                                <figure><a href="/projeto/basso"><img
                                            src="/images/moldagem com carrossel basso.jpeg" alt=""></a></figure>
                                <div class="title-box">
                                    <h3><a href="/projeto/basso">BASSO</a></h3>
                                    <span class="tag">MOLDAGEM COM CARROSSEL</span>
                                </div>
                            </div>
                        </div>
                        <!-- Project Block -->
                        <div class="project-block">
                            <div class="image-box">
                                <figure><a href="/projeto/voith"><img
                                            src="/images/moldagem grande com caixas voith.jpeg" alt=""></a></figure>
                                <div class="title-box">
                                    <h3><a href="/projeto/voith">VOITH</a></h3>
                                    <span class="tag">MOLDAGEM GRANDE COM CAIXAS</span>
                                </div>
                            </div>
                        </div>
                        <!-- Project Block -->
                        <div class="project-block">
                            <div class="image-box">
                                <figure>
                                <a href="/projeto/wegMexico">
                                <img src="/images/projeto nova fundicao wegMexico.jpeg" alt=""></a></figure>
                                <div class="title-box">
                            <h3><a href="/projeto/wegMexico">WEG – MÉXICO</a></h3>
                            <span class="tag">PROJETO NOVA FUNDIÇÃO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Section -->
@endsection