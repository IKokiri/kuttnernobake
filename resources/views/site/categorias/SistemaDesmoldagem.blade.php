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
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Our Blog-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="services-single">
                        <div class="inner-box">
                            <div class="sec-title">
                                <h2>Sistema de Desmoldagem</h2>
                                <h3>
                                
Desmoldadores vibratórios com dimensões de 1000x1000 mm até 6000x4000 mm e capacidades de até 100 Ton. 
                                </h3>
                            </div>
                            <div class="text">
                                <p>Na Desmoldagem se dá a separação da Peça fundida da Areia do molde.</p>
                                <p>A Peça fundida é transportada para o setor de rebarbação e acabamento, sendo que a areia passa pelo Sistema de Recuperação para retornar ao processo de moldagem.</p>
                                <p>Os desmoldadores ( Shake-out ) são máquinas vibratórias de construção robusta e são fabricados com dimensões de 1000 x 1000 mm até 6000 x 4000 mm e capacidades de carga  até 100 ton.</p>
                                <p>Para atender as necessidades da desmoldagem com altas temperaturas são incorporados sistemas de refrigeração adequado para cada necessidade.</p>
                                <p></p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box"><a href="/images/produtos/Desmoldagem.jpeg" data-fancybox="gallery">
                                        <img src="/images/produtos/Desmoldagem.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                            
                                            <!-- Service Block Two -->
                                            <div class="service-block-two">
                                                <div class="inner-box">
                                                    <!-- <p>There anyone who loves or pursues or desires to obtain pain of itself circumstances.</p> -->
                                                    <ul>
                                                        <li>
                                                            
                                                            Cabines completas de desmoldagem com controle ambiental é de ruído, para atender as exigências do Meio Ambiente assim como do Ministério de Trabalho.Cabines completas de desmoldagem com controle ambiental é de ruído, para atender as exigências do Meio Ambiente assim como do Ministério de Trabalho.
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