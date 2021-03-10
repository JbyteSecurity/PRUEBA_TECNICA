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
			<div class="col-md-12">
				
				<?= form_open() ?>
		<table>
		<div class="page-header" style="margin-left: 888px;/*! font-size: 1px; */">
		<img src="logo2.png" style="margin-left: -81px;" align="left">
					<h1 style="font-size: 24px;">Registrarse</h1>
					</div>
					
		<tr>
		<td>
		<img src="logo.png" style="margin-top: -416px;" align="left">
		</td>
		<td style="width: 51px;">
		
				
		</td>
		<td>
				 <div class="form-group">
						<label for="nacionalidad">Nacionalidad</label>
			   <select class="form-control" id= "nacionalidad" name="nacionalidad">
				<option value="Peru">Peru</option>
				<option value="Venezuela">Venezuela</option>
				<option value="Colombia">Colombia</option>
			  </select>  
		  </div>
		 <div class="form-group">
						<label for="nacionalidad">Tipo de Documento</label>
			   <select class="form-control" id= "tipo" name="tipo">
				<option value="DNI">DNI</option>
				<option value="Pasaporte">Pasaporte</option>
			  </select>  
		  </div>
		  <div class="form-group">
					<label for="username">DNI</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Ingrese DNI">
					
				</div>
				<div class="form-group">
					<label for="nombres">Nombres</label>
					<input type="text" class="form-control" id="nombres"  name="nombres" placeholder="Ingrese Nombre">
					
				</div>
        <div class="form-group">
					<label for="paterno">Apellido Paterno</label>
					<input type="text" class="form-control" id="paterno"  name="paterno" placeholder="Ingrese Apellido Paterno">
					
				</div>
        <div class="form-group">
					<label for="materno">Apellido Materno</label>
					<input type="text" class="form-control" id="materno"  name="materno" placeholder="Ingrese Apellido Materno">
					
				</div>
        <div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="INgrese Email">
					
				</div>
				<div class="form-group">
					<label for="password">Contraseña</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Ingrese password">
					
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirmar Contraseña</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirme su password">
					
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Registrarme" style="width: 288px;color: white;background-color: red;">
					<input style="opacity:1;" type="checkbox" data-required="1" name="terminos">  Aceptar los Términos y Condiciones
				</div>
				<div class="form-group">					
					<a href="http://localhost/Codeigniter-login-logout-register/login" style="margin-left: 234px;color: red;">Ingresar</a>
				</div>
			</form>
		</div>
		</td>
	</div><!-- .row -->
</div><!-- .container -->
