<?php  include(URL_VISTA . 'navbar.php') ;?>


<div class="container" style="margin-top:30px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h2 class="section-heading" style="color:white">REGISTRARSE</h2>
			<hr class="primary">
			<p>
				<strong style="color:white">
					Registrate.
				</strong>
			</p>
			<div class="regularform">
				<div class="done">
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						Thank you!
					</div>
				</div>
				<form id="form_r" method="post" action="/cuenta/registrar" id="contactform" class="text-left " autocomplete="off" enctype= 'multipart/form-data'>

					<input required name="email" type="email" class="col-md-12 norightborder" placeholder="Correo electronico">

					<p style="text-align: center;">
						<strong style="color:white">
							Necesitamos que introduzcas un nombre de usuario y una contraseña.
						</strong>
					</p>

					<input  style="display: none" name="nickname" autocomplete="off" type="text" class="col-md-6 norightborder" placeholder="nombre de usuario">
					
					<input  style="display: none" name="pass" autocomplete="off" type="password" class="col-md-6 norightborder" placeholder="contraseña">

					<input required name="nickname" autocomplete="off" type="text" class="col-md-6 norightborder" placeholder="nombre de usuario">

					<input required name="pass" autocomplete="off" type="password" class="col-md-6 norightborder" placeholder="contraseña">

					<button type="submit" class="contact submit btn btn-primary btn-xl pull-right " style="  border-radius:15px; ">Registrarse</button>

				</form>
			</div>
		</div>
	</div>
</div>