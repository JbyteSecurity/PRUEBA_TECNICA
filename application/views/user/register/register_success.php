<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Gracias por Registarse</h1>
			</div>
			<p>Tu cuenta fue registrada</p>
			Usuarios Registrados
			<table border="1" >
			<tr>
				<td>
					Usuarios
				</td>
			</tr>		
			
			<?php foreach ($information as $row) { ?> 
				<tr><td><?php echo $row->username; ?></td></tr>				
			<?php } ?>
			

			</table>	
		</div>
	</div><!-- .row -->
</div><!-- .container -->
