<?php
namespace App\Http\Controllers;
use App\Http\Requests\SeriesErros;
use App\Serie;
use Illuminate\Http\Request;


class SeriesControll extends Controller{


    public function index (Request $request) {

        $series = serie::query()->orderBy('nome') ->get();
        $mensagem = $request->session()->get('mensagem');
      
        return view ('index', compact ('series', 'mensagem'));
       
    }
  

    public function create(){
        return view('create');
    }

    public function salvar(SeriesErros $request){
        $nome  = $request->nome;
        $serie = new Serie();
        $serie->nome = $nome; 
        $serie->save();
//OU 
        //$serie = Serie::create($request->all());
      //Aqui eu defino que eu tenho uma mensagem na sessão
        $request->session()->flash(
            'mensagem',
           "Série $serie->nome cadastrada com sucesso"
        ); 
        return redirect ('/series');
       
}

public function  excluir (Request $request){
   
    Serie::destroy( $request->id);
    $request->session()->flash(
        'mensagem',
        "Série $request->nome excluida com sucesso"
    );

    return redirect ('/series');
    
}

}