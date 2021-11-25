<?php
class Bautismo
{
    public $idbautismo;
    public $nombre_parroquia;
    public $fecha_bautismo;
    public $nombre_bautizado;
    public $fecha_nacimiento;
    public $nombre_hospitaldenacimiento;
    public $nombre_padre;
    public $nombre_madre;
    public $nombre_padrino;
    public $nombre_madrina;
    public $nombre_padrino3;
    public $codigo_folio;
    public $nombre_ministro;
    public $hijo;
    public $total;


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

public function guardarbautismo($data)
	{
		try
		{
			$sql = " INSERT INTO agenda_bautismo (nombre_parroquia, fecha_bautismo, nombre_bautizado, fecha_nacimiento, nombre_hospitaldenacimiento, nombre_padre, nombre_madre, nombre_padrino, nombre_madrina, nombre_padrino3, codigo_folio, nombre_ministro, hijo) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                                    $data->nombre_parroquia,
                                    $data->fecha_bautismo,
                                    $data->nombre_bautizado,
                                    $data->fecha_nacimiento,
                                    $data->nombre_hospitaldenacimiento,
                                    $data->nombre_padre,
                                    $data->nombre_madre,
									$data->nombre_padrino,
									$data->nombre_madrina,
									$data->nombre_padrino3,
									$data->codigo_folio,
									$data->nombre_ministro,
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

	public function modificarbautismo($data)
	{
		try
		{
		$sql = "UPDATE agenda_bautismo SET
		            nombre_parroquia = ?,
		            fecha_bautismo = ?,
		            nombre_bautizado = ?,
		            fecha_nacimiento = ?,
		            nombre_hospitaldenacimiento = ?,
		            nombre_padre = ?,
		            nombre_madre = ?,
		            nombre_padrino = ?,
		            nombre_madrina = ?,
		            nombre_padrino3 = ?,
		            codigo_folio = ?,
			        nombre_ministro = ?,
			        hijo = ?
			        WHERE idbautismo = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                            $data->nombre_parroquia,
                            $data->fecha_bautismo,
                            $data->nombre_bautizado,
                            $data->fecha_nacimiento,
                            $data->nombre_hospitaldenacimiento,
                            $data->nombre_padre,
                            $data->nombre_madre,
                            $data->nombre_padrino,
							$data->nombre_madrina,
							$data->nombre_padrino3,
							$data->codigo_folio,
							$data->nombre_ministro,
							$data->hijo,
                            $data->idbautismo
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



	public function obtenerbautismo1($id)
	{
		try
		{
			$stm = $this->pdo  ->prepare("SELECT  b.idbautismo, p.nombre_parroquia, date_format(b.fecha_bautismo, '%W' ' ' '%d' ' de ' '%M'  ' del ' '%Y', 'es_ES') AS fecha_bautismo, UPPER(b.nombre_bautizado) AS nombre_bautizado, nombre_bautizado as nombre_b, DATE_FORMAT(b.fecha_nacimiento,  '%W' ' ' '%d' ' de ' '%M' ' del ' '%Y', 'es_ES') AS fecha_nacimiento,  b.nombre_hospitaldenacimiento, b.nombre_padre, b.nombre_madre, b.nombre_padrino, b.nombre_madrina, b.nombre_padrino3, b.codigo_folio, s.nombre as nombre_ministro,  b.hijo  from agenda_bautismo
			as b inner join sacerdote as s on s.idsacerdote = b.nombre_ministro
            inner join parroquia as p on p.id_parroquia  = b.nombre_parroquia WHERE idbautismo= ?");

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

	public function obtenerbautismo($id)
	{
		try
		{
			$stm = $this->pdo  ->prepare("SELECT  b.idbautismo, p.nombre_parroquia, b.fecha_bautismo, b.nombre_bautizado, b.fecha_nacimiento,  b.nombre_hospitaldenacimiento, b.nombre_padre, b.nombre_madre, b.nombre_padrino, b.nombre_madrina, b.nombre_padrino3, b.codigo_folio, s.nombre as nombre_ministro,  b.hijo  from agenda_bautismo
			as b inner join sacerdote as s on s.idsacerdote = b.nombre_ministro
            inner join parroquia as p on p.id_parroquia  = b.nombre_parroquia WHERE idbautismo= ?");


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

	public function eliminarbautismo($id){
	try
	{
		$sql = "DELETE FROM agenda_bautismo WHERE idbautismo = $id";

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


	public function listarbautismo()
	{
		try
		{

		$stm = $this->pdo->prepare("SELECT  b.idbautismo, p.nombre_parroquia, b.fecha_bautismo, b.nombre_bautizado, b.fecha_nacimiento, b.nombre_hospitaldenacimiento, b.nombre_padre, b.nombre_madre, b.nombre_padrino, b.nombre_madrina, b.nombre_padrino3, b.codigo_folio,
		    s.nombre as nombre_ministro,  b.hijo  from agenda_bautismo
			as b inner join sacerdote as s on s.idsacerdote = b.nombre_ministro
            inner join parroquia as p on p.id_parroquia  = b.nombre_parroquia;");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



	public function obtenerbautismomes()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT count(idbautismo) as total, DATE_FORMAT(fecha_bautismo, '%M', 'es_ES') as mes, YEAR(fecha_bautismo) AS año   from agenda_bautismo WHERE month(fecha_bautismo) = MONTH(CURDATE());");
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