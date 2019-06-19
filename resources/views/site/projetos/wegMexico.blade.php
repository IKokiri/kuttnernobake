@extends('site/layout.app',["current" => "projetos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpeg)">
        <div class="auto-container">
            <h1>WEG – MÉXICO</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Início</a></li>
                <li><a href="/projetos">Projetos</a></li>
                <li>WEG – MÉXICO</li>
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
                            <img src="/images/projetos/wegMexico/weg1.jpeg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                            <img src="/images/projetos/wegMexico/weg2.jpeg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                            <img src="/images/projetos/wegMexico/weg3.jpeg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="title">WEG – MÉXICO</h2>
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
                                    <th scope="row">Tipo de Moldagem</th>
                                    <td>NO-BAKE</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões do Palete</th>
                                    <td>1400 x 1800 mm ( Guia 1000 mm )</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões - máx Moldes  </th>
                                    <td>1200 x 1600 x 600/600mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões - min Moldes  </th>
                                    <td>600 x 600 x 200/200 mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mesa Vibratória</th>
                                    <td>4 Ton</td>
                                </tr>
                                <tr>
                                    <th scope="row">Produção teorica (Ciclos / hora) </th>
                                    <td>50 Ciclos/hora</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ciclo teórico (seg.) </th>
                                    <td>72 seg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Numero placas de moldagem  </th>
                                    <td>16 </td>
                                </tr>
                                <tr>
                                    <th scope="row">ROLLOVER</th>
                                    <td>RB 2750 (com extrator hidráulico)</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tunel de  pre-secagem  </th>
                                    <td>4.000 - Gás / Infravermelho</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pintura  </th>
                                    <td>SV 14 / 18 – Com giro ortogonal / Pinça regulável </td>
                                </tr>
                                <tr>
                                    <th scope="row">Tipo de tinta  </th>
                                    <td>Zirconita</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tunel de secagem  dos moldes  </th>
                                    <td>15.000 – Gás</td>
                                </tr>
                            </tbody>
                            </table>

                            <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Moldes não Pintados</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Fechamento dos moldes  </th>
                                    <td>Acoplador  Automático MA1600</td>
                                </tr>
                                <tr>
                                    <th scope="row">Manutenção da Linha</th>
                                    <td>Manipulador Manual MM1400 – 3.000 Kg</td>
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
                                    <td>Montagem Manual - Mesa Giratória</td>
                                </tr>
                                <tr>
                                    <th scope="row">Troca de Paletes</th>
                                    <td>Manipulador 5.000 Kg</td>
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
                                    <td>75</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dim. Placas de vazamento</th>
                                    <td>1400 x 1600 mm</td>
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
                                    <th scope="row">Shake-out com pré-regenerador </th>
                                    <td>3.000 x 4.000 mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Capacidade da recuperação mecanica </th>
                                    <td>20 Ton/hora</td>
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
                                <li><span>Metal: </span>Ferro Fundido cinzento (FC-200)</li>
                                <li><span>Tipos de peças: </span>Componentes de Motores Elétricos </li>
                                <li><span>Tipo di resina: </span>Fenólica Uretânica</li>                                
                                <li><span>Misturador:</span>MK/50(50 Ton/hora)</li>                                
                                <li><span>Rendimento Metalúrgico:</span>80%</li>                                
                                <li><span>Capacidade de Produção 1ª fase:</span>4000 Toneladas/mês Metal liquido</li>  
                            </ul>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
    <!--End Project Single Section-->

@endsection