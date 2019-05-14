@extends('site/layout.app',["current" => "projetos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/2.jpg)">
        <div class="auto-container">
            <h1>Projetos</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Início</a></li>
                <li>Projetos</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Project Section Two -->
    <section class="projects-section-three">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Project Block -->
                <div class="project-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="image-box">
                        <figure><a href="/images/projetos/Suporte Rei G.jpg" class="ligtbox-image" data-fancybox="gallery">
                        <img src="/images/projetos/suporte rei.jpg" alt=""><span class="fa fa-search-plus"></span></a></figure>
                        <div class="title-box">
                            <h3><a href="/projeto/suporteRei">SUPORTE REI</a></h3>
                            <span class="tag">MOLDES PEQUENOS</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="image-box">
                        <figure><a href="/images/projetos/fundimisa G.jpg" class="ligtbox-image" data-fancybox="gallery">
                        <img src="/images/projetos/fundimisa.jpg" alt=""><span class="fa fa-search-plus"></span></a></figure>
                        <div class="title-box">
                            <h3><a href="/projeto/fundimisa">FUNDIMISA</a></h3>
                            <span class="tag">MOLDES GRANDES</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="image-box">
                        <figure><a href="/images/projetos/basso G.jpg" class="ligtbox-image" data-fancybox="gallery">
                        <img src="/images/projetos/basso.jpg" alt=""><span class="fa fa-search-plus"></span></a></figure>
                        <div class="title-box">
                            <h3><a href="/projeto/basso">BASSO</a></h3>
                            <span class="tag">MOLDAGEM COM CARROSSEL</span>
                        </div>
                    </div>
                </div>
                <!-- Project Block -->
                <div class="project-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="image-box">
                        <figure><a href="/images/projetos/voith G.jpg" class="ligtbox-image" data-fancybox="gallery">
                        <img src="/images/projetos/voith.jpg" alt=""><span class="fa fa-search-plus"></span></a></figure>
                        <div class="title-box">
                            <h3><a href="/projeto/voith">VOITH</a></h3>
                            <span class="tag">MOLDAGEM GRANDE COM CAIXAS</span>
                        </div>
                    </div>
                </div>
                <!-- Project Block -->
                <div class="project-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="image-box">
                        <figure><a href="/images/projetos/wegMexico G.jpg" class="ligtbox-image" data-fancybox="gallery">
                        <img src="/images/projetos/wegMexico.jpg" alt=""><span class="fa fa-search-plus"></span></a></figure>
                        <div class="title-box">
                            <h3><a href="/projeto/wegMexico">WEG – MÉXICO</a></h3>
                            <span class="tag">PROJETO NOVA FUNDIÇÃO</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Project Section Two -->

@endsection