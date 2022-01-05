<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingresa tus datos</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&display=swap" rel="stylesheet">


</head>
<body>

    <main>
		<div class="container mb-5">
			<div class="mb-3">
			<h1>Diligencia tus datos personales y te avisaremos de otra encuesta</h1>
			</div>
			<form method="POST" action="<?= site_url('/formulario/perdedor/resgitro') ?>" class="mt-4 ">
			    <div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">cedula</label>
					<input class="form-control" type="number" placeholder="cedula" aria-label="default input example" name="cedula">
				</div>
			    <div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Nombre personal</label>
					<input class="form-control" type="text" placeholder="nombre" aria-label="default input example " name="nombre">				
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">apellidos</label>
					<input type="text" class="form-control" placeholder="escriba sus apellidos"name="apellido">
				</div>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Edad</label>
					<input class="form-control" type="number" placeholder="edad" aria-label="default input example" name="edad">
				</div>
					
                <div class="mb-3">
					<label for="exampleFormControlTextarea1" class="form-label">correo electronico</label>
					<input class="form-control" type="text" placeholder="correo electronico" aria-label="default input example" name="email">
				</div>
				        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>

			</form>
		</div>

	</main>

	    
	<section>
		<?php if(session('mensaje')):?> 
			<div class="modal fade" id="modalrespuesta" tabindex="-1" >
				<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header fondoPrincipal">
							<h5 class="modal-title" >participa para ganar</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<h5><?=  session('mensaje')?></h5>
				</div>
			</div>
		<?php endif ?>

	</section>

    <script type="module" src="<?=base_url('public/js/lanzarmodal.js') ?>"></script>
    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>