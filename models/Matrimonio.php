<?php
class Matrimonio
{
    public $idmatrimonio;
    public $fecha_matrimonio;
    public $ministro_matrimonio;
    public $jusrisdiccion;
    public $folio;
    public $padre_novio;
    public $madre_novio;
    public $testigo1_novio;
    public $testigo2_novio;
    public $nombrecompleto_novio;
    public $padre_novia;
    public $madre_novia;
    public $testigo1_novia;
    public $testigo2_novia;
    public $nombrecompleto_novia;
    public $parroquia;

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


	public function guardarMatrimonio($data)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare(" INSERT INTO `agenda_matrimonio`(`fecha_matrimonio`, `ministro_matrimonio`, `jurisdiccion`, `folio`, `padre_novio`, `madre_novio`, `testigo1_novio`, `testigo2_novio`, `nombrecompleto_novio`, `padre_novia`, `madre_novia`, `testigo1_novia`, `testigo2_novia`, `nombrecompleto_novia`, `parroquia`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

			$stm->execute(array(
                                    $data->fecha_matrimonio,
                                    $data->ministro_matrimonio,
                                    $data->jusrisdiccion,
                                    $data->folio,
                                    $data->padre_novio,
                                    $data->madre_novio,
									$data->testigo1_novio,
									$data->testigo2_novio,
									$data->nombrecompleto_novio,
									$data->padre_novia,
                                    $data->madre_novia,
									$data->testigo1_novia,
									$data->testigo2_novia,
									$data->nombrecompleto_novia,
									$data->parroquia,

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



	public function modificarMatrimonio($data)
	{
		try
		{
		$stm=$this->pdo->prepare("UPDATE `agenda_matrimonio` SET `fecha_matrimonio`= ?,`ministro_matrimonio`= ?,`jurisdiccion`= ?,`folio`= ?,`padre_novio`= ?,`madre_novio`= ?,`testigo1_novio`= ?,`testigo2_novio`= ?,`nombrecompleto_novio`= ?,`padre_novia`= ?,`madre_novia`= ?,`testigo1_novia`= ?,`testigo2_novia`= ?,`nombrecompleto_novia`= ?,`parroquia`= ?  WHERE idmatrimonio= ?");

			$stm->execute(
				    array(
				    	 $data->fecha_matrimonio,
                          $data->ministro_matrimonio,
                         $data->jusrisdiccion,
                         $data->folio,
                         $data->padre_novio,
                         $data->madre_novio,
						 $data->testigo1_novio,
						$data->testigo2_novio,
						$data->nombrecompleto_novio,
						$data->padre_novia,
                        $data->madre_novia,
						$data->testigo1_novia,
						$data->testigo2_novia,
						$data->nombrecompleto_novia,
						$data->parroquia,
                        $data->idmatrimonio
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


	public function obtenermatrimonio($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM agenda_matrimonio WHERE idmatrimonio=?");

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


public function eliminarMatrimonio($id){
	try
	{
		$stm = $this->pdo
			          ->prepare("DELETE FROM agenda_matrimonio WHERE idmatrimonio=?");

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






	public function listarmatrimonio()
	{
		try
		{

		$stm = $this->pdo->prepare("SELECT m.idmatrimonio, m.fecha_matrimonio, s.nombre as ministro_matrimonio, m.jurisdiccion, m.folio, m.padre_novio, m.madre_novio, m.testigo1_novio, m.testigo2_novio, m.nombrecompleto_novio, m.padre_novia, m.madre_novia, m.testigo1_novia, m.testigo2_novia, m.nombrecompleto_novia, p.nombre_parroquia as parroquia FROM agenda_matrimonio as m
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

}

?>