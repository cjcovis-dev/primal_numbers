# Primal Numbers
Calculadora de Números Primos. Obtener los Números primos en regresión desde N (Número Ingresado) hasta 2. 
El resultado será una lista regresiva de los números primos entre N y 2. Ejemplo 1: N = 7. Resultado = 7, 5, 3, 2 Ejemplo 2: N = 15. Resultado = 13, 11, 7, 5, 3, 2

## Descripción
Proyecto Realizado con Lumen V10, PHP 8, Bootstrap 5, PHPUNIT y Pearl/lumen-request-validate

## Requerimientos
* PHP >= 8.0
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Composer >= 2.5
* Git >= 2.3

## Instalación
1. Descargar el repositorio
1. Abir una terminal en la ruta del proyecto descargado
1. En la terminal ejecutar:
```
$ composer install
```
* Con esto descargaras las dependencias necesarias para ejecutar el proyecto
* Luego tipear en terminal:
```
$ php -S localhost:8000 -t public
```
* Con este comando levantarás el proyecto, para abrirlo hacer ctrl + clic a la url http://localhost:8000 que se muestra en terminal


![ingresar numero.](/public/images/Screenshot_100.png "ingresar numero")

![retornar resultado.](/public/images/Screenshot_101.png "retornar resultado")

* Recibirás mensajes de error si no cumples con los requerimientos en cuanto al número a ingresar

## Probar API de Números Primos
Para probar la API, una vez iniciado la ejecución del proyecto en terminal, puedes utilizar Postman u otra herramienta para probar API's, una vez abierto Postman en una nueva pestaña:

1. Seleccionar tipo de método HTTP: **POST**
1. URL del endpoint: **http://localhost:8000/getData**
1. Parámetros: **Key** será **number** y **value** el valor que deseas evaluar

![consulta api.](/public/images/Screenshot_102.png "consulta api")

# Ejecutar Tests

1. Abir una terminal en la ruta del proyecto
1. En la terminal ejecutar:
```
$ ./vendor/bin/phpunit
```