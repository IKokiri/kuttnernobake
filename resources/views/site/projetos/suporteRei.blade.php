@extends('site/layout.app',["current" => "projetos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpg)">
        <div class="auto-container">
            <h1>SUPORTE REI</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Início</a></li>
                <li><a href="/projetos">Projetos</a></li>
                <li>SUPORTE REI</li>
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
                                <img src="/images/projetos/suporteRei/rei1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="/images/projetos/suporteRei/rei2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="/images/projetos/suporteRei/rei3.jpg" alt="" />
                            </div>
                        </div>                      
                    </div>
                </div>

                <h2 class="title">SUPORTE REI <small>MOLDES PEQUENOS</small></h2>
                
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
                                    <th scope="row">Tipo de moldagem </th>
                                    <td>NO-BAKE</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões max moldes </th>
                                    <td>800 x 800 x 305/305mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões  min moldes</th>
                                    <td>330 x 330 x 75/75 mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Produção teorica (moldes /hora) </th>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <th scope="row">Numero placas de moldagem  </th>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões das placas  </th>
                                    <td>900 x 900 mm  (com extratores)</td>
                                </tr>
                                <tr>
                                    <th scope="row">ROLL –OVER </th>
                                    <td>RB1320</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pintura  </th>
                                    <td>Com braços basculantes </td>
                                </tr>
                                <tr>
                                    <th scope="row">Tipo de tinta  </th>
                                    <td>Zirconita</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fechamento dos moldes  </th>
                                    <td>Manipulador  Manual ML1000</td>
                                </tr>
                                <tr>
                                    <th scope="row">Numero placas de vazamento  </th>
                                    <td>124</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dim. Placas de vazamento  </th>
                                    <td>1000 x 1400mm</td>
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
                                <li><span>Metal: </span>Aço</li>
                                <li><span>Tipos de peças: </span>Componentes automotivos</li>
                                <li><span>Tipo de resina: </span>Fenólica Uretânica</li>                                
                                <li><span>Misturador:</span>30 ton/hora</li>  
                            </ul>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
    <!--End Project Single Section-->

@endsection