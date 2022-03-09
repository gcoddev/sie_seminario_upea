<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_estudiante extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->model(['Modelo_estudiante','Modelo_fuctions']);
		if (!$this->session->userdata('is_logued_in')) {
			//redirect(site_url(Hasher::make(1))); 
		}
		date_default_timezone_set('America/La_Paz');
		$this->load->helper('funciones_helper');
	}
	
	public function index()
	{
	//	redirect(site_url(Hasher::make(1))); 
	}
	public function admin_inscripciones(){
		$dato['menu']="2";
		$dato['contenido']="vista_estudiante/admin_inscripciones";
		
		$this->load->view('plantilla_a',$dato);
	}
	public function admin_cursos(){
	
		$this->data['title_menu'] = 'Inicio';
		$this->data['title_menu1'] = 'primero';
		$this->data['title_menu2'] = 'segundo';
		//$this->data['taba1'] = $this->Modelo_estudiante->listar_estudiante_cursos();
		$this->output->set_template('admin/plantilla_raiz', $this->data);
		//$this->_render_page('backend' . DIRECTORY_SEPARATOR . 'admin', $this->data);
		$this->load->view('admin/seminarios', $this->data);
	}
	
	public function guardar_nuevo_inscripcion_estudiante(){
		if (($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/png")
			|| ($_FILES["file"]["type"] == "image/gif")) {
			if (move_uploaded_file($_FILES["file"]["tmp_name"], "assets/file_usuario/".$_FILES['file']['name'])) {
				
				$obj=array(
					'nombre'=>$this->input->post('tema'),
					'descripcion'=>$this->input->post('detalle'),
					'expositor'=>$this->input->post('ponente'),
					'fecha_inicio'=>$this->input->post('fecha'),
					'fecha_fin_insc'=>$this->input->post('fecha_fin_insc'),
					'imagen'=>"assets/file_usuario/".$_FILES['file']['name'],
					'hora'=>$this->input->post('hora'),
					'estado'=>'1',
			
					'ins_codigo'=>date('YmdHs'),
				);
				$this->Modelo_estudiante->insertar_tabla_sys('capacitacion',$obj);

				//more code here...
				
			} else {
				echo 'Negado...';
			}
		} else {
			echo 'Formato invalido';
		}

		
	}
	public function editar_nuevo($obj){
		$mues=$this->Modelo_estudiante->mostrar_n($obj);
		echo json_encode($mues);
		
	}
	public function modificar_nuevo_inscripcion_estudiante($id_capacitacion){
		
		if (($_FILES["file"]["type"] == "image/pjpeg")
			|| ($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/png")
			
			|| ($_FILES["file"]["type"] == "image/jpg")
			|| ($_FILES["file"]["type"] == "image/gif")) {
			if (move_uploaded_file($_FILES["file"]["tmp_name"], "assets/file_usuario/".$_FILES['file']['name'])) {
				

					//$id_capacitacion=$this->input->post('id_capacitacion');
					$nombre=$this->input->post('tema');
					$descripcion=$this->input->post('descripcion');
					$expositor=$this->input->post('expositor');
					$fecha_inicio=$this->input->post('fecha_inicio');
					$fecha_fin_insc=$this->input->post('fecha_fin_insc');
					$imagen="assets/file_usuario/".$_FILES['file']['name'];
					$hora=$this->input->post('hora');
					$estado='1';
					$ins_codigo=date('YmdHs');

					$costo=$this->input->post('costo');
					$fecha_fin=$this->input->post('fecha_fin');
					$fecha_inicio_insc=$this->input->post('fecha_inicio_insc');
					$lugar=$this->input->post('lugar');
					
					$this->Modelo_estudiante->update_tabla_sys($id_capacitacion,$nombre,$descripcion,$costo,$expositor,$fecha_inicio,$fecha_fin,$fecha_fin_insc,$fecha_inicio_insc,$imagen,$lugar,$hora,$estado,$ins_codigo);
				
				//more code here...
				
			} else {
				echo 'Negado...';
			}
		} else {
			echo 'Formato invalido';
		}


	}
	public function eliminar_estudiante(){
		$idinscripciones=$this->input->post('idinscripciones');
		$tabla='capacitacion';
		$idtabla='idinscripciones';
		$this->Modelo_estudiante->eliminar_tabla_sys($tabla,$idtabla,$idinscripciones);
	}
	public function alimina_seminiario(){
		$idinscripciones=$this->input->post('idinscripciones');
		$dat=[
			'estado'=>0
		];
		$this->Modelo_fuctions-> db_update('capacitacion', $dat, '	id_capacitacion', $idinscripciones);
	}
	public function reporte_inscripciones(){
		$dato['menu']="3";
		$dato['contenido']="vista_estudiante/reporte_inscripciones";
		$this->load->view('plantilla_a',$dato);
	}
	public function buscar_datos_fechas(){
		$fecha_i=$this->input->post('fecha_i');
		$fecha_f=$this->input->post('fecha_f');
		$obj=$obj=$this->Modelo_estudiante->buscar_datos_fechas($fecha_i,$fecha_f);
		if ($obj) {
			echo '<div class="col-lg-3">
                  <form method="post" action="'.base_url(Hasher::make(23)).'" target="_black">
                    <input type="hidden" name="fecha_i" value="'.$fecha_i.'">
                    <input type="hidden" name="fecha_f" value="'.$fecha_f.'">
                    <button type="submit" class="btn btn-carrot btn-lg btn-block"><span class="fa fa-file-pdf-o"></span> IMPRIMIR EN PDF</button>
                  </form>  
                </div>
                <table class="table table-striped table-bordered" style="border-spacing:0px; width:100%"><br>
                    <thead>
                        <tr style=" background:#9B59B6;color:#fff; box-shadow: 0px 5px 10px rgb(62, 66, 0);">
                            <th>#</th>
                            <th>CARNET</th>
				            <th>NOMBRE</th>
				            <th>APELLIDOS</th>
				            <th>FECHA</th>
                        </tr>
                    </thead>
                    <tbody>'; $con=1;
                   	foreach ($obj as $value) {
                   		echo '<tr>
			              <td>'.$con++.'</td>
			              <td>'.$value->ci.'</td>
			              <td>'.$value->nombre.' </td>
			              <td>'.$value->paterno.' '.$value->materno.'</td>
			              <td>'.fecha_literal($value->ins_fecha_reg,4).'</td>
			            </tr>';
                   	}
                echo '</tbody>
            </table>';
		}else{
			echo "NO EXISTE INFORMACION";
		}
	}
	public function imprimir_reporte_inscripciones(){
		$fecha_i=$this->input->post('fecha_i');
		$fecha_f=$this->input->post('fecha_f');
		$obj=$obj=$this->Modelo_estudiante->buscar_datos_fechas($fecha_i,$fecha_f);
		ob_start();
		require_once APPPATH."libraries/fpdf/fpdf/fpdf.php"; 
		$pdf = new FPDF();
			$pdf->SetAuthor('ING. JUAN FERNANDO CHAMBI GUACHALLA');
			$titulo='reporte de comprobante';
			$pdf->SetTitle($titulo);
			$pdf->AddPage();  		

			$pdf->ln(5);
	        $pdf->Image('assets/alert/encabezado_acta.jpg',0,2,200,35,'jpg','');
			$pdf->ln(18);

			$pdf->SetTextColor(0,51,102);
			$pdf->setFont('Times', 'B', 18);
			$pdf->Cell(210,8,('LISTA DE ESTUDIANTE'),0,1,'C');
			$pdf->ln(2);
		
			$pdf->SetFont('Arial', 'B', 12);
			$pdf->SetTextColor(0,51,102); 
			$pdf->SetDrawColor(210,211,221);
			$pdf->SetFillColor(220,220,220);

			$pdf->ln(2);
			$pdf->Cell(10,6,('#'),1,0,'C',1);
			$pdf->Cell(30,6,('CARNET'),1,0,'C',1);
			$pdf->Cell(60,6,('NOMBRE'),1,0,'C',1);
			$pdf->Cell(60,6,('APELLIDOS'),1,0,'C',1);
			$pdf->Cell(30,6,('FECHA'),1,1,'C',1);

			$pdf->SetFont('Times', 'B', 7);
			$con=1;
			foreach ($obj as $value) {
				$pdf->Cell(10,5,($con++),1,0,'C');
				$pdf->Cell(30,5,($value->ci.' '.$value->expedido),1,0,'C');
				$pdf->Cell(60,5,($value->nombre),1,0,'C');
				$pdf->Cell(60,5,($value->paterno.' '.$value->materno),1,0,'C');
				$pdf->Cell(30,5,(fecha_literal($value->ins_fecha_reg,4)),1,1,'C');
			}


		

			$pdf->Output($titulo.'.pdf','I');
			ob_end_clean();	
	}
















}