@extends('site/layout.app',["current" => "projetos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpeg)">
        <div class="auto-container">
            <h1>FUNDIMISA</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Início</a></li>
                <li><a href="/projetos">Projetos</a></li>
                <li>FUNDIMISA</li>
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
                                <img src="/images/projetos/fundimisa/fundimisa1.jpeg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="/images/projetos/fundimisa/fundimisa3.jpeg" alt="" />
                            </div>
                        </div>                        
                    </div>
                </div>
                <h2 class="title">FUNDIMISA <small>MOLDES GRANDES </small></h2>
                
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
                                    <td>NO-BAKE FAST-LOOP</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões max moldes </th>
                                    <td>1400 x 2200 x 550/550mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões  min moldes</th>
                                    <td>600 x 800 x 200/200mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Produção teorica (moldes /hora) </th>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th scope="row">Numero placas de moldagem  </th>
                                    <td>08</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões das placas  </th>
                                    <td>1600 x 2400mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">ROLL –OVER </th>
                                    <td>RB2750</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pintura  </th>
                                    <td>Esteira basculante</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tipo de tinta  </th>
                                    <td>Zirconita</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fechamento dos moldes  </th>
                                    <td>Manipulador  Manual MM1600</td>
                                </tr>
                                <tr>
                                    <th scope="row">Numero placas de vazamento  </th>
                                    <td>124</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dim. Placas de vazamento  </th>
                                    <td>1600 x 2400 mm</td>
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
                                <li><span>Metal: </span>Ferro</li>
                                <li><span>Tipos de peças: </span>Componentes agricolas</li>
                                <li><span>Tipo de resina: </span>Fenólica Uretânica</li>                                
                                <li><span>Misturador:</span>50 ton/hora</li>  
                            </ul>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
    <!--End Project Single Section-->

@endsection