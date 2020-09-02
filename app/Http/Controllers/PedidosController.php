<?php

namespace App\Http\Controllers;

use App\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      //$this->middleware('verified');
  }
  
   public function index()
   {
       return view('pedidos.todos.index',['pedidos' => Pedidos::all()->where('user_id',auth()->id())]);
   }

   public function edit($id)
   {
       return view('pedidos.todos.edit',['pedido' => Pedidos::findOrFail($id)]);
   }
   public function update(Request $request,$id)
   {
      $pedido = Pedidos::findOrFail($id);
      $pedido->titulo = $request->get('titulo');
      $pedido->texto = $request->get('texto');
      $pedido->precio = $request->get('precio');
      if($request->hasFile('image')){
        $file = $request->image;
        $file->move(public_path(). '/imagenes', $file->getClientOriginalName());
        $pedido->image = $file->getClientOriginalName();
    }

      $pedido->update();

      return redirect('/pedidos/todos');
   }


   public function store(Request $request)
   {
     $pedido = new Pedidos();
      
     $pedido->user_id = auth()->id();
     $pedido->titulo = request('titulo');
     $pedido->texto = request('texto');
     $pedido->precio = request('precio');
     if($request->hasFile('image')){
        $file = $request->image;
        $file->move(public_path(). '/imagenes', $file->getClientOriginalName());
        $pedido->image = $file->getClientOriginalName();
    }
 

     $pedido->save();

     return redirect('pedidos/todos');
   }

   public function destroy($id)
   {
       $pedido = Pedidos::findOrFail($id);
       $pedido->delete();

       return redirect('/pedidos/todos');
   }
   //bebidas
   //public function bebidas()
   //{
     //  return view('pedidos.todos.bebidas');
   //}
   
   //entradas
   //public function entradas()
   //{
     //  return view('pedidos.todos.entradas');
   //}
   public function todos()
   {
       return view('pedidos.admin.general',['pedidos' => Pedidos::all()]);
   }
}
