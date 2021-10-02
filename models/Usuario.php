<?php
class Usuario
{
    public $idusuario;
    public $nombre;
    public $apellido;
    public $telefono;
    public $email;
    public $clave;
    public $rol;

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

	public function Entrar($email, $contrasena)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("call ps_entrar(?,?)");

			$stm->execute(array($email, $contrasena));

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




	public function guardarUsuario($data)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("call ps_guardar_usuario(?, ?, ?, ?, ?, ?)");


			$stm->execute(array(
                                    $data->nombre,
                                    $data->apellido,
                                    $data->telefono,
                                    $data->email,
                                    $data->clave,
                                    $data->rol
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



	public function modificarUsuario($data)
	{
		try
		{
			$stm=$this->pdo->prepare("call ps_modificar_usuario(?, ?, ?, ?, ?, ?, ?)");

			$stm->execute(
				    array(
                            $data->nombre,
                            $data->apellido,
                            $data->telefono,
                            $data->email,
                            $data->clave,
                            $data->rol,
                            $data->idusuario
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



	public function obtenerusuario($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("CALL ps_obtener_usuario(?)");


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

public function eliminarusuario($id){
	try
	{
		$stm = $this->pdo
			          ->prepare("delete from usuario where idusuario=?");

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



	public function listarusuario()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT idusuario,nombre, apellido, telefono, email, rol from usuario");
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