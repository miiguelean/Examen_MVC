<?PHP

class BD_PDO
{
	function Ejecutar_Instruccion($instruccion_sql)
	{
		$host = "localhost";
		$usr  = "id19962689_tienda";
		$db   = "id19962689_aiot";
		$pwd = "ABCabc123***";
		try {
				$conexion = new PDO("mysql:host=$host;dbname=$db;",$usr,$pwd);
		       //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
		catch(PDOException $e)
			{
		      echo "Failed to get DB handle: " . $e->getMessage();
		      exit;    
		    }
		 
		 // Asignando una instruccion sql

		 $query=$conexion->prepare($instruccion_sql);
		if(!$query)
		{
			return "Error al mostrar";
		}
		else
		{
			$query->execute();
			while ($result = $query->fetch())
			    {
			        $rows[] = $result;
			    }	
		}
		return @$rows;
	}
}
?>