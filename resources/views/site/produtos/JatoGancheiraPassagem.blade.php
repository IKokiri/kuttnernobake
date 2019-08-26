@extends('site/layout.app',["current" => "produtos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/kuttnernobakesolutionsbg1.jpeg)">
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
                                <h2>Jato Gancheira de Passagem</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Jato Gancheira de Passagem#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>Esses tipos de Jatos são adequados para tratamento de superfície de
uma ampla gama de peças: estampados, forjados, fundição, caldeiraria, etc.
O tratamento é feito com granalha de aço projetada  com altas  velocidades por meio de turbinas centrífugas especiais. 
</p>
<p>
As peças a serem jateadas são penduradas individualmente, ou em forma de cacho, em um carro  montado no transportador tipo monovia, que se desloca automaticamente.
</p>
<p>
O operador não é necessário permanecer ao lado  nem no interior da câmara de jateamento.
</p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/Jato Gancheira de passagem g.jpeg" data-fancybox="gallery">
                                        <img src="/images/Jato Gancheira de passagem p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                            
                                           

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>Durante a projeção da granalha , as gancheiras  são  mantidas em rotação constante e automaticamente a rotação do gancho é revertida para otimizar a exposição de todas as superfícies e deste modo assegurar a uniformidade do  jateamento. Após o tratamento o  transportador  leva o conjunto  para fora da câmara pelo lado oposto da entrada de peças, uma vez que existe uma monovia onde o carro que suporta o gancho é apoiado e está monovia esta disposta em um circuito fechado, possibilitando o giro continuo de transporte de peças a serem jateadas e jateadas.
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