@extends('site/layout.app',["current" => "produtos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpeg)">
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
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Our Blog-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="services-single">
                        <div class="inner-box">
                            <div class="sec-title">
                                <h2>Jato por Tamboreamento</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Jato por Tamboreamento#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text">
                                <p>Esse tipo de equipamento para jateamento e remoção de areia possui uma esteira sem fim que se move formando uma câmara de jateamento com formato tambor onde as peças a serem processadas são carregadas. Nenhum cuidado especial é requerido durante o carregamento e posicionamento das peças dentro da câmara de jateamento.</p>
                                <p>As peças são carregadas automaticamente ou manualmente como peças soltas. Devido ao fato de que a esteira de tombamento durante o ciclo de jateamento é continuamente rotativa, as peças ficam sujeitas ao jato abrasivo executado pelas turbinas posicionadas no topo da câmara de jateamento. O carregamento das peças é executado através da porta frontal e o descarregamento é executado automaticamente pela reversão da rotação da esteira, sendo que o ciclo de jateamento é controlado automaticamente.</p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/produtos/jato tamboreamento g.jpeg" data-fancybox="gallery">
                                        <img src="/images/produtos/jato tamboreamento p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                            
                

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text">
                                <p>Nas unidades equipadas com um carregador basculante skip “SK” automático, o carregamento da peça é realizado pela colocação de peças  ou pela colocação do container dentro do cesto carregador.</p>
                                <p>O funcionamento do carregador skip “SK” é integrado dentro do ciclo de jateamento e a operação de carregamento pode ser parte de um ciclo automático. </p>
                            </div>
                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/produtos/jato tamboreamento2 g.jpeg" data-fancybox="gallery">
                                        <img src="/images/produtos/jato tamboreamento2 p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                            
                

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="text">
                                <p>O carregador skip “SK” é localizado em frente à máquina de jateamento, na área onde os containers vazios aguardam as peças limpas acabadas para serem armazenadas. Conforme solicitação do cliente pode-se fornecer uma esteira transportadora de borracha para transportar as peças limpas em ângulos adequados para o carregador do skip e, consequentemente, para o container vazio. </p>
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