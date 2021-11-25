<?php
class Matrimonio
{
    public $idmatrimonio;
    public $hora_matrimonio;
    public $fecha_matrimonio;
    public $ministro_matrimonio;
    public $jusrisdiccion;
    public $diocesis;
    public $folio;
    public $padre_novio;
    public $madre_novio;
    public $nombrecompleto_novio;
    public $padre_novia;
    public $madre_novia;
    public $nombrecompleto_novia;
    public $parroquia;
    public $padrino_boda;
    public $madrina_boda;

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



	public function guardarmatrimonio($data)
	{
		try
		{
			$sql = " INSERT INTO agenda_matrimonio (`hora_matrimonio`,`fecha_matrimonio`, `ministro_matrimonio`, `jurisdiccion`, `diocesis`, `folio`, `padre_novio`, `madre_novio`,`nombrecompleto_novio`, `padre_novia`, `madre_novia`, `nombrecompleto_novia`, `parroquia`,  `padrino_boda`,  `madrina_boda`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
									$data->hora_matrimonio,
                                    $data->fecha_matrimonio,
                                    $data->ministro_matrimonio,
                                    $data->jusrisdiccion,
                                    $data->diocesis,
                                    $data->folio,
                                    $data->padre_novio,
                                    $data->madre_novio,
									$data->nombrecompleto_novio,
									$data->padre_novia,
                                    $data->madre_novia,
									$data->nombrecompleto_novia,
									$data->parroquia,
									$data->padrino_boda,
									$data->madrina_boda,
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




	public function modificarmatrimonio($data)
	{
		try
		{
		$sql = "UPDATE agenda_matrimonio SET `hora_matrimonio`= ?, `fecha_matrimonio`= ?,`ministro_matrimonio`= ?,`jurisdiccion`= ?, `diocesis`= ?,`folio`= ?,`padre_novio`= ?,`madre_novio`= ?,`nombrecompleto_novio`= ?,`padre_novia`= ?,`madre_novia`= ?,`nombrecompleto_novia`= ?,`parroquia`= ?,  `padrino_boda`= ?, `madrina_boda`= ?  WHERE idmatrimonio= ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	 $data->hora_matrimonio,
				    	 $data->fecha_matrimonio,
                         $data->ministro_matrimonio,
                         $data->jusrisdiccion,
                         $data->diocesis,
                         $data->folio,
                         $data->padre_novio,
                         $data->madre_novio,
					   	 $data->nombrecompleto_novio,
					     $data->padre_novia,
                         $data->madre_novia,
						 $data->nombrecompleto_novia,
						 $data->parroquia,
						 $data->padrino_boda,
						 $data->madrina_boda,
                         $data->idmatrimonio
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



	public function obtenermatrimonio($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT m.idmatrimonio, m.hora_matrimonio, m.fecha_matrimonio, s.nombre as ministro_matrimonio, m.jurisdiccion, m.diocesis, m.folio, m.padre_novio, m.madre_novio, m.nombrecompleto_novio, m.padre_novia, m.madre_novia,  m.nombrecompleto_novia, p.nombre_parroquia as parroquia, m.padrino_boda, m.madrina_boda FROM agenda_matrimonio as m
			 inner join sacerdote as s on s.idsacerdote = m.ministro_matrimonio
            inner join parroquia as p on p.id_parroquia  = m.parroquia  WHERE idmatrimonio=?");

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

	public function obtenermatrimonio1($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT m.idmatrimonio, m.hora_matrimonio, DATE_FORMAT(m.fecha_matrimonio, '%W' ' ' '%d' ' del mes de ' '%M'  ' del año ' '%Y', 'es_ES') AS fecha_matrimonio, s.nombre as ministro_matrimonio, m.jurisdiccion, m.diocesis, m.folio, m.padre_novio, m.madre_novio, m.nombrecompleto_novio, m.padre_novia, m.madre_novia,  m.nombrecompleto_novia, p.nombre_parroquia as parroquia, m.padrino_boda, m.madrina_boda FROM agenda_matrimonio as m
			 inner join sacerdote as s on s.idsacerdote = m.ministro_matrimonio
            inner join parroquia as p on p.id_parroquia  = m.parroquia  WHERE idmatrimonio=?");

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


public function eliminarmatrimonio($id){
	try
	{
		$sql = "DELETE FROM agenda_matrimonio WHERE idmatrimonio = $id";

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


	public function listarmatrimonio()
	{
		try
		{

		$stm = $this->pdo->prepare("SELECT m.idmatrimonio, m.hora_matrimonio, m.fecha_matrimonio, s.nombre as ministro_matrimonio, m.jurisdiccion, m.diocesis, m.folio, m.padre_novio, m.madre_novio, m.nombrecompleto_novio, m.padre_novia, m.madre_novia,  m.nombrecompleto_novia, p.nombre_parroquia as parroquia, m.padrino_boda, m.madrina_boda FROM agenda_matrimonio as m
			 inner join sacerdote as s on s.idsacerdote = m.ministro_matrimonio
            inner join parroquia as p on p.id_parroquia  = m.parroquia;");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



	public function obtenermatrimoniomes()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT count(idmatrimonio) as total, DATE_FORMAT(fecha_matrimonio, '%M', 'es_ES') as mes, YEAR(fecha_matrimonio) AS año   from agenda_matrimonio WHERE month(fecha_matrimonio) = MONTH(CURDATE());");
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