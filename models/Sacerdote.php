<?php
class Sacerdote
{
    public $idsacerdote;
    public $nombre;
    public $apellido;
    public $cargo;
    public $fecha_nacimiento;
    public $dui;
    public $nacionalidad;
    public $periodo_desde;
    public $periodo_hasta;

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


	public function guardarSacerdote($data)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("INSERT INTO `sacerdote`(nombre, apellido, cargo, fecha_nacimiento, dui, nacionalidad, periodo_desde, periodo_hasta) VALUES (?,?,?,?,?,?,?,?)");
			$stm->execute(array(
                                    $data->nombre,
                                    $data->apellido,
                                    $data->cargo,
                                    $data->fecha_nacimiento,
                                    $data->dui,
                                    $data->nacionalidad,
                                    $data->periodo_desde,
                                    $data->periodo_hasta
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



	public function modificarsacerdote($data)
	{
		try
		{
			$sql = "UPDATE sacerdote SET
			            nombre = ?,
			            apellido = ?,
			            cargo = ?,
			            fecha_nacimiento = ?,
			            dui = ?,
			            nacionalidad = ?,
			            periodo_desde = ?,
			            periodo_hasta = ?
			            WHERE idsacerdote = ?";

		$this->pdo->prepare($sql)
			     ->execute(
				    array(
                            $data->nombre,
                            $data->apellido,
                            $data->cargo,
                            $data->fecha_nacimiento,
                            $data->dui,
                            $data->nacionalidad,
                            $data->periodo_desde,
                            $data->periodo_hasta,
                            $data->idsacerdote
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






	public function obtenersacerdote($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM sacerdote WHERE idsacerdote=?");

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

public function eliminarsacerdote($id){
	try
	{
		$sql = "DELETE  from sacerdote where idsacerdote = $id";
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




	public function listarsacerdote()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * from sacerdote");
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