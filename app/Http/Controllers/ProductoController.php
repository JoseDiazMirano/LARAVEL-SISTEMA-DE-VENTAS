<?php

namespace App\Http\Controllers;
use App\Pedidos;
use App\Bebidas;
use App\Entradas;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //ESTA FUNCION NOS PERMITE QUE EL USUARIO NO PUEDA VER NINGUNA DE LAS PESTAÑAS 
    //SIN HABER INICIADO SESSION 
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('verified');
    } 

    public function productos(){
    
        $pedidos = Pedidos::all();
        return view('shopcart.productos', 
                    ['pedidos' => $pedidos]);
    }
    
    public function cart(){

        return view('shopcart.cart');
    }

    public function addtoCart($id){
        $pedido = Pedidos::find($id);
        $cart = session()->get('cart');

        if(!$cart) {

            $cart = [
                $id => [
                    "titulo" => $pedido->titulo,
                    "quantity" =>1,
                    "precio" => $pedido->precio,
                    "image" => $pedido->image
                ]
            ];

            session()->put('cart',$cart);
            return redirect()->back()->with('enhorabuena','producto agregado');
        }

        if(isset($cart[$id])){

            $cart[$id]['quantity']++;
            
            session()->put('cart',$cart);

            return redirect()->back()->with('enhorabuena','producto agregado');

        }

        $cart[$id] = [
            "titulo" => $pedido->titulo,
            "quantity" =>1,
            "precio" => $pedido->precio,
            "image" => $pedido->image

        ];

        session()->put('cart',$cart);
        return redirect()->back()->with('enhorabuena','producto agregado');
    }


    public function destroy($id)
    {
        $cart = Pedidos::findfindOrFail($id);
        $cart->delete();
        return redirect('/shopcart/cart');
    }
    public function imprimir(){

        $pdf = \PDF::loadview('pdf');
        return $pdf->download('tickecConsumo.pdf');
    }

    public function imprimirCarnet(){

        $pdfCarnet = \PDF::loadview('pdfcarnet');
        return $pdfCarnet->download('Carnet.pdf');
    }
}
