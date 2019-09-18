<!-- Modal - Search -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header bg-header">
      	
        <h3 class="modal-title" id="exampleModalLabel">Filtros</h3>	      		

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      	<form>
      		<div class="form-row">
      			<div class="col-md-6">
					<label for="propositoImovel">Propósito</label>

					<select id="propositoImovel" class="custom-select">
					  <option selected hidden>Selecione...</option>
					  <option value="aquisicao">Aquisição</option>
					  <option value="locacao">Locação</option>
					</select>
      			</div>

				<div class="col-md-6">
				    <label for="bairroImovel">Bairro</label>
				    <input type="text" class="form-control" id="bairroImovel">
				</div>

				<div class="col-md-6">
				    <label for="valorMinimoImovel">Mínimo</label>
				    <input type="number" class="form-control" id="valorMinimoImovel">					
				</div>      		

				<div class="col-md-6">
				    <label for="valorMaximoImovel">Máximo</label>
				    <input type="number" class="form-control" id="valorMaximoImovel">						
				</div>

				<div class="col-md-12">
				    <label for="outrosImovel">Outros</label>
				    <input type="text" class="form-control" id="outrosImovel">
				</div>

      		</div>
      	</form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-secondary">Pesquisar</button>
      </div>

    </div>
  </div>
</div>

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
      	<form action="php/login.php" method="post">
  			  <div class="form-group">
  			    <label for="emailRestrict">Email</label>
  			    <input type="email" class="form-control" id="emailRestrict" name="emailRestrict" aria-describedby="emailHelp">
  			  </div>

  			  <div class="form-group">
  			    <label for="passwordRestrict">Password</label>
  			    <input type="password" class="form-control" id="passwordRestrict" name="passwordRestrict">
  			  </div>

          <div class="row">
            <div class="col-sm-8 col-md-6">
              <a href="restrict.php" class="modal-link">Esqueci minha senha</a>
            </div>

            <div class="col-sm-4 col-md-6">
              <button type="submit" class="btn btn-secondary" value="send">Login</button>
            </div>
          </div>
  		  </form>
      </div>
      
    </div>
  </div>
</div>