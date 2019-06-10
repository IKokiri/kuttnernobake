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
    public function ship()
    {
        // $order = Order::findOrFail($orderId);

        // Ship order...

        // Mail::to('luiz.mendes@outlook.com')->send(new Orcamento());
    }
}
