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
                                    <td>NO-BAKE</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões do Palete</th>
                                    <td>1600 x 2400 mm ( Guia 1400 mm )</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões - máx Moldes</th>
                                    <td>1400 x 2200 x 600/600mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões - min Moldes</th>
                                    <td>700 x 700 x 200/200 mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mesa Vibratória</th>
                                    <td>6 Ton</td>
                                </tr>
                                <tr>
                                    <th scope="row">Produção teorica (Ciclos / hora) </th>
                                    <td>20 Ciclos/hora</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ciclo teórico (seg.) </th>
                                    <td>180 seg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Numero placas de moldagem  </th>
                                    <td>12 </td>
                                </tr>
                                <tr>
                                    <th scope="row">ROLLOVER  </th>
                                    <td>RB 2750 </td>
                                </tr>
                                <tr>
                                    <th scope="row">Pintura  </th>
                                    <td>SV 14 Pinça regulável </td>
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
                                    <th scope="row">Fechamento dos moldes </th>
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
                                    <td>77</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dim. Placas de vazamento  </th>
                                    <td>1600 x 2400 mm</td>
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
                                    <th scope="row">Shake-out com pré-regenerador</th>
                                    <td>2500 x 3600 mm</td>
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
                                <li><span>Metal: </span>Ferro Fundido</li>
                                <li><span>Tipos de peças: </span>Componentes gerais</li>
                                <li><span>Tipo di resina: </span>Fenólica Uretânica</li>                                
                                <li><span>Misturador:</span>MK/50(50 Ton/hora)</li>  
                                <li><span>Rendimento Metalúrgico:</span>70%</li>                                 
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