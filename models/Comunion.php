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


	public function guardarComunion($data)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare(" INSERT INTO `agenda_primeracomunion`(nombre, apellidos, fecha_nacimiento, domicilio, nombre_padre, nombre_madre, parroquia_bautismo, fecha_bautismo, folio, fecha_confesion, fecha_comunion, catequista, celebrante_comunion) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

			$stm->execute(array(
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



	public function modificarComunion($data)
	{
		try
		{
		$stm=$this->pdo->prepare(" UPDATE `agenda_primeracomunion` SET nombre = ?, apellidos = ?, fecha_nacimiento = ?, domicilio = ?, nombre_padre = ?, nombre_madre = ?, parroquia_bautismo= ?, fecha_bautismo = ? ,folio= ?, fecha_confesion = ?, fecha_comunion = ?, catequista = ?, celebrante_comunion= ?  WHERE idprimeracomunion = ?");

			$stm->execute(
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


	public function obtenercomunion($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM agenda_primeracomunion WHERE idprimeracomunion=?");

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


public function eliminarComunion($id){
	try
	{
		$stm = $this->pdo
			          ->prepare("DELETE FROM agenda_primeracomunion WHERE idprimeracomunion=?");

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




public function buscarBautismos($id)
	{
		try{
			$stm = $this->pdo
			          ->prepare("CALL ps_buscar_sacerdote(?)");



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

}

?>