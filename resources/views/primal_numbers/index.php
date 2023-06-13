<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- End Bootstap 5-->

    <title>Primal Numbers</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Calculadora de Números Primos</h1>    
                <hr>
                <h5>Obtener los Números primos en regresión desde N (Número Ingresado) hasta 2.
                    El resultado será una lista regresiva de los números primos entre N y 2.
                </h5>
                <h5>Ejemplo 1: N = 7. Resultado = 7, 5, 3, 2</h5>
                <h5>Ejemplo 2: N = 15. Resultado = 13, 11, 7, 5, 3, 2</h5>

            </div>
        </div>
        <div class="row my-5">
            <div class="col-4 offset-4">
                <form method="POST" action="<?php echo route('getData');?>">
                    <div class="mb-3">
                        <label for="number" class="form-label">Ingresa un Número</label>
                        <input type="number" name="number" class="form-control" id="number" aria-describedby="numberHelp">
                        <div id="numberHelp" class="form-text">El número a ingresar debe ser positivo y entero</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>