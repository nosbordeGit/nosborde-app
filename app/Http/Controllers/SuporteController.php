<?php

namespace App\Http\Controllers;
use App\Models\Suporte;
use Illuminate\Http\Request;

class SuporteController extends Controller
{
    public function create(){
        return view('site.form_suporte');
    }

   public function store(Request $request)
   {
    //dd($request->only(['nome','email','msg']));
    //$data = $request->all();
   // Suporte::create($data);
   // dd($data);
    Suporte::create($request->only(['nome','email','msg','atendimento','solucao']));
    return redirect()->route('suporte.listar');

   }
   public function listar()
   {
    // variavel Result vai receber os dados vindos do banco de dados utilizando a model Suporte vai ordenar utilizando a coluna do banco de dados created_at
    $result = Suporte::orderBy('created_at','ASC')->get();
    //dd($result);
    return view('site.listar', ['result' =>$result]);
   }
   
   public function atendimento(Suporte $suporte)
   {
    //dd($suporte);
    return view('site.atendimento', ['item'=>$suporte]);
   }

   public function alterar(Suporte $suporte)
   {
    //dd($suporte);
    return view('site.alterar',['item'=>$suporte]);
   }

   public function update()
   {
    return ('Update');
   }
}
