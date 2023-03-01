# Examen 2 Parcial --Tienda--

Examen practico del modelo mvc de awi4.0.

## Como funciona

El controlador se encarga de llamar a el modelo, que es el que tiene las funciones del crud con codigo sql, y a la vista que es donde se encuentra todo el diseño de nuestra pagina.


Controlador:
```php
require 'modelo.php';
require 'vista.php';
```

## Ejemplo de como se ve el modelo
En este caso se hará un insert

```php
require 'bd/conexion_bd.php';

	class Productos extends BD_PDO
	{
		function insertar($nombre, $cant, $precio)
		{
			$this->Ejecutar_Instruccion("insert into productos(nombre,cant,precio) values('$nombre','$cant','$precio')");
			echo '<script>alert("Ha Insertado Correctamente");</script>';
		}
     }
```

Y asi es como queda el controlador al querer hacer un insert
```php
$obj_prod = new Productos();

    if (isset($_POST['btnEnviar'])) {
        if ($_POST['btnEnviar']=="Registrar") {
            $obj_prod->insertar($nombre, $cant, $precio);
        }
    }
```
