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
    public $numero_de_acta;
    public $nombre_ministro;
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


	public function guardarBautismo($data)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare(" INSERT INTO `agenda_bautismo`(nombre_parroquia, fecha_bautismo, nombre_bautizado, fecha_nacimiento, nombre_hospitaldenacimiento, nombre_padre, nombre_madre, nombre_padrino, nombre_madrina, nombre_padrino3, codigo_folio, numero_de_acta, nombre_ministro, hijo) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

			$stm->execute(array(
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
									$data->numero_de_acta,
									$data->nombre_ministro,
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



	public function modificarBautismo($data)
	{
		try
		{
		$stm=$this->pdo->prepare("UPDATE agenda_bautismo SET nombre_parroquia = ?, fecha_bautismo = ?,
			nombre_bautizado = ?, fecha_nacimiento = ?, nombre_hospitaldenacimiento = ?, nombre_padre = ?,
			nombre_madre = ?, nombre_padrino = ?, nombre_madrina = ?, nombre_padrino3 = ?, codigo_folio = ?,
			numero_de_acta = ?, nombre_ministro = ?,  hijo = ? WHERE idbautismo = ?");

			$stm->execute(
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
							$data->numero_de_acta,
							$data->nombre_ministro,
							$data->hijo,
                            $data->idbautismo
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


	public function obtenerbautismo($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM agenda_bautismo WHERE idbautismo=?");

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
		$stm = $this->pdo
			          ->prepare("DELETE FROM agenda_bautismo WHERE idbautismo=?");

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




	public function obtenersacerdote1($nombre)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("CALL ps_obtener_sacerdote1(?)");


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




	public function listarbautismo()
	{
		try
		{

		$stm = $this->pdo->prepare("SELECT  b.idbautismo, p.nombre_parroquia, b.fecha_bautismo, b.nombre_bautizado, b.fecha_nacimiento, b.nombre_hospitaldenacimiento, b.nombre_padre, b.nombre_madre, b.nombre_padrino, b.nombre_madrina, b.nombre_padrino3, b.codigo_folio, b.numero_de_acta, s.nombre as nombre_ministro,  b.hijo  from agenda_bautismo
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

}

?>