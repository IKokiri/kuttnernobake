<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsLetter as Model_NewsLetter;

class NewsLetter extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Model_NewsLetter::all();
        return view('admin/newsletter',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'O campo é obrigatório.',
            'unique' => 'Este email já está cadastrado para receber nossas novidades.',
        ];

        $validateData = $request->validate([
            'email' => 'required|unique:news_letters'
        ],$messages);

        $newsletter = new Model_NewsLetter();
        $newsletter->email = $request->input('email');
        $newsletter->save();
        
        $response = [
            'message'=>'E-mail registrado para receber nossas novidades!',
        ];

        return response($response,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsletter = Model_NewsLetter::find($id);
       
        if(isset($newsletter)){
            $newsletter->delete();
        }
        return redirect('/admin/newsletter');
    }

    /**
     * Adiciona todos os resultados da tabela de newsletter a um arquivo csv e faz seu download
     */
    public function csv()
    {
        $newsletter = Model_NewsLetter::all();
        
        if($newsletter->count()){
            $csvExporter = new \Laracsv\Export();
            $csvExporter->build($newsletter, ['email'=>"E-MAIL", 'created_at'=>'ADICIONADO EM'])->download();

        }else{
            return redirect('/admin/newsletter');
        }        
    }

    /**
     * Retorna a quantidade de resultados contem na tabela de news letter
     */
    public function info(){
        
        
        $newsletter = Model_NewsLetter::all();

        $response = ['qtdeInscritos' => $newsletter->count()];

        return response($response,200);
    }

}
