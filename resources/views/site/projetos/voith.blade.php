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
                                    <th scope="row">Tipo de moldagem </th>
                                    <td>Manual</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões max moldes </th>
                                    <td>7000 x 5200 x 2250/2250mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Produção teorica (moldes /hora) </th>
                                    <td>0,5</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimensões das placas  </th>
                                    <td>7200 x 5400mm</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pintura  </th>
                                    <td>Manual</td>
                                </tr>
                                <tr>
                                    <th scope="row">Fechamento dos moldes  </th>
                                    <td>Ponte rolante</td>
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
                                <li><span>Tipos de peças: </span>Componentes para geradores eólicos e Turbinas</li>
                                <li><span>Tipo de resina: </span>Furânica</li>                                
                                <li><span>Misturador:</span>Duplo 100ton/h (Silíca) + 10ton/h (Cromita)</li>  
                            </ul>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
    <!--End Project Single Section-->

@endsection