<?php 

	require 'bd/conexion_bd.php';

	class Productos extends BD_PDO
	{
		function insertar($nombre, $cant, $precio)
		{
			$this->Ejecutar_Instruccion("insert into productos(nombre,cant,precio) values('$nombre','$cant','$precio')");
			echo '<script>alert("Ha Insertado Correctamente");</script>';
		}
		function buscar($datoBuscar)
		{
			$result = $this->Ejecutar_Instruccion("select * from productos where nombre like '%$datoBuscar%'");
			return $result;
		}
		function eliminar($id)
		{
			$this->Ejecutar_Instruccion("delete from productos where idProd = '$id'");
		}
		function modificar($nombre, $cant, $precio, $id)
		{
			$this->Ejecutar_Instruccion("update productos set nombre= '$nombre', cant= '$cant', precio= '$precio' where idProd = '$id'");
			echo '<script>alert("Ha Modificado Correctamente");</script>';
		}
		function cat_mod($id)
        {
            $cat_mod = $this->Ejecutar_Instruccion("Select * from productos where idProd = '$id'");
            return $cat_mod;
        }

		function tablaBuscar($result)
		{
			$tabla = "";

			foreach (@$result as $renglon)
			{
	         
	        $tabla.='<tr>';
	        $tabla.='<td style="border-color: white;border: 2px solid;">'.$renglon[0].'</td>';
	        $tabla.='<td style="border-color: white;border: 2px solid;">'.$renglon[1].'</td>';
	        $tabla.='<td style="border-color: white;border: 2px solid;">'.$renglon[2].'</td>';
	        $tabla.='<td style="border-color: white;border: 2px solid;">'.$renglon[3].'</td>';
	        $tabla.='<td style="border-color: white;border: 2px solid; background-color: red;"><input type="button" id="btnEliminar" name="btnEliminar" value="Eliminar" onclick="javascript: eliminar('.$renglon[0].');"></td>';
	        $tabla.='<td style="border-color: white;border: 2px solid; background-color: yellow;"><input type="button" id="btnModificar" name="btnModificar" value="Modificar" onclick="javascript: modificar('.$renglon[0].');"></td></tr>';

	        }
	        
	        return $tabla;
		}
	}

 ?>