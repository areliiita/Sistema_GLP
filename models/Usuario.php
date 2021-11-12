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
			          ->prepare("SELECT * FROM usuario WHERE email = ? AND clave = MD5(?)");

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
			$sql="INSERT INTO usuario(nombre, apellido, telefono, email, clave, rol)  VALUES (?, ?, ?, ?, md5(?), ?)";
			$this->pdo->prepare($sql)
			->execute(array(
								$data->nombre,
								$data->apellido,
								$data->telefono,
								$data->email,
								$data->clave,
								$data->rol
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


	public function modificarUsuario($data)
	{
		try
		{
			if($this->validateEmptyPassword($data->clave)){
				$sql = "UPDATE usuario SET
			            nombre= ?,
			            apellido = ?,
			            telefono = ?,
			            email = ?,
			            clave = MD5(?),
			            rol = ?
			            WHERE idusuario = ?";
					$this->pdo->prepare($sql)
					->execute(
					   array(
							   $data->nombre,
							   $data->apellido,
							   $data->telefono,
							   $data->email,
							   $data->clave,
							   $data->rol,
							   $data->idusuario
					   )
				   );
			}else{
				$sql = "UPDATE usuario SET
							nombre= ?,
							apellido = ?,
							telefono = ?,
							email = ?,
							rol = ?
							WHERE idusuario = ?";
				$this->pdo->prepare($sql)
				->execute(
				   array(
						   $data->nombre,
						   $data->apellido,
						   $data->telefono,
						   $data->email,
						   $data->rol,
						   $data->idusuario
				   )
			   );
			}



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

	public function validateEmptyPassword($password){
		if($password != ""){
			return true;
		}else return false;

	}


	public function obtenerusuario($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT idusuario,nombre,apellido,email,clave,telefono,rol FROM usuario WHERE idusuario=?");


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

public function eliminarUsuario($id){
	try
	{
		$sql = "DELETE  from usuario where idusuario = $id";

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



	public function listarusuario()
	{
		try
		{

			$stm = $this->pdo->prepare("SELECT idusuario,nombre, apellido, telefono, email,rol from usuario");
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