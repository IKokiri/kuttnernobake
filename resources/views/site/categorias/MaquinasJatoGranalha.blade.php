@extends('site/layout.app',["current" => "produtos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpg)">
        <div class="auto-container">
            <h1>Máquinas Jato de Granalha</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">início</a></li>
                <li><a href="/produtos">Produtos</a></li>
                <li>Máquinas Jato de Granalha</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container" id="conteudoPrincipal">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Our Blog-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="services-single">
                        <div class="inner-box">
                            <div class="sec-title">
                                <h2>Máquinas Jato de Granalha</h2>
                                <h3>Máquinas de jato de granalha tanto para peças na Fundição como para outros setores Industriais.</h3>
                            </div>
                            <div class="text">
                                <p>- Máquinas de construção robusta com revestimentos em aço manganês de alta durabilidade</p>
                                <p>- Turbinas com a opção de trabalhar nos dois sentidos de rotação para auxiliar no processo e para aumentar a durabilidade</p>
                                <p>- Com recuperação e beneficiamento da granalha</p>
                                <p>- Modelos de máquinas disponíveis para cada tipo de aplicação, com operação por batelada ou contínua, dimensionadas de acordo com a produção e tamanho das peça</p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box">
                                        <a href="/images/produtos/Maquinas Jato de Granalha g.JPG" data-fancybox="gallery">
                                        <img src="/images/produtos/Maquinas Jato de Granalha p.JPG" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                            
                                            <!-- Service Block Two -->
                                            <div class="service-block-two">
                                                <div class="inner-box">
                                                 
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="feature-info-block">
                                
                                <div class="row clearfix">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <aside class="sidebar">
                        
                 @component('site/categorias/components.component_jato_granalha')
                 @endcomponent
                        
                        <!--Brochure-->
                        <!-- <div class="sidebar-widget brochure-widget">
                            <h3>Manuais</h3>
                            <div class="link-box">
                                <span class="icon fa fa-file-pdf-o"></span>
                                <h5>Primeiro Manual</h5>
                                <a href="#">Download.pdf</a>
                            </div>
                           
                        </div> -->
                        
                        <!--Contact Widhet-->
                        
                    </aside>
                </div>                
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->

    
@endsection