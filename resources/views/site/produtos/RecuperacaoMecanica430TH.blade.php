@extends('site/layout.app',["current" => "produtos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpeg)">
        <div class="auto-container">
            <h1>Recuperação e Regeneração de Areia</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">início</a></li>
                <li><a href="/produtos">Produtos</a></li>
                <li>Recuperação e Regeneração de Areia</li>
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
                                <h2>Recuperação Mecânica - 4 a 30 T/H</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Recuperação Mecânica - 4 a 30 T/H#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>Esta instalação para a regeneração mecânica da areia de fundição aproveita a ação de atrição entre os grãos para eliminar e reduzir a camada de resina que recobre os grãos efetuando 04 operações fundamentais, são elas:</p>
                                <ul>
                                <li>1.	Descascamento do grão;</li>
                                <li>2.	Remoção do pó (finos);</li>
                                <li>3.	Peneiramento final;</li>
                                <li>4.	Resfriamento</li>
                                </ul>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/produtos/Recuperacao Mecanica4th g.jpeg" data-fancybox="gallery">
                                        <img src="/images/produtos/Recuperacao Mecanica4th p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>Estas quatro operações começam no Shake-out (desmoldador) e são completadas em uma única torre vertical posta sob aspiração através de um filtro de mangas. As instalações de regeneração KNBS são aptas para o uso em todas as fundições com a finalidade de recuperar areias aglomeradas com todos os principais procedimentos químicos.</p>
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
                        
                    @component('site/categorias/components.component_recuperacao_regeneracao')
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