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
			$this->pdo = Conexion::Conectar();
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


	public function guardarConfirmacion($data)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare(" INSERT INTO `agenda_confirmacion`(nombre, apellidos, sexo, confirmado_otro_lugar, fecha_nacimiento, nombre_padre, nombre_madre, nombre_padrino, nombre_madrina, ministro, obispo, fecha_confirmacion, fecha_bautismo, parroquia_bautismo, diosesis, folio, edad, hijo) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

			$stm->execute(array(
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

                				));

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



	public function modificarConfirmacion($data)
	{
		try
		{
		$stm=$this->pdo->prepare("UPDATE agenda_confirmacion SET nombre = ?, apellidos = ?,
			sexo = ?, confirmado_otro_lugar = ?, fecha_nacimiento = ?, nombre_padre = ?,
			nombre_madre = ?, nombre_padrino = ?, nombre_madrina = ?, ministro = ?, obispo = ?, fecha_confirmacion = ?,
			fecha_bautismo = ?, parroquia_bautismo = ?,  diosesis = ?, folio = ?, edad = ?, hijo = ? WHERE idconfirmacion = ?");

			$stm->execute(
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
					));
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


	public function obtenerconfirmacion($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT  c.idconfirmacion, c.nombre,c.apellidos, c.sexo, c.confirmado_otro_lugar, c.fecha_nacimiento, c.nombre_padre, c.nombre_madre, c.nombre_padrino, c.nombre_madrina, s.nombre as ministro,  o.nombre as obispo, c.fecha_confirmacion, c.fecha_bautismo, p.nombre_parroquia as parroquia_bautismo, c.diosesis, c.folio, c.edad, c.hijo from agenda_confirmacion  as c
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

public function eliminarConfirmacion($id){
	try
	{
		$stm = $this->pdo
			          ->prepare("DELETE FROM agenda_confirmacion WHERE idconfirmacion=?");

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
			$stm = $this->pdo->prepare(" SELECT  c.idconfirmacion, c.nombre,c.apellidos, c.sexo, c.confirmado_otro_lugar as Lugar_Confirmacion, c.fecha_nacimiento, c.nombre_padre as papa, c.nombre_madre as mama, c.nombre_padrino as padrino, c.nombre_madrina as madrina, s.nombre as ministro, o.nombre as obispo,  c.fecha_confirmacion, c.fecha_bautismo, p.nombre_parroquia as parroquia_bautismo, c.diosesis, c.folio, c.edad, c.hijo from agenda_confirmacion  as c
			inner join sacerdote as s on s.idsacerdote = c.ministro
			inner join obispo as o on o.idobispo = c.obispo
            inner join parroquia as p on p.id_parroquia  = c.parroquia_bautismo WHERE month(fecha_confirmacion) = MONTH(CURDATE());");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function obtenerconfirmacionfecha($data)
	{
		try
		{
		$stm = $this->pdo->prepare('SELECT   from agenda_confirmacion  where fecha_confirmacion BETWEEN "' . $fechadesde .'" AND "' . $fechahasta. '" ORDER BY DESC;');
			$stm->execute(array(
								$data->$fechadesde,
								$data->$fechahasta
							));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

}

?>