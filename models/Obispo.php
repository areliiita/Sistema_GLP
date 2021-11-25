<?php
class Obispo
{
    public $idobispo;
    public $nombre;
    public $apellido;
    public $cargo;
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


public function guardarobispo($data)
	{
		try
		{
			$sql = "INSERT INTO obispo (nombre, apellido, cargo, nacionalidad, periodo_desde, periodo_hasta) VALUES (?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                                    $data->nombre,
                                    $data->apellido,
                                    $data->cargo,
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



	public function modificarobispo($data)
	{
		try
		{
			$sql = "UPDATE obispo SET
			            nombre = ?,
			            apellido = ?,
			            cargo = ?,
			            nacionalidad = ?,
			            periodo_desde = ?,
			            periodo_hasta = ?
			            WHERE idobispo = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                            $data->nombre,
                            $data->apellido,
                            $data->cargo,
                            $data->nacionalidad,
                            $data->periodo_desde,
                            $data->periodo_hasta,
                            $data->idobispo
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



	public function obtenerobispo($id)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM obispo WHERE idobispo=?");

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


public function eliminarobispo($id){
	try
	{
		$sql = "DELETE  from obispo where idobispo = $id";

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



	public function listarObispo()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * from obispo");
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