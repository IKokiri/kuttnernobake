@extends('site/layout.app',["current" => "projetos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/kuttnernobakesolutionsbg1.jpeg)">
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
                                <img src="/images/basso1.jpeg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                            <img src="/images/basso2.jpeg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="/images/basso3.jpeg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="/images/basso4.jpeg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                                <img src="/images/basso5.jpeg" alt="" />
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
                                    <td>Carrossel C4 NO-BAKE</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões - máx Moldes</th>
                                    <td>600 x 800 x 300/300mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões - min Moldes  </th>
                                    <td>300 x 400 x 100/100mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mesa Vibratória</th>
                                    <td>0,5 Ton</td>
                                </tr>
                                <tr>
                                    <th scope="row">Produção teorica (Ciclos / hora) </th>
                                    <td>25 Ciclos/hora</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ciclo teórico (seg.) </th>
                                    <td>144 seg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Numero placas de moldagem</th>
                                    <td>04</td>
                                </tr>
                                <tr>
                                    <th scope="row">ROLLOVER</th>
                                    <td>C4 </td>
                                </tr>
                                <tr>
                                    <th scope="row">Pintura </th>
                                    <td>SV</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tipo de tinta</th>
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
                                    <th scope="row">Fechamento dos moldes</th>
                                    <td>Montagem Manual</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Vazamento</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Numero placas de vazamento  </th>
                                    <td>85</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dim. Placas de vazamento</th>
                                    <td>900 x 1100 mm</td>
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
                                    <th scope="row">Shake-out com pré-regenerador</th>
                                    <td>1600 x 2000 mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Capacidade da recuperação mecanica </th>
                                    <td>12 Ton/hora</td>
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
                                <li><span>Metal: </span>Ferro Fundido/Aço</li>
                                <li><span>Tipos de peças: </span>Componentes automotivos</li>
                                <li><span>Tipo de resina: </span>Fenólica Uretânica</li>                                
                                <li><span>Misturador:</span>MK/20(20 Ton/hora)</li>  
                                <li><span>Rendimento Metalúrgico:</span>80%</li>  
                                <li><span>Capacidade de Produção 1ª fase:</span>1000 Toneladas/mês Metal liquido</li>  
                            </ul>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
    <!--End Project Single Section-->

@endsection