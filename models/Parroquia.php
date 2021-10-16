<?php
class Parroquia
{
    public $id_parroquia;
    public $nombre_parroquia;
    public $direccion;
    public $departamento;
    public $email;
    public $telefono;
    public $encargado;

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



	public function guardarParroquia($data)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("INSERT INTO `parroquia`(nombre_parroquia, direccion, departamento, email, telefono, encargado) VALUES (?,?,?,?,?,?)");


			$stm->execute(array(
                                    $data->nombre_parroquia,
                                    $data->direccion,
                                    $data->departamento,
                                    $data->email,
                                    $data->telefono,
                                    $data->encargado
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



	public function modificarParroquia($data)
	{
		try
		{
			$stm=$this->pdo->prepare("UPDATE parroquia SET nombre_parroquia = ?, direccion = ?, departamento = ?, email = ?, telefono = ?, encargado = ? WHERE id_parroquia = ?");

			$stm->execute(
				    array(
                            $data->nombre_parroquia,
                                    $data->direccion,
                                    $data->departamento,
                                    $data->email,
                                    $data->telefono,
                                    $data->encargado,
                                    $data->id_parroquia
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



	public function obtenerparroquia($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM  parroquia WHERE id_parroquia=?");


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

public function eliminarparroquia($id){
	try
	{
		$stm = $this->pdo
			          ->prepare("delete from parroquia where id_parroquia=?");

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



public function buscarParroquia($id)
	{
		try{
			$stm = $this->pdo
			          ->prepare("CALL ps_buscar_parroquia(?)");



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




    public function obtenerparroquia1($nombre_parroquia)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("CALL ps_obtener_parroquia1(?)");


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


	public function listarparroquia()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT * from parroquia");
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