@extends('layout');
            

@section ('cabecalho')
Séries
@endsection
 
        
@section ('conteudo')
<?php if($mensagem !== null){?>
<div class="alert alert-success" role="alert">
<?= $mensagem?>
</div>
<?php }?>
  <a href="/series/criar">  <button  type="button" class="btn btn-dark">Adicionar</button></a>
 
        <ul class="list-group">
            <?php foreach ($series as $serie){ ?>
               <li class="list-group-item d-flex justify-content-between align-items-center">
               <?= $serie->nome ?> 
               <form method = 'post' action ="/series/deletar/{{ $serie->id }}">
                @csrf
                 <button   class="btn btn-outline-danger">
                 <i class="fas fa-trash-restore-alt"></i>
                 </button>
                </form>
                </li>
              
                 <?php }?>    
        
        </ul>
    
        @endsection


   

