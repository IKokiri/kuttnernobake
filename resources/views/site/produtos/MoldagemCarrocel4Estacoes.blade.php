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
    <div class="sidebar-page-container" id="conteudoPrincipal">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Our Blog-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="services-single">
                        <div class="inner-box">
                            <div class="sec-title">
                                <h2>Moldagem Carrocel 4 Estações</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Moldagem Carrocel 4 Estações#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>Este tipo de carrossel foi especificamente projetado para a moldagem em NO-BAKE de bolos de pequenas dimensões.</p>
                                <p>Ele combina a economia de utilização e o baixo investimento inicial à uma alta produtividade podendo produzir até 30 moldes completos/ hora.
A mistura das areias (nova e recuperada) com resina e catalisador para todos os processos NO-BAKE é garantida por um misturador de alta velocidade, com braço simples, tipo MK/12 com uma capacidade de 12 ton/hora.
</p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/produtos/Moldagem Carrocel g.jpeg" data-fancybox="gallery">
                                        <img src="/images/produtos/Moldagem Carrocel p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                            
                                        

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>
                                Este misturador pode ser girado para fora da área do carrossel para a moldagem no solo e para as operações de regulagem e limpeza.
O carrossel de moldagem de 4 estações com rotação proporcional, comandada por meio de um motor hidráulico através de uma transmissão com coroa dentada e pinhão, compreende 1 estação de enchimento, 2 estações de cura e 1 estação de extração.
                                </p>
                                <p>
                                A precisão do movimento de rotação é garantida por um sistema de desaceleração e por um ponto de parada por meio de fim-de-curso.
                                </p>
                                <p>
                                Cada estação é dotada de sistema de motovibrador.
A vibração é acionada na estação de enchimento para a compactação da areia e na estação de extração para facilitar a extração do bolo da caixa de moldagem, sendo regulável em termos de tempo e freqüência.

                                </p>
                                <p>
                                Esta última operação é efetuada automaticamente por meio de um girador-extrator que bloqueia a placa de moldagem e gira-a de 180º, extraindo assim  o bolo já curado em um trecho de transportador de correia que se abaixa adequadamente permitindo uma extração perfeitamente horizontal.
                                </p>
                                <p>
                                A troca do ferramental pode ser efetuada na estação de enchimento mediante um carro de transferência manual.
                                </p>
                                <p>
                                Este sistema de moldagem não necessita de fundações ou outras obras civis mais complexas.
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