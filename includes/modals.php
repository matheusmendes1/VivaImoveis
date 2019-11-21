<!-- Modal - Login -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header bg-header">
        <h5 class="modal-title" id="exampleModalLabel">Entrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      	<form action="login.php" method="post">
  			  <div class="form-group">
  			    <label for="email">Email</label>
  			    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required="true">
  			  </div>

  			  <div class="form-group">
  			    <label for="password">Password</label>
  			    <input type="password" class="form-control" id="password" name="password" required="true">
  			  </div>

          <div class="form-row justify-content-center">    
              <button type="submit" class="btn btn-secondary">Login</button>
          </div>

  		  </form>
      </div>
      
    </div>
  </div>
</div>


<!-- Modal - Interesse -->
<div class="modal fade" id="interesseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header bg-header">
        
        <h3 class="modal-title" id="exampleModalLabel">Envie-nos sua proposta!</h3>           

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="cadastraInteresse.php" method="POST">

            <input type="hidden" id="imovelId" name="imovelId">

            <div class="form-group">
                <label for="nomeInteresse">Nome</label>
                <input type="text" class="form-control" id="nomeInteresse" name="nome" required>
            </div>

            <div class="form-group">
                <label for="emailInteresse">E-mail</label>
                <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3}$" class="form-control" id="emailInteresse" name="email" required>         
            </div>          

            <div class="form-group">
                <label for="phoneInteresse">Telefone</label>
                <input type="tel" class="form-control telMask" id="phoneInteresse" name="telefone" required>           
            </div>

            <div class="form-group">
                <label for="descricaoInteresse">Descrição da Proposta</label>
                <input type="text" class="form-control" id="descricaoInteresse" name="descricao" required>
            </div>
            
          <div class="modal-footer">
        
            <div class="col-sm-6 col-md-6">
              <button type="button" class="btn btn-secondary float-left" onclick="clearFields()" data-dismiss="modal">Cancelar</button>
            </div>

            <div class="col-sm-6 col-md-6">
              <input class="btn btn-secondary float-right" type="submit" value = "Enviar">
            </div>
       
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  
  function clearFields(){
    document.getElementById("nomeInteresse").value = "";
    document.getElementById("emailInteresse").value = "";
    document.getElementById("phoneInteresse").value = "";
    document.getElementById("descricaoInteresse").value = "";
  }

</script>