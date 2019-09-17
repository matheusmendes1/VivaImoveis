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
        <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<form>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			  </div>
			</form>
      </div>
      <div class="modal-footer">
			  <a href="#" class="float-left">Forgot your password?</a>
			  <a href="restrict.php"><button type="submit" class="btn btn-secondary">Login</button></a>
      </div>
    </div>
  </div>
</div>