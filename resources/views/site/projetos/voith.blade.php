@extends('site/layout.app',["current" => "projetos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpeg)">
        <div class="auto-container">
            <h1>VOITH</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Início</a></li>
                <li><a href="/projetos">Projetos</a></li>
                <li>VOITH</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Project Single Section-->
    <section class="project-single-section">
        <div class="auto-container">
            <div class="inner-container">
                <!--Upper Box-->
                <div class="upper-box">
                    <div class="single-item-carousel owl-carousel owl-theme">
                        <div class="slide">
                            <div class="image">
                            <img src="/images/projetos/voith/voith1.jpeg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                            <img src="/images/projetos/voith/voith2.jpeg" alt="" />
                            </div>
                        </div>
                        
                    </div>
                </div>

                <h2 class="title">VOITH <small>MOLDAGEM GRANDE COM CAIXAS</small></h2>
                
                <div class="row clearfix">
                    <!--Content Box-->
                    <div class="content-column col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <!-- <div class="inner-column"> -->
                            
                            
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Sistema de moldagem </th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Tipo de Moldagem </th>
                                    <td>NO-BAKE</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões do Palete </th>
                                    <td>5400 x 7200 mm ( Guia 6000 mm )</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões - máx Moldes</th>
                                    <td>5200 x 7000 x 2000/2000mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mesa Vibratória</th>
                                    <td>50 Ton</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tipo de tinta  </th>
                                    <td>Zirconita</td>
                                </tr>
                            </tbody>
                            </table>


                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Moldes Pintados / Montagem</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Fechamento dos moldes  </th>
                                    <td>Montagem Manual</td>
                                </tr>
                            </tbody>
                            </table>

                        <!-- </div> -->
                    </div>

                    <!--Info Column-->
                    <div class="info-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <ul>
                                <li><h4>Dados Gerais:</h4></li>
                                <li><span>Metal: </span>Ferro Fundido | Aço</li>
                                <li><span>Tipos de peças:</span>Componentes de Hidroelétricas</li>
                                <li><span>Tipo di resina: </span>Fenólica Uretânica</li>                                
                                <li><span>Misturador:</span>: MK DUAL /100-10(100 E 10 Ton/hora)</li>  
                                <li><span>Rendimento Metalúrgico: </span>70%</li>     
                                <li><span>Capacidade de Produção 1ª fase:</span>2000 Toneladas/mês Metal liquido</li>     
                            </ul>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
    <!--End Project Single Section-->

@endsection