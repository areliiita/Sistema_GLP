<?php
class Comunion
{
    public $idprimeracomunion;
    public $nombre;
     public $apellidos;
    public $fecha_nacimiento;
    public $domicilio;
    public $nombre_padre;
    public $nombre_madre;
    public $parroquia_bautismo;
    public $fecha_bautismo;
    public $folio;
    public $fecha_confesion;
    public $fecha_comunion;
    public $catequista;
    public $celebrante_comunion;

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

public function guardarcomunion($data)
	{
		try
		{
			$sql = " INSERT INTO agenda_primeracomunion (nombre, apellidos, fecha_nacimiento, domicilio, nombre_padre, nombre_madre, parroquia_bautismo, fecha_bautismo, folio, fecha_confesion, fecha_comunion, catequista, celebrante_comunion) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

	       	$this->pdo->prepare($sql)
		     ->execute(
				array(
                                    $data->nombre,
                                    $data->apellidos,
                                    $data->fecha_nacimiento,
                                    $data->domicilio,
                                    $data->nombre_padre,
                                    $data->nombre_madre,
									$data->parroquia_bautismo,
									$data->fecha_bautismo,
									$data->folio,
									$data->fecha_confesion,
									$data->fecha_comunion,
									$data->catequista,
                                    $data->celebrante_comunion
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




	public function modificarcomunion($data)
	{
		try
		{
		$sql =  "UPDATE agenda_primeracomunion SET
		              nombre = ?,
		              apellidos = ?,
		              fecha_nacimiento = ?,
		              domicilio = ?,
		              nombre_padre = ?,
		              nombre_madre = ?,
		              parroquia_bautismo= ?,
		              fecha_bautismo = ?,
		              folio= ?,
		              fecha_confesion = ?,
		              fecha_comunion = ?,
		              catequista = ?,
		              celebrante_comunion= ?
		              WHERE idprimeracomunion = ?";

		$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    		        $data->nombre,
                                    $data->apellidos,
                                    $data->fecha_nacimiento,
                                    $data->domicilio,
                                    $data->nombre_padre,
                                    $data->nombre_madre,
									$data->parroquia_bautismo,
									$data->fecha_bautismo,
									$data->folio,
									$data->fecha_confesion,
									$data->fecha_comunion,
									$data->catequista,
                                    $data->celebrante_comunion,
                                    $data->idprimeracomunion
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







	public function obtenercomunion($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT pc.idprimeracomunion, pc.nombre, pc.apellidos, pc.fecha_nacimiento, pc.domicilio, pc.nombre_padre, pc.nombre_madre, p.nombre_parroquia as parroquia_bautismo, pc.fecha_bautismo, pc.folio, pc.fecha_confesion, pc.fecha_comunion, pc.catequista, s.nombre as celebrante_comunion  FROM agenda_primeracomunion as pc
			 inner join sacerdote as s on s.idsacerdote = pc.celebrante_comunion
            inner join parroquia as p on p.id_parroquia  = pc.parroquia_bautismo WHERE idprimeracomunion= ?");


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

	public function obtenercomunion1($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT pc.idprimeracomunion, pc.nombre, pc.apellidos, DATE_FORMAT(pc.fecha_nacimiento,'%W' ' ' '%d' ' de ' '%M'  ' del ' '%Y', 'es_ES') AS fecha_nacimiento, pc.domicilio, pc.nombre_padre, pc.nombre_madre, p.nombre_parroquia as parroquia_bautismo, pc.fecha_bautismo, pc.folio, pc.fecha_confesion, DATE_FORMAT(pc.fecha_comunion, '%W' ' ' '%d' ' de ' '%M'  ' del ' '%Y', 'es_ES') as fecha_comunion, pc.catequista, s.nombre as celebrante_comunion  FROM agenda_primeracomunion as pc
			 inner join sacerdote as s on s.idsacerdote = pc.celebrante_comunion
            inner join parroquia as p on p.id_parroquia  = pc.parroquia_bautismo WHERE idprimeracomunion= ?");


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

public function eliminarcomunion($id)
{
	try
	{
		$sql = "DELETE FROM agenda_primeracomunion WHERE idprimeracomunion = $id";

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

	public function listarcomunion()
	{
		try
		{

		$stm = $this->pdo->prepare("SELECT pc.idprimeracomunion, pc.nombre, pc.apellidos, pc.fecha_nacimiento, pc.domicilio, pc.nombre_padre, pc.nombre_madre, p.nombre_parroquia as parroquia_bautismo, pc.fecha_bautismo, pc.folio, pc.fecha_confesion, pc.fecha_comunion, pc.catequista, s.nombre as celebrante_comunion  FROM agenda_primeracomunion as pc
			 inner join sacerdote as s on s.idsacerdote = pc.celebrante_comunion
            inner join parroquia as p on p.id_parroquia  = pc.parroquia_bautismo;");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function obtenercomunionmes()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT count(idprimeracomunion) as total, DATE_FORMAT(fecha_comunion, '%M', 'es_ES') as mes, YEAR(fecha_comunion) AS año   from agenda_primeracomunion WHERE month(fecha_comunion) = MONTH(CURDATE());");
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