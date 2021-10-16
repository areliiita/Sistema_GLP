<?php
require_once 'models/Reporte.php';
require_once 'models/Bautismo.php';

class ReporteController{

	public function CrearReporte(){
		require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
  		require_once 'views/administrador/crear_reporte.php';
        require_once 'cdn/footer.php';
	}


	public function ImprimirReporteDia(){
		$reporte = new Reporte();


		require_once 'views/administrador/Menu_imprimir.php';
		require_once 'views/administrador/imprimir_reportedia.php';
		require_once 'cdn/footer.php';
	}

	public function ConsultarReporteDia(){
		$reporte = new Reporte();

		require_once 'cdn/cdn.php';
		require_once 'views/administrador/Menu.php';
		require_once 'views/administrador/ver_reportedia.php';
		 require_once 'cdn/footer.php';
	}

	public function ConsultarReporteSemana(){
		$reporte = new Reporte();

		require_once 'cdn/cdn.php';
		require_once 'view/administrador/Menu.php';
		require_once 'view/administrador/ver_reportesemana.php';
		require_once 'cdn/footer.php';
	}

	public function ConsultarReporteMes(){
		$reporte = new Reporte();

	    require_once 'cdn/cdn.php';
		require_once 'view/administrador/Menu.php';
		require_once 'view/administrador/ver_reportemes.php';
		require_once 'cdn/footer.php';

	}

	public function ConsultarReporteAño(){
		$reporte = new Reporte();

		 require_once 'cdn/cdn.php';
		require_once 'view/administrador/Menu.php';
		require_once 'view/administrador/ver_reporteaño.php';
		require_once 'cdn/footer.php';

	}

	public function ConsultarReporteGeneral(){
		$reporte = new Reporte();

		require_once 'cdn/cdn.php';
		require_once 'view/administrador/Menu.php';
		require_once 'view/gerente/ver_reportegeneral.php';
		require_once 'cdn/footer.php';

	}

}

?>