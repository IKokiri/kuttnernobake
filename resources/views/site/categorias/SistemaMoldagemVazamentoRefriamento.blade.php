@extends('site/layout.app',["current" => "produtos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpg)">
        <div class="auto-container">
            <h1>Sistema de Moldagem - Vazamento - Refriamento</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">início</a></li>
                <li><a href="/produtos">Produtos</a></li>
                <li>Sistema de Moldagem - Vazamento - Refriamento</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Our Blog-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="services-single">
                        <div class="inner-box">
                            <div class="sec-title">
                                <h2>Sistema de Moldagem - Vazamento - Refriamento</h2>
                            </div>
                            <div class="text">
                                <h3>
                                    Sistema de Moldagem com Mesa Moldadora, Carrossel ou Fast-Loop.
                                </h3>
                                <ul>
                                    <li>
                                        - Para Caixas e Moldes de areia com auto-ajuste na dosagem da areia preparada
                                    </li>
                                    <li>
                                    - Para Caixas ou moldes de diferentes dimensões
                                    </li>
                                    <li>
                                    - Com Sistema de operação manual, com Manipulador Hidráulico/Pneumático, ou automático com Rollover
                                    </li>
                                    <li>
                                    - Com diferentes níveis de automação e Controle total da Produção desde a preparação da areia até a desmoldagem, com visualização em tela e com emissão de Relatórios
                                    </li>
                                </ul>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box">
                                        <a href="/images/produtos/Sistema Moldagem.JPG" data-fancybox="gallery">
                                        <img src="/images/produtos/Sistema Moldagem.JPG" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                            
                                            <!-- Service Block Two -->
                                            <div class="service-block-two">
                                                <div class="inner-box">
                                                    <h3>Incluindo:</h3>
                                                    <!-- <p>There anyone who loves or pursues or desires to obtain pain of itself circumstances.</p> -->
                                                    <ul>
                                                        <li>
                                                        - Sistema de nivelador de enchimento da caixa automático
                                                        </li>
                                                        <hr>
                                                        <li>
                                                         - Mesa vibratória de compactação
                                                        </li>
                                                        <hr>
                                                        <li>
                                                         - Sistema de Pintura
                                                        </li>
                                                        <hr>
                                                        <li>
                                                         - Sistema de secagem
                                                        </li>
                                                        <hr>
                                                        <li>
                                                         - Preparação e colocação de Machos 
                                                        </li>
                                                         - Fechamento com Manipulador manual ou automático
                                                        </li>
                                                        <hr>
                                                        <li>
                                                         - Sistema de Vazamento e Resfriamento com movimentação mecanizada dos moldes vazados até a Desmoldagem
                                                        </li>
                                                    </ul>
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
                         
                    @component('site/categorias/components.component_moldagem')
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