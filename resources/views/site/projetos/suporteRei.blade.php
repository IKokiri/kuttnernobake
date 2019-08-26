@extends('site/layout.app',["current" => "projetos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/kuttnernobakesolutionsbg1.jpeg)">
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
                                <img src="/images/suporterei1.jpeg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="/images/suporterei2.jpeg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="/images/suporterei3.jpeg" alt="" />
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
                                    <th scope="row">Dimensões max moldes</th>
                                    <td>800 x 800 x 305/305mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões  min moldes</th>
                                    <td>330 x 330 x 75/75 mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Produção teorica (moldes /hora)</th>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ciclo teorico (seg.)</th>
                                    <td>36 seg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Numero placas de moldagem</th>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões das placas  </th>
                                    <td>900 x 900 mm  (com extratores )</td>
                                </tr>
                                <tr>
                                    <th scope="row">ROLL-OVER  </th>
                                    <td>RB1320</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tunel de  pre-secagem </th>
                                    <td>SWIR (Infravermelho)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pintura  </th>
                                    <td>Automatica  com braços</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tipo de tinta  </th>
                                    <td>Zirconita e outro tipo ( 2 sistemas de pintura)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tunel de secagem  dos moldes  </th>
                                    <td>ELIMINADO</td>
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
                                    <td>1000 x 1400 mm</td>
                                </tr>
                                
                            </tbody>
                            </table>
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Desmoldagem e Recuperação  </th>
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
                                    <td>15/20 ton/hora</td>
                                </tr>
                                <tr>
                                    <th scope="row">Recuperação termica  </th>
                                    <td>1,5 ton/hora</td>
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
                                <li><span>Metal: </span>Aço | Ferro | Aluminio</li>
                                <li><span>Tipos de peças: </span>Componentes automotivos</li>
                                <li><span>Tipo di resina: </span>Fenolica Uretânica</li>                                
                                <li><span>Misturador:</span>MK/30(30 ton/hora)</li>  
                            </ul>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
    <!--End Project Single Section-->

@endsection