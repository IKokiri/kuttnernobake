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
    <div class="sidebar-page-container" id="conteudoPrincipal">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Our Blog-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="services-single">
                        <div class="inner-box">
                            <div class="sec-title">
                                <h2>Jato Mesa Giratória</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Jato Mesa Giratória#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p> No teto da cabine de jateamento sobre a mesa rotativa é fixada a turbina a qual é a principal parte da máquina, la é bem balanceada e cuidadosamente fabricada com material de primeira qualidade de forma que ela é altamente eficiente e executa um jateamento extremamente eficiente. A mesa giratória onde as peças são apoiadas trabalha tanto no sentido horário, como anti-horário, gerando assim um jateamento completo das peças.</p>
                                <p>Os abrasivos disparados cruzam a superfície da mesa, feita de placa perfurada, caem no chão da cabine de jateamento e são transportados para dentro da tremonha. Como consequência, o abrasivo misturado com pó e contaminantes vão para o fundo do elevador de canecas por meio da tremonha. Posteriormente são apanhados e transportados para o seletor abrasivo onde o pó e os abrasivos gastos são presos.</p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/produtos/Jato mesa giratoria g.jpeg" data-fancybox="gallery">
                                        <img src="/images/produtos/Jato mesa giratoria p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                          

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="text text-justify">
                                <p>  O abrasivo recuperado é retornado para a turbina para reuso enquanto o pó é succionado pelo coletor de pó e o abrasivo gasto descartado para um contendor.
A rotação da mesa é operada por um moto-redutor.
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