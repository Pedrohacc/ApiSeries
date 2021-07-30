
 @extends ('layout');
 
 
 @section ('cabecalho')


 Adicionar Séries   

 @endsection
        
   
        
      
         
        @section ('conteudo')

        <?php if ($errors->any()) { ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors->all() as $error) {?>
                <li>{{ $error }}</li>
            <?php }?>
        </ul>
    </div>
<?php } ?>
       
             <form method="post"> 
                 @csrf
                <div class="form-goup">
                    <label for ="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                
                </div>
                   <button class="btn btn-primary">Adicionar</button>
             </form>
          
        @endsection



   

