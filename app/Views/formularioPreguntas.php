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

    <div class="contenedor">
        <input type="hidden" value="<?= base_url('preguntas/v1')  ?>" id="base_datos_json"  > 

    <div class="puntaje" id="puntaje"></div>
        <div class="encabezado card">
            <div class="categoria" id="categoria"></div>
            <div class="numero" id="numero"></div>
            <div class="pregunta" id="pregunta">
        </div>
        <img src="#" class=" card-img-top" id="imagen">
        </div>
        <div class="card-body">
            <div class="btn" id="btn1" onclick="oprimir_btn(0)"></div>
            <div class="btn" id="btn2" onclick="oprimir_btn(1)"></div>
            <div class="btn" id="btn3" onclick="oprimir_btn(2)"></div>
            <div class="btn" id="btn4" onclick="oprimir_btn(3)"></div>
    </div>
    
    <script  src="<?=base_url('public/js/jquery.min.js') ?>"></script>
    <script  src="<?=base_url('public/js/index.js') ?>"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
       



        


</body>

</html>
