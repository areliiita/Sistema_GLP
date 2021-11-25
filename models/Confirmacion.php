<?php
class confirmacion
{
    public $idconfirmacion;
    public $nombre;
    public $apellidos;
    public $sexo;
    public $confirmado_otro_lugar;
    public $fecha_nacimiento;
    public $nombre_padre;
    public $nombre_madre;
    public $nombre_padrino;
    public $nombre_madrina;
    public $ministro;
    public $obispo;
    public $fecha_confirmacion;
    public $fecha_bautismo;
    public $parroquia_bautismo;
    public $diosesis;
	public $folio;
	public $edad;
	public $hijo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::Conectar("SET @@lc_time_names = _locale;");
		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}



	public function guardarconfirmacion($data)
	{
		try
		{
			$sql = " INSERT INTO agenda_confirmacion (nombre, apellidos, sexo, confirmado_otro_lugar, fecha_nacimiento, nombre_padre, nombre_madre, nombre_padrino, nombre_madrina, ministro, obispo, fecha_confirmacion, fecha_bautismo, parroquia_bautismo, diosesis, folio, edad, hijo) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                                    $data->nombre,
                                    $data->apellidos,
                                    $data->sexo,
                                    $data->confirmado_otro_lugar,
                                    $data->fecha_nacimiento,
                                    $data->nombre_padre,
                                    $data->nombre_madre,
									$data->nombre_padrino,
									$data->nombre_madrina,
									$data->ministro,
									$data->obispo,
									$data->fecha_confirmacion,
									$data->fecha_bautismo,
									$data->parroquia_bautismo,
                                    $data->diosesis,
									$data->folio,
									$data->edad,
									$data->hijo

                				)
                		);

		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}


	public function modificarconfirmacion($data)
	{
		try
		{
		$sql = "UPDATE agenda_confirmacion SET
		            nombre = ?, apellidos = ?,
		            sexo = ?,
		            confirmado_otro_lugar = ?,
		            fecha_nacimiento = ?,
		            nombre_padre = ?,
		            nombre_madre = ?,
		            nombre_padrino = ?,
		            nombre_madrina = ?,
		            ministro = ?,
		            obispo = ?,
		            fecha_confirmacion = ?,
			        fecha_bautismo = ?,
		        	parroquia_bautismo = ?,
		        	diosesis = ?,
		        	folio = ?,
		        	edad = ?,
		        	hijo = ?
		        	WHERE idconfirmacion = ?";

		$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->nombre,
						$data->apellidos,
						$data->sexo,
						$data->confirmado_otro_lugar,
						$data->fecha_nacimiento,
						$data->nombre_padre,
						$data->nombre_madre,
						$data->nombre_padrino,
						$data->nombre_madrina,
						$data->ministro,
						$data->obispo,
						$data->fecha_confirmacion,
						$data->fecha_bautismo,
						$data->parroquia_bautismo,
						$data->diosesis,
						$data->folio,
						$data->edad,
						$data->hijo,
						$data->idconfirmacion
					)

			);

		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}



	public function obtenerconfirmacion($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT  c.idconfirmacion, c.nombre,c.apellidos, c.sexo, c.confirmado_otro_lugar, c.fecha_nacimiento, c.nombre_padre, c.nombre_madre, c.nombre_padrino, c.nombre_madrina, s.nombre as ministro,  o.nombre as obispo, c.fecha_confirmacion AS fecha_confirmacion, c.fecha_bautismo, p.nombre_parroquia as parroquia_bautismo, c.diosesis, c.folio, c.edad, c.hijo from agenda_confirmacion  as c
			inner join sacerdote as s on s.idsacerdote = c.ministro
			inner join obispo as o on o.idobispo = c.obispo
            inner join parroquia as p on p.id_parroquia  = c.parroquia_bautismo  WHERE idconfirmacion=?");


			$stm->execute(array($id));

			return $stm->fetch(PDO::FETCH_OBJ);
		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}


	public function obtenerconfirmacion1($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT  c.idconfirmacion, c.nombre,c.apellidos, c.sexo, c.confirmado_otro_lugar, c.fecha_nacimiento, c.nombre_padre, c.nombre_madre, c.nombre_padrino, c.nombre_madrina, s.nombre as ministro,  concat(o.nombre, o.apellido) as obispo, DATE_FORMAT(c.fecha_confirmacion, '%W' ' ' '%d' ' del mes de  ' '%M' ' del año ' '%Y', 'es_ES') AS fecha_confirmacion, c.fecha_bautismo, p.nombre_parroquia as parroquia_bautismo, c.diosesis, c.folio, c.edad, c.hijo from agenda_confirmacion  as c
			inner join sacerdote as s on s.idsacerdote = c.ministro
			inner join obispo as o on o.idobispo = c.obispo
            inner join parroquia as p on p.id_parroquia  = c.parroquia_bautismo  WHERE idconfirmacion=?");


			$stm->execute(array($id));

			return $stm->fetch(PDO::FETCH_OBJ);
		}
        catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}
	}

public function eliminarconfirmacion($id){
	try
	{
		$sql = "DELETE FROM agenda_confirmacion WHERE idconfirmacion = $id";

			$this->pdo->prepare($sql)
			     ->execute();
	}
	 catch (Throwable $t)//php7
        {
			die($t->getMessage());
        }
		catch(Exception $e)//php5
		{
			die($e->getMessage());
		}

}



	public function listarconfirmacion()
	{
		try
		{

		$stm = $this->pdo->prepare("SELECT  c.idconfirmacion, c.nombre,c.apellidos, c.sexo, c.confirmado_otro_lugar, c.fecha_nacimiento, c.nombre_padre, c.nombre_madre, c.nombre_padrino, c.nombre_madrina, s.nombre as ministro,  o.nombre as obispo, c.fecha_confirmacion, c.fecha_bautismo, p.nombre_parroquia as parroquia_bautismo, c.diosesis, c.folio, c.edad, c.hijo from agenda_confirmacion  as c
			inner join sacerdote as s on s.idsacerdote = c.ministro
			inner join obispo as o on o.idobispo = c.obispo
            inner join parroquia as p on p.id_parroquia  = c.parroquia_bautismo;");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



	public function obtenerconfirmacionmes()
	{
		try
		{
			$stm = $this->pdo->prepare(" SELECT  count(idconfirmacion) as total, DATE_FORMAT(fecha_confirmacion, '%M', 'es_ES') as mes, YEAR(fecha_confirmacion) AS año   from agenda_confirmacion WHERE month(fecha_confirmacion) = MONTH(CURDATE());");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

}

?>