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
                                <h2>Jato de Passagem Contínua</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Jato de Passagem Contínua#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>Esse tipo de Jato de Granalha é concebido para jatear automaticamente diferentes tipos de peças, tais como: chapas, perfis, fundidos e afins que são colocados sob uma esteira transportadora tipo sem fim.</p>
                                <p>O transportador metálico especial, transporta as peças continuamente através da câmara de jateamento onde as peças ficam sob processo de jateamento executado pelas turbinas. Com o objetivo de alcançar a melhor cobertura de jateamento, as turbinas são localizadas apropriadamente na câmara de jateamento.</p>
                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/Jato de Passagem Continuo g.jpeg" data-fancybox="gallery">
                                        <img src="/images/Jato de Passagem Continuo p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                            
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>O processo de jateamento é intertravado com o sistema de detecção de peças na entrada da câmara de jateamento. Um dispositivo especial é também fornecido para parar a alimentação de abrasivo para as turbinas quando o movimento da esteira é interrompido – parado.</p>
                                <p>Um sistema adicional (inversor de frequência) para ajuste fino da velocidade da esteira metálica é fornecido para que a unidade de jateamento possa cobrir da melhor maneira as exigências dos acabamentos das diferentes superfícies de acabamento.</p>
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