<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>

			
		<?php include_once 'includes/menu.inc.php' ?>
		
 		<!--Formulario-->
		<div class="row container">
			<p>&nbsp;</p>
			<form action="BD/create.php" method="post" class="col s12">
				<fieldset class="formularios" style="padding: 15px">
					<legend><img src="_imagem/usuario2.png" alt="[_imagem]" width="100"></legend>
					<h5 class="light center">Cadastro de clientes</h5>

					<?php
						if(isset($_SESSION['msg'])):
							echo $_SESSION['msg'];
							session_unset();
						endif;
					?>

					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" maxlength="40" required autofocus>
						<label for="nome">Nome do cliente</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email" id="email" maxlength="50" required>
						<label for="email">Email do cliente</label>
					</div>
					<div class="input-field col s12">
						<i class="material-icons prefix">phone</i>
						<input type="tel" name="telefone" id="telefone" maxlength="15" required>
						<label for="telefone">Telefone do cliente</label>
					</div>
					<div class="input-field col s12">
						<input type="submit" value="cadastrar" class="btn blue">
						<input type="reset" value="limpar" class="btn red">
					</div>
				</fieldset>
			</form>
		</div>

<?php include_once 'includes/footer.inc.php' ?>

