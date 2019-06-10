<?php

namespace App\Http\Controllers;

use App\Order;
use App\Mail\Orcamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class OrcamentoController extends Controller
{
       /**
     * Ship the given order.
     *
     * @param  Request  $request
     * @param  int  $orderId
     * @return Response
     */
    // public function ship(Request $request, $orderId)
    public function ship(Request $request)
    {

        $assunto = $request->input('assunto');
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $email = $request->input('email');
        $empresa = $request->input('empresa');
        $mensagem = $request->input('mensagem');

        $dados = [
            "assunto"=>$assunto,
            "nome"=>$nome,
            "telefone"=>$telefone,
            "email"=>$email,
            "empresa"=>$empresa,
            "mensagem"=>$mensagem
        ];


        Mail::send('mails.mail', $dados, function($message) {
        $message->to('contatosite@kuttner-nbs.com.br', 'Cliente')
                ->subject("Contato Site Kuttner No Bake Solutions");
        $message->from('contatosite@kuttner-nbs.com.br','KNBS');
        });

        return response(200);
    }
}
