@extends('site/layout.app',["current" => "produtos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/kuttnernobakesolutionsbg1.jpeg)">
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
    <div class="sidebar-page-container" id="conteudoPrincipal">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Our Blog-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="services-single">
                        <div class="inner-box">
                            <div class="sec-title">
                                <h2>Sistema de Pintura por Lavagem</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Sistema de Pintura por Lavagem#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>
                                As estações de pintura KNBS pode ser utilizadas com todos os sistemas principais de pintura: lavagem, airless, spray e com todos os tipos de pintura normalmente utilizadas nas fundições, tanto à base de água como à base de álcool. A pintura em excesso é recolhida em cubas oportunamente projetadas, que ficam logo abaixo dos manipuladores que seguram e posicionam os moldes para este processo.
                                </p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/Pintura por Lavagem g.jpeg" data-fancybox="gallery">
                                        <img src="/images/Pintura por Lavagem p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                         

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text text-justify">
                                <p>
                                Na pintura por lavagem uma bomba efetua a filtragem e recirculação da tinta. Uma bandeja corredição (opcional) permite reduzir ao mínimo a queda de areia na cuba durante as operações de limpeza do molde. Para as pinturas à base de álcool ou para a aplicação com spray, pode ser prevista uma coifa de aspiração para garantir condições de trabalho em conformidade com as normas de trabalho.
                                </p>
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