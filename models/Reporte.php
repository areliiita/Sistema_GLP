<?php
class Reporte{
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtenerbautismodia()
	{
		try
		{

			$stm = $this->pdo->prepare("CALL ps_reporte_diactual()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtenerbautismosemana()
	{
		try
		{

			$stm = $this->pdo->prepare("CALL ps_factura_semanactual()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtenerbautismomes()
	{
		try
		{

			$stm = $this->pdo->prepare("CALL ps_factura_mesactual()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function obtenerbautismoaño()
	{
		try
		{

			$stm = $this->pdo->prepare("CALL ps_factura_añoactual()");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



	public function obtenerbautismogeneral()
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("CALL ps_factura_general()");


			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
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

	public function obtenerfacturafecha($data1, $data2)
	{
		try
		{

			$stm = $this->pdo->prepare("CALL ps_factura_fechas(?,?)");
			$stm->execute(array(
                                    $data1,
                                    $data2
                				));

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}





}

?>