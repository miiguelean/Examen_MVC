<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AWI</title>
	<link rel="stylesheet" href="styles.css">
	<script>
		function eliminar(id)
        {
            if (confirm("¿Estás seguro de eliminar el registro?"))
            {
                window.location = "controlador.php?id_eliminar=" + id;
            }
        }
        function modificar(id)
        {
            window.location = "controlador.php?id_mod=" + id;
        }
        function logout()
        {
            if (confirm("¿Quieres cerrar sesión?")) 
            {
                window.location = "logout.php"
            }
        }
	</script>

	<script type="text/javascript" src="validaciones.js"></script>

</head>
<body>

     <!-- INICIO INSERTAR EN TABLA PRODUCTOS -->
	<form id="frmInsert" name="frmInsert" action="controlador.php" method="post" onsubmit="return validar();">
		<input id="idProd" name="idProd" type="text" placeholder="id Producto" value="<?php echo @$cat_mod[0][0]; ?>" hidden/>
		<div class="row">
			<h1>Registrar Producto</h1>
		  <span>
		    <input class="balloon" id="nombre" name="nombre" type="text" placeholder="Nombre" value="<?php echo @$cat_mod[0][1]; ?>" onkeypress="return Vname();" required/><label for="Nombre">Nombre</label>
		  </span>
		  <span>
		    <input class="balloon" id="cant" name="cant" type="text" placeholder="Cantidad" value="<?php echo @$cat_mod[0][2]; ?>" onkeypress="return Vcant();" required/><label for="Cantidad">Cantidad</label>
		  </span>
		  <span>
		    <input class="balloon" id="precio" name="precio" type="text" placeholder="Precio" value="<?php echo @$cat_mod[0][3]; ?>" onkeypress="return Vprecio();"  required/><label for="Precio">Precio</label>
		  </span>
		<input type="submit" name="btnEnviar" id="btnEnviar" value="<?php if(isset($_GET['id_mod'])) {
			echo 'Modificar';
		}
		else
		{
			echo 'Registrar';
		}
		 ?>">
		
		</div>	
	</form>
	<!-- FIN INSERTAR EN TABLA PRODUCTOS -->


	<!-- INICIO BUSCAR EN TABLA PRODUCTOS -->
	<form id="frmBuscar" name="frmBuscar" action="indexAdmin.php" method="post">
		<div class="row">
			<span>
		    <input class="balloon" id="txtNombre" name="txtNombre" type="text" placeholder="Buscar" onkeypress="return Vbuscar();" /><label for="Buscar">Buscar</label>
		  </span>
		    <input type="submit" id="btnBuscar" name="btnBuscar" class="btn btn-secondary" value="Buscar" style="margin-left: 20px;margin-top: 10px;width: 96px;">
		</div>
    </form>

    <div class="row">
	    <table style="background-color: black; border-color: white;border: 2px solid;" align="center">
	        <tr>
	            <td style="border-color: white;border: 2px solid;">Id del Producto</td>
	            <td style="border-color: white;border: 2px solid;">Nombre</td>
	            <td style="border-color: white;border: 2px solid;">Cantidad</td>
	            <td style="border-color: white;border: 2px solid;">Precio</td>
	            <td style="border-color: white;border: 2px solid;">Eliminar</td>
	            <td style="border-color: white;border: 2px solid;">Modificar</td>
	        </tr>
	        <?php echo $tabla_result; ?>
	    </table>
    </div>
</body>
</html>