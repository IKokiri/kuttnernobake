@extends('site/layout.app',["current" => "produtos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpeg)">
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
    <div class="sidebar-page-container"  id="conteudoPrincipal">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Our Blog-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="services-single">
                        <div class="inner-box">
                            <div class="sec-title">
                                <h2>Rollover</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Rollover#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>
                                A máquina gira e extrai perfeitamente o molde montado na placa, para produzir bolos, machos ou caixas no mesmo ciclo de produção já que as operações se baseiam exclusivamente na placa porta-modelo que é travada hidraulicamente na linha de roletes de entrada. O funcionamento é completamente automático com a possibilidade, a qualquer momento, de passar para comando manual. Os acionamentos são principalmente hidráulicos, controlados por válvulas proporcionais já que é necessário um comando de aceleração/desaceleração com rampa ajustável. Um sistema automático de controle da execução da extração permite trabalhar sem supervisão. A automação é obtida por meio de um PLC. O uso principal deste tipo de Rollover extrator está nas instalações automáticas de moldagem Fast Loop, sendo também possível introduzi-la em um sistema mais tradicional de moldagem semi-automático ou manual, ou ainda de modo individual.
                                </p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center">
                            <a href="/images/produtos/Rollover g.jpeg" data-fancybox="gallery">
                            <img src="/images/produtos/Rollover p.jpeg" alt=""></a></div>
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
                        
                    <div class="sidebar-widget sidebar-blog-category">
                  
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