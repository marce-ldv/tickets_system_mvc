<?php include URL_VIEW . "navbar.php" ?>

<!-- vista de listar artistas -->
<div class="container">	
	<div class="row justify-content-center">
		<div class="col-md-6">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col"># ID</th>
			      <th scope="col">Nombre</th>
			      <th></th>
			      <th></th>
			    </tr>
			  </thead>
			  <tbody>
				<?php 
				if(isset($listArtists)) {
					foreach ($listArtists as $key => $value) { ?>
				    <tr>
				      <th scope="row"> <?= $value->getIdArtist() ?> </th>
				      <td> <?= $value->getNameArtist() ?> </td>
				      <td><a href="<?= VIEW_URL ?>/artist/updateView/<?= $value->getIdArtist() ?>" class="btn btn-primary"> Editar </a></td>
				      <td><a href="<?= VIEW_URL ?>/artist/delete/<?= $value->getIdArtist() ?>" class="btn btn-primary"> Eliminar </a></td>
				    </tr>
				<?php 
					}
				} 
				?>
			  </tbody>
			</table>
		</div>
	</div>
</div>