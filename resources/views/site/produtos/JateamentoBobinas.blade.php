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
    <div class="sidebar-page-container"  id="conteudoPrincipal">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Content Side / Our Blog-->
                <div class="content-side pull-right col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="services-single">
                        <div class="inner-box">
                            <div class="sec-title">
                                <h2>Jateamento de Bobinas</h2>
                                <div class="link-box">
                                    <a href="/contato/kuttnernobake?produto=Orçamento - Jateamento de Bobinas#orcamentoContato">
                                    <h3>
                                    Orçamento
                                    </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="text text-justify">
                                <p>  A câmara de jateamento com porta giratória e braços de carregamento da bobina de fio rotativo é criada especialmente para decapagem das bobinas de fios de aço.  </p>
                                <p>
                                Na câmara de jateamento as peças são sujeitas aos impactos dos jatos abrasivos disparados pelas turbinas. Para alcançar ótimo desempenho de jateamento as turbinas ficam apropriadamente localizadas na câmara de jateamento.  
                                </p>
                                <p>
                                As turbinas são fabricadas cuidadosamente com material de qualidade de primeira categoria, de forma que elas são altamente eficientes e o jateamento possa ser bem executado.   
                                </p>
                                <p>
                                As bobinas a serem processadas são apoiadas através de dois braços motorizados, rotacionando em seu próprio eixo com a possibilidade de girar em ambos os sentidos e, alternativamente são transportadas dentro da câmara de jateamento onde elas são sujeitas à ação abrasiva vinda das turbinas.  
                                </p>

                            </div>

                            <div class="two-column">
                                <div class="row clearfix">  
                                    <div class="image-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="image-box text-center"><a href="/images/produtos/Jateamento bobinas g.jpeg" data-fancybox="gallery">
                                        <img src="/images/produtos/Jateamento bobinas p.jpeg" alt=""></a></div>
                                    </div>
                                    <div class="info-column col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                        <div class="inner-column">
                                            
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text text-justify">
                                <p>  A porta é revestida com chapa de aço de manganês resistente e onde é fixado os motores que provêem a rotação dos braços de apoio. A rotação do braço dentro da câmara de jateamento é programada para garantir a melhor exposição do fio da bobina aos jatos abrasivos. A rotação do braço externo pode ser controlada pelo operador no painel elétrico, conforme as operações de manuseio e carregamento da bobina. O sistema oposto de braço permite a operação simultânea do jateamento das bobinas dentro da câmara de jateamento e o carregando e descarregando da unidade de jateamento externa.  </p>
                                <p>
                                Cada turbina é equipada com uma proteção de segurança móvel especial que fechará automaticamente a passagem para a câmara de jateamento durante a abertura da porta rotativa. Isto permite operar seguramente com a mudança de braço.  
                                </p>
                                <p>
                                Com exceção das operações de carregamento e descarregamento, o ciclo de funcionamento é completamente automático.
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