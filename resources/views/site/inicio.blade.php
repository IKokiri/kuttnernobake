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
                                <figure><img src="images/sisequip/misturador braco duplo.jpg" alt=""></figure>
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
                                <figure><img src="images/sisequip/misturador movel 2.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="btn-box">
                                        <a href="/Misturadores/MisturadorMovel"><i class="icon arrow-top-right"></i>Saber mais</a>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3>Misturador móvel</h3> <i class="icon flaticon-user-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="images/sisequip/fast loop.jpg" alt=""></figure>
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
                                <figure><img src="images/sisequip/rollover.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="btn-box">
                                        <a href="/SistemaMoldagemVazamentoRefriamento/Rollover"><i class="icon arrow-top-right"></i>Saber mais</a>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3>Rollover</h3> <i class="icon flaticon-user-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <!-- Services Block -->
                     <div class="services-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="images/sisequip/moldagem carrocel 4 estacoes.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="btn-box">
                                        <a href="/SistemaMoldagemVazamentoRefriamento/MoldagemCarrocel4Estacoes"><i class="icon arrow-top-right"></i>Saber mais</a>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3>Moldagem Carrocel 4 estações</h3> <i class="icon flaticon-user-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Services Block -->
                     <div class="services-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="images/sisequip/desmoldagem shake out.jpg" alt=""></figure>
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
                                <figure><img src="images/sisequip/recuperação mecanica - 6 30 t h.jpg" alt=""></figure>
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
                                <figure><img src="images/sisequip/Regeneração termica 05 a 6 t h.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="btn-box">
                                        <a href="/RecuperacaoMecanicaRegeneracaoTermica/RegeneracaoTermica056TH"><i class="icon arrow-top-right"></i>Saber mais</a>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3>Regeneração Térmica </h3><i class="icon flaticon-user-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="images/sisequip/jato de passagem continua.jpg" alt=""></figure>
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
                    <a href="#"><i class="icon flaticon-email"></i>info@kuttner-nbs.com.br</a>
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


                            <div class="text">Com esta aquisição, o Grupo Kuttner consolida a sua 
                                base tecnológica em Instalações e Plantas Completas de Fundições, 
                                aliando em seu portofólio o Know How e a competência de muitos anos 
                                da IMF Brasil em equipamentos e linhas de moldagem “No-Bake” com a sua
                                 linha tradicional de soluções para fundição.
                            </div>
                            
                        </div>
                    </div>

                    <!-- Video Column -->
                    <div class="video-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <figure class="image"><img src="images/resource/video.png" alt="">
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
                        <div class="sec-title">
                            <h2>Sobre a Kuttner No-Bake Solutions</h2>
                        </div>
                        <div class="about-company">
                            <h4>A Kuttner No-Bake Solutions foi incorporada no GRUPO Kuttner como afiliada da Kuttner do Brasil em Junho de 2017.</h4>
                            <div class="info-tabs tabs-box">
                                <ul class="tab-buttons">
                                    <li data-tab="#info-tab-1" class="tab-btn active-btn">Sobre</li>
                                </ul>

                                <div class="tabs-content">
                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="info-tab-1">
                                        <h3>Kuttner No-Bake Solutions.</h3>
                                        <div class="text-justify">
                                            <p>
                                                A Kuttner No-Bake Solutions foi incorporada no GRUPO Kuttner como afiliada da Kuttner do Brasil em Junho de 2017. Como sucessora das empresas RB Equipamentos Industriais Ltda e IMF Brasil, a empresa já nasceu com uma experiência e expertise acumulada de mais que 30 anos em engenharia e fabricação de equipamentos e instalações para a indústria de fundição. O foco da empresa está nas fundições no-bake, com uma linha completa para todas as fases do processo desde a mistura da areia até a desmoldagem das peças, incluindo também sistemas de recuperação mecânica e térmica de areia assim como a limpeza dos fundidos por máquina granalhadora.
                                            </p>
                                            <p>
                                                A linha de produtos da Kuttner No-Bake Solutions é complementada pela linha de produtos tradicionais de Kuttner do Brasil para fundições, tais como sistemas de preparação de carga e carregamento de fornos assim como sistemas de exaustão e limpeza de gases.
                                            </p>
                                            <p>
                                                A Kuttner No-Bake Solutions encontra-se instalada em sede própria em Piracicaba / SP, com facilidades para todo o processo de engenharia, fabricação e assistência técnica, de onde a mesma atende o mercado brasileiro assim como todos os demais mercados da América Latina
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
                                    <img src="/images/instalacoes/fabrica 1.jpg" alt="" srcset="">
                                </div>
                            </div>

                            <!-- About Block -->
                            <div class="about-block">
                                <div class="inner-box">
                                <img src="/images/instalacoes/fabrica 2.jpg" alt="" srcset="">
                                </div>
                            </div>

                            <!-- About Block -->
                            <div class="about-block">
                                <div class="inner-box">
                                <img src="/images/instalacoes/fabrica 3.jpg" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us -->

        <!-- Project Section -->
        <section class="project-section" style="background-image: url(images/background/knbs.jpg);">
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
                                <figure><a href="/images/projetos/suporte rei.jpg" class="ligtbox-image" data-fancybox="gallery"><img
                                            src="/images/projetos/suporte rei.jpg" alt=""></a></figure>
                                <div class="title-box">
                                    <h3><a href="/projeto/suporteRei">SUPORTE REI</a></h3>
                                    <span class="tag">MOLDES PEQUENOS</span>
                                </div>
                            </div>
                        </div>

                        <!-- Project Block -->
                        <div class="project-block">
                            <div class="image-box">
                                <figure><a href="/images/projetos/fundimisa G.jpg" class="ligtbox-image" data-fancybox="gallery"><img
                                            src="/images/projetos/fundimisa.jpg" alt=""></a></figure>
                                <div class="title-box">
                                    <h3><a href="/projeto/fundimisa">FUNDIMISA</a></h3>
                                    <span class="tag">MOLDES GRANDES</span>
                                </div>
                            </div>
                        </div>

                        <!-- Project Block -->
                        <div class="project-block">
                            <div class="image-box">
                                <figure><a href="/images/projetos/basso G.jpg" class="ligtbox-image" data-fancybox="gallery"><img
                                            src="/images/projetos/basso.jpg" alt=""></a></figure>
                                <div class="title-box">
                                    <h3><a href="/projeto/basso">BASSO</a></h3>
                                    <span class="tag">MOLDAGEM COM CARROSSEL</span>
                                </div>
                            </div>
                        </div>
                        <!-- Project Block -->
                        <div class="project-block">
                            <div class="image-box">
                                <figure><a href="/images/projetos/voith G.jpg" class="ligtbox-image" data-fancybox="gallery"><img
                                            src="/images/projetos/voith.jpg" alt=""></a></figure>
                                <div class="title-box">
                                    <h3><a href="/projeto/voith">VOITH</a></h3>
                                    <span class="tag">MOLDAGEM GRANDE COM CAIXAS</span>
                                </div>
                            </div>
                        </div>
                        <!-- Project Block -->
                        <div class="project-block">
                            <div class="image-box">
                                <figure><a href="/images/projetos/wegMexico G.jpg" class="ligtbox-image" data-fancybox="gallery"><img
                                            src="/images/projetos/wegMexico.jpg" alt=""></a></figure>
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