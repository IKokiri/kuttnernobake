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
                            <div class="text">
                                <p>Para o Processo No-Bake, o Misturador é o 	principal Equipamento de todo o Sistema de moldagem.
                                Com melhores controles sobre a dosagem das areias, resinas, catalizadores e suas temperaturas, a mistura será de melhor qualidade e padronizada para todos os moldes.</p>
                                <p>A maior eficiência na mistura otimiza a quantidade de resina utilizada, garante a qualidade da areia preparada com menor custo e redução de refugo de moldes ou 
                                    peças defeituosas.</p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box">
                            <a href="/images/produtos/Rollover.jpg" data-fancybox="gallery">
                            <img src="/images/produtos/Rollover.jpg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                            
                                            <!-- Service Block Two -->
                                            <div class="service-block-two">
                                                <div class="inner-box">
                                                    <h3>Misturadores com Capacidades de 3 a 100 t/hora, com:</h3>
                                                    <!-- <p>There anyone who loves or pursues or desires to obtain pain of itself circumstances.</p> -->
                                                    <ul>
                                                        <li>
                                                        - Movimentação e/ou giro manual ou motorizado do braço.
                                                        </li>
                                                        <hr>
                                                        <li>
                                                         - Modelos Fixos de Braço simples ou Braço duplo para a Moldagem Manual ou Moldagem Fast-Loop
                                                        </li>
                                                        <hr>
                                                        <li>
                                                         - Modelos Móveis de Braço simples ou Braço duplo
                                                        </li>
                                                        <hr>
                                                        <li>
                                                         - Misturadores com Carro Móvel, permitindo a moldagem de grandes caixas no solo ou em fossas, sem necessidade de movimentação das mesmas
                                                        </li>
                                                        <hr>
                                                        <li>
                                                         - Misturadores com esteiras para elevação da Areia até a entrada do mesmo em casos especiais de locais com baixa altura
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