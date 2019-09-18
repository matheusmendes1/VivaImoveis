<!-- Start Forms Section -->
		<div class="container" id="forms"> <!-- Start Formularios Holder Section -->
			<div id="formFuncionario"> <!-- Start - Cadastro de Funcionarios -->
				<div class="col-12 text-center">
					<h3 class="heading">Cadastro de Funcionarios</h3>
					<div class="heading-underline"></div>
				</div>

				<form>
					<div class="form-row">
					    <div class="col-md-8">
							<label for="nomeFuncionario">Nome Completo</label>
							<input id="nomeFuncionario" name="nomeFuncionario" type="text" class="form-control" required>
					    </div>
					    <div class="col-md-4">
							<label for="cpfFuncionario">CPF</label>
							<input id="cpfFuncionario" name="cpfFuncionario" type="text" class="form-control cpfMask" required>
					    </div>
					</div>

					<div class="form-row">
					    <div class="col-sm-12 col-md-3">
							<label for="cepFuncionario">CEP</label>
							<input id="cepFuncionario" name="cepFuncionario" type="text" class="form-control" required>
					    </div>
					</div>

					<div class="form-row">
						<div class="col-md-2">
							<label for="estadoFuncionario">Estado</label>
							<select id="estadoFuncionario" class="custom-select" required>
								<option selected hidden>Selecione...</option>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
							</select>
						</div>

						<div class="col-md-6">
							<label for="cidadeFuncionario">Município</label>
							<input id="cidadeFuncionario" name="cidadeFuncionario" type="text" class="form-control" required>
						</div>

						<div class="col-md-4">
							<label for="bairroFuncionario">Bairro</label>
							<input id="bairroFuncionario" name="bairroFuncionario" type="text" class="form-control" required>						
						</div>
					</div>

					<div class="form-row">

					    <div class="col-md-7">
							<label for="ruaFuncionario">Logradouro</label>
							<input id="ruaFuncionario" name="ruaFuncionario" type="text" class="form-control" required>
					    </div>

						<div class="col-md-2">
							<label for="numeroRuaFuncionario">Nº</label>
							<input id="numeroRuaFuncionario" name="numeroRuaFuncionario" type="number" class="form-control" required>
					    </div>

						<div class="col-md-3">
							<label for="complementoFuncionario">Complemento</label>
							<input id="complementoFuncionario" name="complementoFuncionario" type="text" class="form-control">
					    </div>

					</div>

					<div class="form-row">

					    <div class="col-md-4">
							<label for="dataIngressoFuncionario">Data de Ingresso</label>
							<input id="dataIngressoFuncionario" name="dataIngressoFuncionario" type="date" class="form-control" required>
					    </div>

						<div class="col-md-4">
							<label for="telefoneFuncionario">Telefone</label>
							<input id="telefoneFuncionario" name="telefoneFuncionario" type="text" class="form-control telMask">
					    </div>

						<div class="col-md-4">
							<label for="celularFuncionario">Celular</label>
							<input id="celularFuncionario" name="celularFuncionario" type="text" class="form-control celMask" required>
					    </div>

					</div>

					<div class="form-row">

					    <div class="col-md-6">
							<label for="cargoFuncionario">Cargo</label>
							<input id="cargoFuncionario" name="cargoFuncionario" type="text" class="form-control" required>
					    </div>
					    
						<div class="col-md-6">
							<label for="salarioFuncionario">Remuneração</label>
								<div class="input-group">
									<div class="input-group-prepend">
							      		<span class="input-group-text" id="inputGroupPrepend">R$</span>
							    	</div>
									<input id="salarioFuncionario" name="salarioFuncionario" type="number" class="form-control remMask" required>
								</div>
					    </div>

					</div>

					<div class="form-row">

					    <div class="col-md-6">
							<label for="nomeUsuarioFuncionario">Usuario</label>
							<input id="nomeUsuarioFuncionario" name="nomeUsuarioFuncionario" type="text" class="form-control" required>
					    </div>
					    
						<div class="col-md-6">
							<label for="senhaUsuario">Senha</label>
							<input id="senhaUsuario" name="senhaUsuario" type="password" class="form-control" required>
					    </div>

					</div>

					<button id="submitFuncionarios" type="submit" class="btn btn-primary">Registrar</button>
				</form>
				
			</div> <!-- End - Cadastro de Funcionarios -->

			
			<div id="formClientes"> <!-- Start - Cadastro de Clientes -->
				
				<div class="col-12 text-center">
					<h3 class="heading">Cadastro de Clientes</h3>
					<div class="heading-underline"></div>
				</div>

				<form>
					<div class="form-row">
					    <div class="col-md-8">
							<label for="nomeCliente">Nome Completo</label>
							<input id="nomeCliente" name="nomeCliente" type="text" class="form-control" required>
					    </div>
					    <div class="col-md-4">
							<label for="cpfCliente">CPF</label>
							<input id="cpfCliente" name="cpfCliente" type="text" class="form-control cpfMask" required>
					    </div>
					</div>

					<div class="form-row">
					    <div class="col-sm-12 col-md-3">
							<label for="cepCliente">CEP</label>
							<input id="cepCliente" name="cepCliente" type="text" class="form-control" required>
					    </div>
					</div>

					<div class="form-row">
						<div class="col-md-2">
							<label for="estadoCliente">Estado</label>
							<select id="estadoCliente" class="custom-select" required>
								<option selected hidden>Selecione...</option>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
							</select>
						</div>

						<div class="col-md-6">
							<label for="cidadeCliente">Município</label>
							<input id="cidadeCliente" name="cidadeCliente" type="text" class="form-control" required>
						</div>

						<div class="col-md-4">
							<label for="bairroCliente">Bairro</label>
							<input id="bairroCliente" name="bairroCliente" type="text" class="form-control" required>						
						</div>
					</div>

					<div class="form-row">

					    <div class="col-md-7">
							<label for="logradouroCliente">Logradouro</label>
							<input id="logradouroCliente" name="logradouroCliente" type="text" class="form-control" required>
					    </div>

						<div class="col-md-2">
							<label for="numeroRuaCliente">Nº</label>
							<input id="numeroRuaCliente" name="numeroRuaCliente" type="number" class="form-control" required>
					    </div>

						<div class="col-md-3">
							<label for="complementoCliente">Complemento</label>
							<input id="complementoCliente" name="complementoCliente" type="text" class="form-control">
					    </div>

					</div>

					<div class="form-row">

					    <div class="col-md-4">
							<label for="emailCliente">Email</label>
							<input id="emailCliente" name="emailCliente" type="email" class="form-control" required>
					    </div>

						<div class="col-md-4">
							<label for="telefoneCliente">Telefone</label>
							<input id="telefoneCliente" name="telefoneCliente" type="text" class="form-control telMask">
					    </div>

						<div class="col-md-4">
							<label for="celularCliente">Celular</label>
							<input id="celularCliente" name="celularCliente" type="text" class="form-control celMask" required>
					    </div>

					</div>

					<div class="form-row">

					    <div class="col-md-4">
							<label for="sexoCliente">Sexo</label>

							<select id="sexoCliente" class="custom-select" required>
							  <option selected hidden>Selecione...</option>
							  <option value="masc">Masculino</option>
							  <option value="fem">Feminino</option>
							  <option value="outro">Outro</option>
							</select>
					    </div>
					    
						<div class="col-md-4">
							<label for="estadoCivilCliente">Estado Civil</label>

							<select id="estadoCivilCliente" class="custom-select" required>
							  <option selected hidden>Selecione...</option>
							  <option value="masc">Casado(a)</option>
							  <option value="fem">Solteiro(a)</option>
							</select>
					    </div>

						<div class="col-md-4">
							<label for="profissaoCliente">Profissão</label>
							<input id="profissaoCliente" name="profissaoCliente" type="text" class="form-control">
					    </div>

					</div>

					<button id="submitClientes" type="submit" class="btn btn-primary">Registrar</button>
				</form>
				
			</div> <!-- End - Cadastro de Clientes -->


			<div id="formImoveis"> <!-- Start - Cadastro de Imóveis -->
				
				<div class="col-12 text-center">
					<h3 class="heading">Cadastro de Imóveis</h3>
					<div class="heading-underline"></div>
				</div>

				<form>
					<div class="form-row">
						<div class="col-md-6">
							<div class="float-left">
								<label for="tipoImovel">Tipo de Imóvel</label>

								<select id="tipoImovel" class="custom-select" required>
								  <option selected hidden>Selecione...</option>
								  <option value="casa">Casa</option>
								  <option value="apartamento">Apartamento</option>
								  <option value="terreno">Terreno</option>
								  <option value="salaComercial">Sala Comercial</option>
								</select>
							</div>

					    </div>

						<div class="col-md-6">
							<div class="float-left">
								<label for="proprietarioImovel">Proprietário</label>

								<select id="proprietarioImovel" class="custom-select" required>
								  <option selected hidden>Selecione...</option>
								  <option value="cliente1">Cristiano Ronaldo</option>
								  <option value="cliente2">Ronaldinho Gaucho</option>
								  <option value="cliente3">Ronaldo Fenomeno</option>
								</select>
							</div>

					    </div>

					</div>


					<div id="subFormCasa"> <!-- Start Formulario - Casa -->
						<div class="form-row">
						    <div class="col-md-4">
								<label for="qtdQuartosCasa">Quartos:</label>
								<input id="qtdQuartosCasa" name="qtdQuartosCasa" type="number" class="form-control" min="1" max="5" required>
						    </div>

						    <div class="col-md-4">
								<label for="qtdSuitesCasa">Suites:</label>
								<input id="qtdSuitesCasa" name="qtdSuitesCasa" type="number" class="form-control" min="1" max="5" required>
						    </div>

						    <div class="col-md-4">
								<label for="qtdSalasEstarCasa">Salas de Estar:</label>
								<input id="qtdSalasEstarCasa" name="qtdSalasEstarCasa" type="number" class="form-control" min="1" max="5" required>
						    </div>
						</div>

						<div class="form-row">
						    <div class="col-md-4">
								<label for="qtdSalasJantarCasa">Salas de Jantar:</label>
								<input id="qtdSalasJantarCasa" name="qtdSalasJantarCasa" type="number" class="form-control" min="1" max="5" required>
						    </div>

						    <div class="col-md-4">
								<label for="qtdVagasGaragemCasa">Vagas na Garagem:</label>
								<input id="qtdVagasGaragemCasa" name="qtdVagasGaragemCasa" type="number" class="form-control" min="1" max="5" required>
						    </div>

						    <div class="col-md-4">
								<label for="areaCasa">Área (em m²):</label>
								<input id="areaCasa" name="areaCasa" type="number" class="form-control" min="1" max="999" required>
						    </div>
						</div>

						<div class="form-row">
							<div class="col-md-12">
								<div class="custom-file">
								    <input type="file" class="custom-file-input" id="fotosCasa">
								    <label class="custom-file-label" for="fotosCasa">Fotos do Imóvel</label>
								 </div>
							</div>
						</div>

						<div class="form-row">
						    <div class="col-md-12">
								<label for="descricaoCasa">Descrição da Casa (opcional):</label>
								<textarea id="descricaoCasa" name="descricaoCasa" class="form-control" rows="3"></textarea>
						    </div>

							<div class="form-check col-md-12 float-left">
							  <input class="form-check-input" type="checkbox" value="" id="armarioCasa" name="armarioCasa">

							  <label class="form-check-label" for="defaultCheck1">Armário Embutido</label>
							</div>
						</div>

						<button id="submitCasa" type="submit" class="btn btn-primary">Registrar</button>
					</div> <!-- End Formulario - Casa -->
					
					<div id="subFormApartamento"> <!-- Start Formulario - Apartamento -->
						<div class="form-row">
						    <div class="col-md-4">
								<label for="qtdQuartosApartamento">Quartos:</label>
								<input id="qtdQuartosApartamento" name="qtdQuartosApartamento" type="number" class="form-control" min="1" max="5" required>
						    </div>

						    <div class="col-md-4">
								<label for="qtdSuitesApartamento">Suites:</label>
								<input id="qtdSuitesApartamento" name="qtdSuitesApartamento" type="number" class="form-control" min="1" max="5" required>
						    </div>

						    <div class="col-md-4">
								<label for="qtdSalasEstarApartamento">Salas de Estar:</label>
								<input id="qtdSalasEstarApartamento" name="qtdSalasEstarApartamento" type="number" class="form-control" min="1" max="5" required>
						    </div>
						</div>

						<div class="form-row">
						    <div class="col-md-4">
								<label for="qtdSalasJantarApartamento">Salas de Jantar:</label>
								<input id="qtdSalasJantarApartamento" name="qtdSalasJantarApartamento" type="number" class="form-control" min="1" max="5" required>
						    </div>

						    <div class="col-md-4">
								<label for="qtdVagasGaragemApartamento">Vagas na Garagem:</label>
								<input id="qtdVagasGaragemApartamento" name="qtdVagasGaragemApartamento" type="number" class="form-control" min="1" max="5" required>
						    </div>

						    <div class="col-md-4">
								<label for="areaApartamento">Área (em m²):</label>
								<input id="areaApartamento" name="areaApartamento" type="text" class="form-control" min="1" max="999" required>
						    </div>
						</div>

						<div class="form-row">
							<div class="col-md-12">
								<div class="custom-file">
								    <input type="file" class="custom-file-input" id="fotosApartamento">
								    <label class="custom-file-label" for="fotosApartamento">Fotos do Imóvel</label>
								 </div>
							</div>
						</div>

						<div class="form-row">
						    <div class="col-md-12">
								<label for="descricaoApartamento">Descrição da Casa (opcional):</label>
								<textarea id="descricaoApartamento" name="descricaoApartamento" class="form-control" rows="3"></textarea>
						    </div>
						</div>

						<div class="form-row">
							<div class="col-md-4">
								<label for="indicativoApartamento">Indicativo:</label>
								<input id="indicativoApartamento" name="indicativoApartamento" type="text" class="form-control" required>
							</div>

							<div class="col-md-4">
								<label for="valorApartamento">Valor:</label>
								<input id="valorApartamento" name="valorApartamento" type="number" class="form-control" required>									
							</div>

							<div class="col-md-4">
								<label for="andarApartamento">Andar:</label>
							  	<input id="andarApartamento" name="andarApartamento" class="form-control" type="number" min="1" max="30" required>									
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-4">
								<div class="form-check col-md-12">
								  <input id="armarioApartamento" name="armarioApartamento" class="form-check-input" type="checkbox" value="">

								  <label class="form-check-label" for="armarioApartamento">Armário Embutido</label>
								</div>									
							</div>

							<div class="col-md-4">
								<div class="form-check col-md-12">
								  <input id="portariaApartamento" name="portariaApartamento" class="form-check-input" type="checkbox" value="">

								  <label class="form-check-label" for="portariaApartamento">Portaria 24H</label>
								</div>	
							</div>
						</div>

						<button id="submitApartamento" type="submit" class="btn btn-primary">Registrar</button>
					</div> <!-- End Formulario - Apartamento -->


					<div id="subFormSalaComercial"> <!-- Start Formulario - Sala comercial -->
						<div class="form-row">
							<div class="col-md-4">
								<label for="areaSalaComercial">Área (em m²):</label>
								<input id="areaSalaComercial" name="areaSalaComercial" type="text" class="form-control" min="1" max="999" required>									
							</div>

							<div class="col-md-4">
								<label for="qtdBanheirosSalaComercial">Banheiros:</label>
								<input id="qtdBanheirosSalaComercial" name="qtdBanheirosSalaComercial" type="number" class="form-control" min="1" max="5" required>									
							</div>

							<div class="col-md-4">
								<label for="qtdComodosSalaComercial">Comodos:</label>
								<input id="qtdComodosSalaComercial" name="qtdComodosSalaComercial" type="number" class="form-control" min="1" max="5" required>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-12">
								<div class="custom-file">
								    <input type="file" class="custom-file-input" id="fotosSalaComercial">
								    <label class="custom-file-label" for="fotosSalaComercial">Fotos do Imóvel</label>
								 </div>
							</div>
						</div>

						<button id="submitSalaComercial" type="submit" class="btn btn-primary">Registrar</button>
					</div> <!-- End Formulario - Sala comercial -->

					<div id="subFormTerreno"> <!-- Start Formulario - Terreno -->
						<div class="form-row">
							<div class="col-md-4">
								<label for="areaTerreno">Área (em m²):</label>
								<input id="areaTerreno" name="areaTerreno" type="text" class="form-control" min="1" max="999" required>									
							</div>


							<div class="col-md-4">
								<label for="larguraTerreno">Largura:</label>
								<input id="larguraTerreno" name="larguraTerreno" type="number" class="form-control" min="1" max="5" required>									
							</div>

							<div class="col-md-4">
								<label for="comprimentoTerreno">Largura:</label>
								<input id="comprimentoTerreno" name="comprimentoTerreno" type="number" class="form-control" min="1" max="5" required>	
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-12">
								<div class="custom-file">
								    <input type="file" class="custom-file-input" id="fotosTerreno">
								    <label class="custom-file-label" for="fotosTerreno">Fotos do Imóvel</label>
								 </div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-4">
								<div class="form-check col-md-12">
								  <input id="nivelamentoTerreno" name="nivelamentoTerreno" class="form-check-input" type="checkbox" value="">

								  <label class="form-check-label" for="nivelamentoTerreno">Possui Aclive/Declive</label>
								</div>	
							</div>
						</div>

						<button id="submitTerreno" type="submit" class="btn btn-primary">Registrar</button>
					</div> <!-- End Formulario - Terreno -->

				</form>
				
			</div> <!-- End - Cadastro de Imóveis -->


		</div> <!-- End Formularios Holder Section -->
<!-- End Forms Section -->