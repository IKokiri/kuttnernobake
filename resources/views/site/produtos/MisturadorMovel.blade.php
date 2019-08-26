@extends('site/layout.app',["current" => "produtos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/kuttnernobakesolutionsbg1.jpeg)">
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
                                <h2>Misturador Móvel</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Misturador Móvel#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text">
                                <p>Todos os Misturadores KNBS da série MK com capacidade de 10 a 100t/h podem ser instalados sobre um carro móvel que se movimenta sobre trilhos ou sistema de monotrilho.
                            São ideais para a moldagem no solo ou em um fosso, todos os componentes necessários para o funcionamento do equipamento estão montados a bordo do carro: silos de areia, tanques dos aglomerantes, compressor de ar, ciclones, filtro de mangas e painel elétrico.
                            A absoluta segurança esta garantida por dispositivos colocados nas partes anterior e posterior do carro que interrompem o movimento do equipamento caso encontre qualquer obstáculo no percurso.
                            </p>
                            <p>
                            Há dois diferentes sistemas de carregamento da areia, são eles: por gravidade ou por meio de um transporte pneumático.
                            </p>
                            <p>
                            A robustez da estrutura e o dimensionamento adequado de todos os componentes tornam estas máquinas extremamente confiáveis.
                            </p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center">
                                        <a href="/images/Misturador móvel III.jpeg" data-fancybox="gallery">
                                        <img src="/images/Misturador móvel III.jpeg" alt=""></a></div>
                                    </div>
                                    
                                </div>
                            </div>


                            <div class="feature-info-block">
                                
                                <div class="row clearfix">
                                <div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image"><img src="/images/Misturador móvel II.jpeg" alt=""></figure>
                                    </div>
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                        <figure class="image"><img src="/images/Misturador móvel III.jpeg" alt=""></figure>
                                    </div>
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