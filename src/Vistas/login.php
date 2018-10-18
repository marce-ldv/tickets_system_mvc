<?php  include(URL_VISTA . 'navbar.php') ;?>


<div class="container" style="margin-top:30px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h2 class="section-heading" style="color:white">Login</h2>
			<hr class="primary">
			<p>
				<strong style="color:white">
					Logueate.
				</strong>
			</p>
			<div class="regularform">
				<div class="done">
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						Thank you!
					</div>
				</div>
				<form id="form_r" method="post" action="#" id="contactform" class="text-left "autocomplete="off" enctype= 'multipart/form-data'>


					<input required name="name" type="given-name" class="col-md-6 norightborder btn1" placeholder="Nombre">

					<input required name="surname" type="family-name" class="col-md-6 norightborder btn1" placeholder="Apellido">
					
					<input required name="dni" type="number" min="1" max="999999999" class="col-md-6 norightborder btn1" placeholder="DNI">

					<input required name="date" type="date" class="col-md-6 norightborder btn1" placeholder="">

					<input required name="email" type="email" class="col-md-12 norightborder btn1" placeholder="Correo electronico">

					<p style="text-align: center;">
						<strong style="color:white">
							Necesitamos que introduzcas un nombre de usuario y una contraseña.
						</strong>
					</p>

					<input  style="display: none" name="nickname" autocomplete="off" type="text" class="col-md-6 norightborder btn1" placeholder="Nickname de Usuario">
					
					<input  style="display: none" name="pass" autocomplete="off" type="password" class="col-md-6 norightborder btn1" placeholder="Contraseña">

					<input required name="nickname" autocomplete="off" type="text" class="col-md-6 norightborder btn1" placeholder="Nombre de Usuario">

					<input required name="pass" autocomplete="off" type="password" class="col-md-6 norightborder btn1" placeholder="Contraseña">

					<button type="submit" class="contact submit btn btn-primary btn-xl pull-right " style="  border-radius:15px;">Login</button>

				</form>
			</div>
		</div>
	</div>
</div>