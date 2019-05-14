@extends('site/layout.app',["current" => "projetos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpg)">
        <div class="auto-container">
            <h1>BASSO</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Início</a></li>
                <li><a href="/projetos">Projetos</a></li>
                <li>BASSO</li>
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
                                <img src="/images/projetos/basso/basso1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                            <img src="/images/projetos/basso/basso2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="/images/projetos/basso/basso3.jpg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="/images/projetos/basso/basso4.jpg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="/images/projetos/basso/basso5.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="title">BASSO <small>MOLDAGEM COM CARROSSEL E LINHA DE RESFRIAMENTO DUPLA</small></h2>
                
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
                                    <td>NO-BAKE COM CARROSEL C4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões max moldes </th>
                                    <td>600 x 800 x 300/300mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões  min moldes</th>
                                    <td>300 x 400 x 100/100 mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Produção teorica (moldes /hora) </th>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ciclo teorico (seg.)</th>
                                    <td>36 seg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Numero placas de moldagem  </th>
                                    <td>04</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões das placas  </th>
                                    <td>900 x 900 mm  (com extratores )</td>
                                </tr>
                                <tr>
                                    <th scope="row">ROLL –OVER </th>
                                    <td>Mesa basculante</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pintura  </th>
                                    <td>Com braços basculantes</td>
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
                                    <td>800 x 1000 mm</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Desmoldagem e Recuperação</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Desmoldador com pre-regenerador</th>
                                    <td>1600 x 2.000mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Capacidade da recuperação mecanica </th>
                                    <td>12 ton/hora</td>
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
                                <li><span>Metal: </span>Aço/Ferro</li>
                                <li><span>Tipos de peças: </span>Componentes automotivos</li>
                                <li><span>Tipo de resina: </span>Fenólica Uretânica</li>                                
                                <li><span>Misturador:</span>20 ton/hora</li>  
                            </ul>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
    <!--End Project Single Section-->

@endsection