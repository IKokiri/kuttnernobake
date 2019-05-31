@extends('site/layout.app',["current" => "produtos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpeg)">
        <div class="auto-container">
            <h1>Misturadores</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">início</a></li>
                <li><a href="/produtos">Produtos</a></li>
                <li>Misturadores</li>
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
                                <h2>Misturador Braço Duplo</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Misturador Braço Duplo#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                                
                            </div>
                             <!-- Service Block Two -->
                             <div class="service-block-two">
                                <div class="inner-box text-center">
                                    <!-- <p>There anyone who loves or pursues or desires to obtain pain of itself circumstances.</p> -->
                                    <ul>
                                        <li>
                                            <h4>Permitem cobrir facilmente amplas áreas de moldagem.</h4>
                                        </li>
                                        <hr>
                                        <li>
                                            <h4>Disponíveis com rotação manual ou motorizada dos braços, conforme o modelo selecionado</h4>
                                        </li>
                                        <hr>
                                        <li>
                                            <h4>Capacidades de 10 a 100t/h.</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center">
                        <a href="/images/produtos/misturador braco duplo.jpeg" data-fancybox="gallery">
                        <img src="/images/produtos/misturador braco duplo.jpeg" alt=""></a></div>
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
                        
                    @component('site/categorias/components.component_misturadores')
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