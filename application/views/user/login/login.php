<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<table>
		<tr>
		<td>
		<img src="logo.png" align="left"> 
		</td>
		<td>
		<div class="col-md-12">
			<div class="page-header">
				<img src="logo2.png" align="left"> 
				<h1 style="font-size: 26px;margin-left: 149px;">Iniciar Sesión</h1>
			</div>
			
			<?= form_open() ?>
				
				<div class="form-group">
					<label for="username">Numero de Documento</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Your username">
				</div>
				<div class="form-group">
					<label for="password">Contraseña</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Your password">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Ingresar" style="background-color: red;width: 330px;color: white;font-weight: bold;">
					<a href="https://www.w3schools.com" style="margin-left: 194px;color: red;">Olvide Mi Contraseña</a>
				</div>
				<div class="form-group">					
					<a href="https://www.w3schools.com" style="margin-left: 78px;">Primera vez en REDRILSA</a>
				</div>
				<div class="form-group">					
					<input type="button" value="Registrarse" class="button_active" onclick="location.href='http://localhost/Codeigniter-login-logout-register/register';" style="width: 331px;background-color: #848484;height: 31px;color: white;font-weight: bold;">
				</div>
			</form>
		</div>
		</td>
		<tr>
		</table>
	</div><!-- .row -->
</div><!-- .container -->