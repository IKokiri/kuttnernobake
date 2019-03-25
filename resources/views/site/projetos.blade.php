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
                            <h3><a href="/projetos">Suporte Rei</a></h3>
                            <span class="tag">Linha completa de Moldagem</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="image-box">
                        <figure><a href="/images/projetos/Usiminas Mecanica G.jpg" class="ligtbox-image" data-fancybox="gallery">
                        <img src="/images/projetos/Usiminas Mecanica.jpg" alt=""><span class="fa fa-search-plus"></span></a></figure>
                        <div class="title-box">
                            <h3><a href="/projetos">Usiminas Mecânica</a></h3>
                            <span class="tag">Linha completa de moldagem</span>
                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block-three col-md-4 col-sm-6 col-xs-12">
                    <div class="image-box">
                        <figure><a href="/images/projetos/Weg Met IV G.jpg" class="ligtbox-image" data-fancybox="gallery">
                        <img src="/images/projetos/Weg Met IV.jpg" alt=""><span class="fa fa-search-plus"></span></a></figure>
                        <div class="title-box">
                            <h3><a href="/projetos">WEG Met. IV</a></h3>
                            <span class="tag">Maquina Jato Interflex</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Project Section Two -->

@endsection