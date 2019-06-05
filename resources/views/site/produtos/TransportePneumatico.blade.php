@extends('site/layout.app',["current" => "produtos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpeg)">
        <div class="auto-container">
            <h1>Sistema de Desmoldagem</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">início</a></li>
                <li><a href="/produtos">Produtos</a></li>
                <li>Sistema de Desmoldagem</li>
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
                                <h2>Transporte Pneumático</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Transporte Pneumático#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>Os transportes pneumáticos são sistemas que permitem transportar areia de silica nova ou recuperada, ou areias especiais, aos pontos de utilização e ou de tratamento. É composto de vários componentes montados, conforme as exigências e utilizam ar-comprimido seco e sem óleo par o transporte. A evolução técnica mais recente do sistema projetado pela KNBS propicia transportes perfeitos com pressões muito baixas e com consequente economia de ar, com menor desgaste dos componentes e aumento insignifcante do índice de finos da areia.</p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/produtos/Transporte Pneumatico g.jpeg" data-fancybox="gallery">
                                        <img src="/images/produtos/Transporte Pneumatico p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                            
                                    

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text text-justify">
                                <p>Denominado de propulsor para trasnporte pneumático em fase densa: capacidade de 500 a 1000 litros de vazão até 40t/hora. Funcionamento totalmente automático e com comandos manuais para transportar areia, bentonita, amido, cimento e pós de todo o tipo até 200°C. Operação com baixo consumo de ar comprimido com pressões de 1 a 4,5 kgf/cm². Manutenção bastante reduzida. Testado de acordo com as normas ASME. Componentes de alta qualidade, adaptados às condições de trabalho mais severas.</p>
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
                    @component('site/categorias/components.component_desmoldagem')
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