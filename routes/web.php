<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('site/inicio');
});

Route::get('sobre/', function () {
    return view('site/sobre');
});

Route::get('produtos', function () {
    return view('site/produtos');
});

Route::prefix('produtos')->group(function(){
   
    Route::get('Misturadores', function () {
        return view('site/categorias/misturadores');
    });

    Route::get('SistemaMoldagemVazamentoRefriamento', function () {
        return view('site/categorias/SistemaMoldagemVazamentoRefriamento');
    });

    Route::get('SistemaDesmoldagem', function () {
        return view('site/categorias/SistemaDesmoldagem');
    });

    Route::get('RecuperacaoMecanicaRegeneracaoTermica', function () {
        return view('site/categorias/RecuperacaoMecanicaRegeneracaoTermica');
    });

    Route::get('MaquinasJatoGranalha', function () {
        return view('site/categorias/MaquinasJatoGranalha');
    });

    Route::get('PreparacaoCargaCarregamentoForno', function () {
        return view('site/categorias/PreparacaoCargaCarregamentoForno');
    });

    Route::get('DespoeiramentoLimpezaGases', function () {
        return view('site/categorias/DespoeiramentoLimpezaGases');
    });

});

Route::prefix('Misturadores')->group(function(){

    Route::get('MisturadorBracoDuplo',function(){
        return view('site/produtos/MisturadorBracoDuplo');
    });
    Route::get('MisturadorBracoSimples',function(){
        return view('site/produtos/MisturadorBracoSimples');
   });
    Route::get('MisturadorMovel',function(){
        return view('site/produtos/MisturadorMovel');
    });

});

Route::prefix('SistemaMoldagemVazamentoRefriamento')->group(function(){
  
    Route::get('FastLoop',function(){
        return view('site/produtos/FastLoop');
    });

    Route::get('Rollover',function(){
        return view('site/produtos/Rollover');
    });

    Route::get('AreaVazamentoResfriamento',function(){
        return view('site/produtos/AreaVazamentoResfriamento');
    });

    Route::get('MoldagemCarrocel4Estacoes',function(){
        return view('site/produtos/MoldagemCarrocel4Estacoes');
    });

    Route::get('SistemaPinturaLavagem',function(){
        return view('site/produtos/SistemaPinturaLavagem');
    });

});

Route::prefix('SistemaDesmoldagem')->group(function(){

    Route::get('ShakeOut',function(){
        return view('site/produtos/ShakeOut');
    });

    Route::get('PreResfriador',function(){
        return view('site/produtos/PreResfriador');
    });

    Route::get('CabineDesmoldagem',function(){
        return view('site/produtos/CabineDesmoldagem');
    });

    Route::get('TransportePneumatico',function(){
        return view('site/produtos/TransportePneumatico');
    });

});

Route::prefix('RecuperacaoMecanicaRegeneracaoTermica')->group(function(){
    
    Route::get('RecuperacaoMecanica4TH',function(){
        return view('site/produtos/RecuperacaoMecanica4TH');
    });

    Route::get('RecuperacaoMecanica430TH',function(){
        return view('site/produtos/RecuperacaoMecanica430TH');
    });
    
    Route::get('RegeneracaoTermica056TH',function(){
        return view('site/produtos/RegeneracaoTermica056TH');
    });

});

Route::prefix('MaquinasJatoGranalha')->group(function(){

    Route::get('JatoPassagemContinua',function(){
        return view('site/produtos/JatoPassagemContinua');
    });
    Route::get('JatoGancheiraPassagem',function(){
        return view('site/produtos/JatoGancheiraPassagem');
    });
    Route::get('JatoGancheiraTipoY',function(){
        return view('site/produtos/JatoGancheiraTipoY');
    });
    Route::get('JateamentoBobinas',function(){
        return view('site/produtos/JateamentoBobinas');
    });
    Route::get('JatoMesaGiratoria',function(){
        return view('site/produtos/JatoMesaGiratoria');
    });
    Route::get('JatoTamboreamento',function(){
        return view('site/produtos/JatoTamboreamento');
    });

});

Route::get('produto', function () {
    return view('site/produto');
});

Route::get('projetos/', function () {
    return view('site/projetos');
});

Route::get('contato/kuttnernobake', function () {
    return view('site/contatoknbs');
});
Route::get('contato/kuttnerbrasil', function () {
    return view('site/contatokdb');
});
Route::get('contato/grupokuttner', function () {
    return view('site/contatokgb');
});

Route::get('projeto/', function () {
    return view('site/projeto');
});


Route::middleware('auth')->group(function(){

    Route::get('admin/', function () {
        return view('admin/inicio');
    })->middleware('auth');
    
    
    Route::get('admin/newsletter','NewsLetter@index');
    Route::get('admin/newsletter/apagar/{id}','NewsLetter@destroy');
    Route::get('admin/newsletter/csv/','NewsLetter@csv');
    
    Route::get('admin/categoria','CategoryController@index');
    Route::post('admin/categoria/','CategoryController@store');
    Route::get('admin/categoria/{id}/editar','CategoryController@edit');
    Route::put('admin/categoria/{id}','CategoryController@update');
    Route::delete('admin/categoria/apagar/{id}','CategoryController@destroy');
    
    Route::get('admin/produtos','ProductController@index');
    Route::post('admin/produtos/','ProductController@store');
    Route::get('admin/produtos/{id}/editar','ProductController@edit');
    Route::put('admin/produtos/{id}','ProductController@update');
    Route::delete('admin/produtos/{id}','ProductController@destroy');
    Route::get('admin/produtos/{id}/buscarImagens','ProductController@buscarImagens');
    
    Route::post('admin/produtoImagem','ProductImageController@store');
    Route::delete('admin/produtoImagem/{id}','ProductImageController@destroy');
    Route::get('admin/produtoImagem/{id}','ProductImageController@destroy');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
