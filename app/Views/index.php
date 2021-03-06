<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prueba tu conocimiento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    	<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
</head>

<body class="bg-dark">

    <header>
	<img src="<?= base_url('public/img/imagen1.png')?>" class="d-block w-100" alt="co1">
    </header>
    <div class="card bg-dark" style="width: 35rem;">
        <div class="card-body">
            <div class="row align-items-start ">
                <div class="col d-grid gap-2 text-align">
                    <button class="btn btn-warning btn3" style="height: 100px;" type="button" id="botoninicio">
                       <a href="<?= site_url('/formulario') ?>"> <h1>A JUGAR !</h1></a>
                       
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
   
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>
