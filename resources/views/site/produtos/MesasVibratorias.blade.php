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
                                <h2>Mesas Vibratórias</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Mesas Vibratórias#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>
                                As Mesas vibratórias KNBS possuem capacidade padrão de 0,25 a 50 toneldas de carga, sendo possivel trabalhar com capacidades diferentes, mediande projetos especiais.
                                </p>
                                <p>
                                A compactação de moldes, caixas de machos ou de caixas de qualquer processo No-bake é obtida através do levantamento entre um rolete e o outro da parte vibratória da mesa, que entra em contato com a placa de suporte.
                                </p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/mesas vibratorias g.jpeg" data-fancybox="gallery">
                                        <img src="/images/mesas vibratorias p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                         

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text text-justify">
                                <p>
                                Os vibradores geram uma vibração perfeitamente unidirecional, perpendicular ao plano vibratório cuja amplitude é regulável de 0 ao máximo com regulagem  manual da posição das massas rotativas e cujo tempo de vibração pode ser regulado manual ou automaticamente. Quando a máquina for utilizada individualmente, estas operações são feitas pelo operador por meio de um distribuidor comandado por alavanca ou pedal. O revestimento da superfície de contato com a placa de borracha especial antidesgaste permite manter o ruído baixo, dentro dos limites previstos por lei.
                                </p>
                                <p>
                                Atuadores pneumáticos de alta eficiência isolam a parte vibratória do solo, impedindo a transmissão das vibrações à instalação.
                                </p>

                            </div>
                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/mesas vibratorias2 g.jpeg" data-fancybox="gallery">
                                        <img src="/images/mesas vibratorias2 p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                         

                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="text text-justify">
                                <p>
                                Estas mesas vibratórias permitem notável economia de aglomerante, enquanto a compactação aumenta as características mecânicas do molde. A mesa vibratória pode ser equipada com regulador automático de frequência que permite a variação da frequência da vibração permitindo adequar a compactação aos diferentes tipos e dimensões do molde assim como os tipos de aglomerantes utilizados.
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