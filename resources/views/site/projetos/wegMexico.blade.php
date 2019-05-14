@extends('site/layout.app',["current" => "projetos"])

@section('page')
<!--Page Title-->
<section class="page-title" style="background-image:url(/images/background/2.jpg)">
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
                            <img src="/images/projetos/wegMexico/weg1.jpg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                            <img src="/images/projetos/wegMexico/weg2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="slide">
                            <div class="image">
                            <img src="/images/projetos/wegMexico/weg3.jpg" alt="" />
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
                                    <th scope="row">Dimensão da Placa de Moldagem</th>
                                    <td>1400 x 1800 mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensão da Placa de Montagem</th>
                                    <td>1200 x 1200 mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensão da Placa de Vazamento</th>
                                    <td>1400 x 1600 mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Volume Máximo de Areia por Ciclo na Moldagem</th>
                                    <td>600 kg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Volume Médio de Areia na Desmoldagem</th>
                                    <td>12.100 kg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tempo de Secagem</th>
                                    <td>20 minutos</td>
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