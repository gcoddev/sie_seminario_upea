<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller_inscripcion extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['Modelo_estudiante', 'Modelo_fuctions', 'Modelo_administrador', 'Modelo_users_groups']);
		$this->load->helper('funciones_helper');
		// $this->load->helper('download');
	}

	public function index()
	{
		redirect(site_url(Hasher::make(25)));
	}


	public function inscripcion()
	{
		$this->data['taba1'] = $this->Modelo_estudiante->listar_estudiante_cursos();


		/* $data['taba2']=$this->Modelo_estudiante->listar_estudiante_cursos("AND fecha_inicio='2020-09-22' ");
		$data['taba3']=$this->Modelo_estudiante->listar_estudiante_cursos("AND fecha_inicio='2020-09-23' "); */


		$this->data['title_menu2'] = 'segundo';

		

		$this->output->set_template('start');
		$this->load->view('vista_estudiante/vista_inicio', $this->data);
		//$this->load->view('vista_estudiante/inscripciones',$this->data);
	}


	
	public function login()
	{


		$persona = $this->Modelo_estudiante->login($this->input->post('ci'), $this->input->post('password'));
		if ($persona != null) {
			$user = $this->ion_auth->user()->row();
			$id_estudiante = $persona->id;
			$this->session->set_userdata('persona',  $id_estudiante);
			$this->session->set_userdata($persona);
			$id_admin = $this->session->userdata('persona');
			echo 2;
		} else {
			$this->session->set_flashdata('error', 'no se tiene registro de sus datos');
			//redirect('home', 'refresh');
			//redirect((Hasher::make(7)), 'refresh');
			echo 1;
		}

		//redirect('postulacion', 'refresh');
		//redirect((Hasher::make(2)), 'refresh');

	}


	public function logout()
	{
		$this->session->sess_destroy();
		//redirect('postulacion', 'refresh');
		//redirect((Hasher::make(2)), 'refresh');
	}
	public function detalles_seminario($id_seminario)
	{
		//$this->data['depar'] = $this->Modelo_estudiante->departa();
		$this->data['posicion'] = $posicion = $this->Modelo_fuctions->obtener_lista_tabla('posiciones_certificado', 'id_seminario = ' . $id_seminario);
		$this->data['taba1'] = $this->Modelo_estudiante->listar_estudiante_cursos1('capacitacion', 'id_capacitacion', $id_seminario, $query = '');
		$this->output->set_template('start');
		$this->load->view('vista_estudiante/vista_personal', $this->data);
	}
	public function usuarios_datos()
	{
		$this->data['datos1'] = $this->Modelo_estudiante->RetornaUnRegistroDeUnaTablaBD('base_upea.vista_persona', 'ci', $this->input->post('ci1'), $query = '');
		$this->data['grupos'] = $this->Modelo_estudiante->RetornaUnaTabla("groups");
		$this->load->view('admin/crear_usuario', $this->data);
	}

	public function insertar_usuario(){
		// echo $this->input->post('ci');
		//$mundo=$_POST['iden'];
		//echo $mundo;
		//echo $this->input->post('ci');
		// $mundo=$_POST['iden'];
		//echo $this->input->post('id');
		// print_r($user_group);
		
		
		$id = $this->input->post('id');
		$user = $this->Modelo_estudiante->RetornaUnRegistroDeUnaTablaBD('base_upea.vista_persona', 'id', $id, $query = '');
		$ci = $user->ci;
		$this->Modelo_administrador->agregar_admin($user);
		
		$id2 = $this->Modelo_administrador->RetornarId($ci);
		echo $id2;

		$user_group = $this->input->post();
		// // print_r($user_group);
		$this->Modelo_users_groups->insertar($user_group, $id2);
	}

	function registrar_persona()
	{
		/* echo ($this->input->post('carnet'));
		die; */
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules(valida_persona());
		if ($this->form_validation->run() == false) {

			echo validation_errors();
		} else {


			$datos_persona = [
				'nombre' => $this->input->post('name'),
				'paterno' => $this->input->post('paterno'),
				'materno' => $this->input->post('materno'),
				'ci' => $this->input->post('carnet123'),
				'expedido' => $this->input->post('exp'),
				'profecion' => $this->input->post('profecion'),


			];
			/* var_dump($datos_persona);die; */
			$ver = $this->Modelo_estudiante->RetornaUnRegistroDeUnaTablaBD('persona_exterior', 'ci', $this->input->post('carnet123'), $query = '');
			($ver) ? $this->Modelo_estudiante->editar_tabla_sys('persona_exterior', $datos_persona, 'id', $ver->id) : $this->Modelo_estudiante->insertar_tabla_sys('persona_exterior', $datos_persona);

			/* 	$ver1 = $this->Modelo_estudiante->RetornaUnRegistroDeUnaTablaBD('persona_exterior', 'ci', $this->input->post('carnet'), $query = '');
			$dat1 = array(
				'id_capacitacion' => $this->input->post('id_seminario'),
				'id_persona' => $ver1->id,
				'ins_codigo' => date('YmdHs'),
				'ins_fecha_reg' => date('Y-m-d H:m:s'),
				'fecha_insc' => date('Y-m-d'),
			);
			//var_dump($obj);//die;
			$tabla = 'inscripcion';
			$this->Modelo_estudiante->insertar_tabla_sys('inscripcion', $dat1); */
			///
			$ci = $this->input->post('carnet123');
			$mae = $this->Modelo_estudiante->buscar_carnet($ci);
			$personaext = $this->Modelo_estudiante->busquedageneral('persona_exterior', "ci='$ci' ");


			if ($mae || $personaext) {

				$id_persona = '';
				if ($mae) {
					$id_persona = $mae->id;
				} else {
					$id_persona = $personaext->id;
				}

				$dat = array(
					'id_capacitacion' => $this->input->post('id_seminario'),
					'id_persona' => $id_persona,
					'ins_codigo' => date('YmdHs'),
					'ins_fecha_reg' => date('Y-m-d H:m:s'),
					'fecha_insc' => date('Y-m-d'),
				);
				//var_dump($obj);//die;

				$this->Modelo_estudiante->insertar_tabla_sys('inscripcion', $dat);
			}

			echo ('Se registró correctamente al  seminario..' . $this->input->post('nombre_seminario'));
		}
	}

	public function buscar_persona()
	{

		$ci = $this->input->post('carnet');
		$id = $this->input->post('id_seminario');
		$mae = $this->Modelo_estudiante->buscar_carnet($ci);
		$personaext = $this->Modelo_estudiante->busquedageneral('persona_exterior', "ci='$ci' ");
		$seminario1 = $this->Modelo_estudiante->busquedageneral('inscripcion', "id_persona='$personaext->id' and id_capacitacion='$id'");
		/* 	var_dump($seminario1);
		die; */
		$seminario2 = $this->Modelo_estudiante->verificar_estudiante($mae->id, $id);

		if ($mae || $personaext) {
			if ($seminario1 || $seminario2) {
				echo 1;
			} else {
				echo 2;
				$id_persona = '';
				if ($mae) {
					$id_persona = $mae->id;
				} else {
					$id_persona = $personaext->id;
				}

				$dat = array(
					'id_capacitacion' => $id,
					'id_persona' => $id_persona,
					'ins_codigo' => date('YmdHs'),
					'ins_fecha_reg' => date('Y-m-d H:m:s'),
					'fecha_insc' => date('Y-m-d'),
				);
				//var_dump($obj);//die;
				$tabla = 'inscripcion';
				$this->Modelo_estudiante->insertar_tabla_sys('inscripcion', $dat);
			}
		} else
			echo 4;
	}
	public function buscar_carnet()
	{
		$ci = $this->input->post('ci');
		$id = $this->input->post('id');
		$obj = $this->Modelo_estudiante->buscar_carnet($ci);
		if ($obj) {
			$verificar = $this->Modelo_estudiante->verificar_estudiante($obj->id, $id);
			if (!$verificar) {
				if ($obj) {
					$dato['value'] = $obj;
					$dato['id'] = $id;
					$this->load->view("vista_estudiante/buscar_carnet", $dato);
				} else {
					echo '<input type="hidden" name="id_estudiante" id="id_estudiante" value="0">
					<div class="alert alert-info"><strong>NOTA!</strong> DATOS NO EXISTEN </div>';
				}
			} else {
				echo '<input type="hidden" name="id_estudiante" id="id_estudiante" value="0">
				<div class="alert alert-danger"><strong>NOTA!</strong> ESTUDIANTE YA SE ENCUENTRA REGISTRADO EN EL CURSO</div>';
			}
		} else {
			echo '<input type="hidden" name="id_estudiante" id="id_estudiante" value="0">
			<div class="alert alert-info"><strong>NOTA!</strong> DATOS NO EXISTEN </div>';
		}


		/* $mostrar_inscrito=$this->Modelo_estudiante->verificar_estudiante_inscrito($ci);
		if ($mostrar_inscrito) {
			$dato['value']=$mostrar_inscrito;
			$this->load->view("vista_estudiante/datos_imprimir",$dato);
		}else{
			echo '<input type="hidden" name="id_estudiante" id="id_estudiante" value="0">
			<div class="alert alert-info"><strong>NOTA!</strong> DATOS NO EXISTEN </div>';
		} */
	}

	//buscar_carnet_cert/
	public function buscar_carnet_cert()
	{
		$ci = $this->input->post('ci');
		$mostrar_inscrito = $this->Modelo_estudiante->verificar_estudiante_inscrito($ci);
		if ($mostrar_inscrito) {
			$dato['value'] = $mostrar_inscrito;
			$this->load->view("vista_estudiante/datos_imprimir", $dato);
		} else {
			echo '<input type="hidden" name="id_estudiante" id="id_estudiante" value="0">
			<div class="alert alert-info"><strong>NOTA!</strong> DATOS NO EXISTEN </div>';
		}
	}
	public function buscar_carnet_cert1()
	{
		$ci = $this->input->post('ci');

		$mostrar_inscrito = $this->Modelo_estudiante->verificar_persona_seminario($ci);
		/* var_dump($mostrar_inscrito);
die; */
		$dato['certificados'] = $mostrar_inscrito;
		$this->load->view("vista_seminario/vista_certificado", $dato);
	}
	public function nuevo_seminario()
	{
		$config = [
			"upload_path" =>  "./uploads",
			'allowed_types' => 'gif|jpg|png',
		];
		$config['encrypt_name']         = false;
		$this->load->library('upload', $config);
		$this->upload->do_upload('portada');
		$data = $this->upload->data();
		$foto_ser45 = 'uploads/' . $data['file_name'];
		$this->upload->do_upload('certificado');
		$data1 = $this->upload->data();
		$foto_ser46 = 'uploads/' . $data1['file_name'];

		$dat23 = [
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion'),
			'costo' => $this->input->post('costo'),
			'duracion' => $this->input->post('duracion'),
			'expositor' => $this->input->post('expositor'),
			'fecha_inicio' => $this->input->post('inicio'),
			'fecha_fin_insc' => $this->input->post('fin'),
			'imagen' => $foto_ser45,
			'imagen_certificado' => $foto_ser46,
			'lugar' => $this->input->post('lugar'),
			'hora' => $this->input->post('hora'),
			'ins_codigo' => date('YmdHs'),
		];

		$seminario = $this->Modelo_estudiante->insertar_tabla_sys('capacitacion', $dat23);
		echo $seminario;
	}



	public function detales_seminario1($id_sem)
	{
		$id_seminario =  $id_sem;
		$this->data['posicion'] = $posicion = $this->Modelo_fuctions->obtener_lista_tabla('posiciones_certificado', 'id_seminario = ' . $id_seminario);
		$this->data['id_seminario'] = $id_sem;
		$this->data['sem1'] = $this->Modelo_estudiante->RetornaUnRegistroDeUnaTablaBD('capacitacion', 'id_capacitacion', $id_seminario, $query = '');


	
		
		$this->output->set_template('admin/plantilla_raiz', $this->data);


		$this->load->view('admin/detalles_seminario', $this->data);
		//$this->load->view('vista_seminario/vista_certificado', $this->data);
	}





	public function guardar_zomm()
	{

		$dat1 = [
			'id_capacitacion' => $this->input->post('id_seminario'),
			'enlace_zom' => $this->input->post('enlace'),
			'id_reunion' => $this->input->post('idzomm'),
			'codigo_zoom' => $this->input->post('clave'),
		];
		$enla1 = $this->Modelo_estudiante->RetornaUnRegistroDeUnaTablaBD('seminario_detalle', 'id_capacitacion', $this->input->post('id_seminario'), $query = '');
		($enla1) ? $this->Modelo_estudiante->editar_tabla_sys('seminario_detalle', $dat1, 'id_seminario_detalle', $enla1->id_seminario_detalle) : $this->Modelo_estudiante->insertar_tabla_sys('seminario_detalle', $dat1);
	}
	public function guardar_nuevo_inscripcion_estudiante()
	{
		$obj = array(
			'id_capacitacion' => $this->input->post('idc'),
			'id_persona' => $this->input->post('id'),
			'ins_codigo' => date('YmdHs'),
			'ins_fecha_reg' => date('Y-m-d H:m:s'),
			'fecha_insc' => date('Y-m-d'),
		);
		//var_dump($obj);//die;
		$tabla = 'inscripcion';
		$this->Modelo_estudiante->insertar_tabla_sys($tabla, $obj);
	}
	public function validacion_certificado()
	{
		$this->load->view('vista_estudiante/validacion_certificado');
	}
	public function validacion_certificado_codigo()
	{
		$codigo = $this->input->post('ci');
		$obj = $this->Modelo_estudiante->validacion_certificado_codigo($codigo);
		if ($obj) {
			echo '<div class="alert alert-info"><strong>NOTA! <br></strong> CERTIFICADO PERTENECIENTE A : <br> ' . $obj->nombre . ' ' . $obj->paterno . ' </div>';
		} else {
			echo '<input type="hidden" name="id_estudiante" id="id_estudiante" value="0">
			<div class="alert alert-info"><strong>NOTA!</strong> DATOS NO EXISTEN </div>';
		}
	}
	public function imprimir_certificado1($id_estudiante)
	{

		$obj = $this->Modelo_estudiante->imprimir_certificado($id_estudiante, "and id_capacitacion between 3 and 24  ");
		if (empty($obj)) {
			echo '<script>alert("NO ESTAS INSCRITO EN ESTE CURSO")</script>';
			redirect('http://www.seminarios.upea.bo/', 'refresh');
		}

		if ($obj) {
			$obj1 = array('certificado' => '1', 'ins_fecha_reg' => date('Y-m-d'));
			$tabla = 'inscripcion';
			$idtabla = 'id_inscripcion';
			$this->Modelo_estudiante->editar_tabla_sys($tabla, $obj1, $idtabla, $obj->id_inscripcion);
		}
		// ob_start();
		require_once APPPATH . "/libraries/fpdf/fpdf/fpdf.php";
		require_once APPPATH . "/libraries/phpqrcode/qrlib.php";

		// require_once APPPATH."/libraries/fpdf/fpdf/fpdf.php";  
		$pdf = new FPDF('L', 'mm', 'A4');
		$pdf->SetAuthor('ING. HELEN PEREZ MAMANI');
		$titulo = 'reporte de ' . $obj->nombre;
		$pdf->SetTitle($titulo);
		$pdf->AddPage();


		$pdf->ln(5);
		$pdf->Image('assets/img_certificado/ciclo_webinar.jpg', 0, 0, 298, 210, 'jpg', '');
		// $pdf->Image('assets/img_certificado/qr-code.png',250,60,35,35,'png','');

		$code = $obj->nombre . "\n" . 'http://seminarios.upea.bo/validarCertificado';
		QRcode::png($code, 'img.png');

		//$pdf->Image("img.png",250,60,37,37,"png");
		$pdf->Image("img.png", 3, 170, 37, 37, "png");
		$pdf->ln(80);
		$pdf->SetTextColor(0, 100, 200);
		$pdf->setFont('Times', 'B', 14);
		$pdf->Cell(274, 5, 'CODIGO:' . ($obj->ins_codigo), 0, 1, 'R');

		$pdf->ln(5);

		$pdf->SetTextColor(0, 100, 250);
		$pdf->setFont('Times', 'BI', 20);
		$pdf->setY(125);
		$pdf->Cell(145, 8);
		$pdf->Cell(210, 8, ($obj->nombre . ' ' . $obj->paterno . ' ' . $obj->materno), 0, 1, 'L');



		// $pdf->Output($titulo.'.pdf','I');
		$pdf->Output("assets/documentos/F1" . $obj->ci . ".pdf", "F");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$url = "http://192.168.8.56/FirmaDigital/api/certificacion";
		$ruta_documento = realpath("./assets/documentos/F1" . $obj->ci . ".pdf");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(X11;Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0Mozilla/4.0(compatibe;)");
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		$post = array(
			'identificador' => 'sis_ems_crt_cal',
			'password' => 'access_sis_ems_crt_cal',
			'nombre_documento' => 'doc_test_api',
			'documento' => new CURLFile($ruta_documento)
		);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$respuesta = curl_exec($ch);
		if (curl_errno($ch)) {
			die("Error en conexion: " . curl_error($ch));
		} else {


			curl_close($ch);

			// echo $_SERVER['DOCUMENT_ROOT']."/assets/documentos/FIRMADO_".$obj->ci.".pdf";exit();
			if (file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf", $respuesta)) {
				// echo "Documento guardado exitosamente";	
				$path = $_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf";
				header("Content-type: application/pdf");
				header('filename="' . basename($path) . '"');
				readfile($path);



				/*$this->fpdf->Output("assets/reporte_tabla_convalidacion/homologaciones".$id_persona.".pdf","F");
            	chmod("assets/reporte_tabla_convalidacion/homologaciones".$id_persona.".pdf", 0777);  */
			} else {
				echo "Error al guardar el documento";
			}
		}
	}
	function actualia_posiciones()
	{
		/* 	echo('asdad');
		die; */
		$posicion = $this->Modelo_fuctions->obtener_lista_tabla('posiciones_certificado', "id_seminario = " . $this->input->post('id_sem'));
		if (empty($posicion)) {
			$datossss = array(
				'id_seminario ' => $this->input->post('id_sem'),
				'posicion_x ' => '10',
				'posicion_y' => '48',
				'ubicacion' => 'general',
				'hoja_ancho' => '298',
				'hoja_alto' => '210',
			);
			$this->Modelo_fuctions->insertar_datos_tabla("posiciones_certificado", $datossss);
		} else {
			$this->Modelo_fuctions->actualizar_datos_tabla('posiciones_certificado', array($this->input->post('colum') => $this->input->post('valor')), 'id_posicion', $this->input->post('id'));
		}

		$this->data['posicion'] = $posicion = $this->Modelo_fuctions->obtener_lista_tabla('posiciones_certificado', 'id_seminario = ' . $this->input->post('id_sem'));
	}
	function actualia_hoja()
	{
		/* 	echo('asdad');
			die; */
		$posicion = $this->Modelo_fuctions->obtener_lista_tabla('posiciones_certificado', "id_seminario = " . $this->input->post('id_sem'));
		if (empty($posicion)) {
			$datossss = array(
				'id_seminario ' => $this->input->post('id_sem'),
				'posicion_x ' => '10',
				'posicion_y' => '48',
				'ubicacion' => 'general',
				'hoja_ancho' => '298',
				'hoja_alto' => '210',
				'qr' => '140',
				'codigo' => '80',
			);
			$this->Modelo_fuctions->insertar_datos_tabla("posiciones_certificado", $datossss);
		} else {
			$this->Modelo_fuctions->actualizar_datos_tabla('posiciones_certificado', array($this->input->post('colum') => $this->input->post('valor')), 'id_posicion', $this->input->post('id'));
		}

		$this->data['posicion'] = $posicion = $this->Modelo_fuctions->obtener_lista_tabla('posiciones_certificado', 'id_seminario = ' . $this->input->post('id_sem'));
	}
	public function imprimir_certificado2($ci, $id_seminario)
	{



		$obj = $this->Modelo_estudiante->imprimir_certificado($ci);


		if ($obj) {
			$obj1 = array('certificado' => '1', 'ins_fecha_reg' => date('Y-m-d'));
			$tabla = 'inscripcion';
			$idtabla = 'id_inscripcion';
			$this->Modelo_estudiante->editar_tabla_sys($tabla, $obj1, $idtabla, $obj->id_inscripcion);
		}
		// ob_start();
		$im = $this->Modelo_fuctions->RetornaUnRegistroDeUnaTablaR('capacitacion', 'id_capacitacion', $id_seminario, $query = '');
		require_once APPPATH . "/libraries/fpdf/fpdf/fpdf.php";
		require_once APPPATH . "/libraries/phpqrcode/qrlib.php";
		$file = $im->imagen_certificado;
		$imagen = getimagesize($file);
		$ancho = $imagen[0];
		$alto = $imagen[1];
		$papel = '';
		$cod='';
		if ($ancho > $alto) {
			$papel = 'L';
			$cod=274;
		} else {
			$papel = 'P';
			$cod=200;
		}	// require_once APPPATH."/libraries/fpdf/fpdf/fpdf.php";  
		$pdf = new FPDF($papel, 'mm', 'A4');
		$pdf->SetAuthor('ING. HELEN PEREZ MAMANI');
		$titulo = 'reporte de ' . $obj->nombre;
		$pdf->SetTitle($titulo);
		$pdf->AddPage();

		$im = $this->Modelo_fuctions->RetornaUnRegistroDeUnaTablaR('capacitacion', 'id_capacitacion', $id_seminario, $query = '');
		//var_dump($im);die;
		$posicion1 = $this->Modelo_fuctions->RetornaUnRegistroDeUnaTablaR('posiciones_certificado', 'id_seminario', $id_seminario, $query = '');
		$pdf->ln(5);
		$pdf->Image($im->imagen_certificado, 0, 0, $posicion1->hoja_ancho, $posicion1->hola_alto, 'png', '');
		// $pdf->Image('assets/img_certificado/qr-code.png',250,60,35,35,'png','');

		$code = $obj->nombre . "\n" . 'http://seminarios.upea.bo/validarCertificado';
		QRcode::png($code, 'img.png');

		//$pdf->Image("img.png",250,60,37,37,"png");
		$pdf->Image("img.png", 20, $posicion1->qr, 30, 30, "png");
		$pdf->ln(80);
		$pdf->SetTextColor(0, 100, 200);
		$pdf->setFont('Times', 'B', 14);
		$pdf->Cell($cod, $posicion1->codigo, 'CODIGO:' . ($obj->ins_codigo), 0, 1, 'R');

		$pdf->ln(5);

		$pdf->SetTextColor(0, 100, 250);
		$pdf->setFont('Times', 'BI', 20);
		$pdf->setY($posicion1->posicion_y);
		$pdf->setX($posicion1->posicion_x);
		$pdf->Cell(70, 8);
	/* 	$pdf->setX(40); */
		$pdf->Cell(100, 8, ($obj->nombre . ' ' . $obj->paterno . ' ' . $obj->materno), 0, 1, 'L');



		 $pdf->Output($titulo.'.pdf','I');
		//$pdf->Output("assets/documentos/F1" . $obj->ci . ".pdf", "F");
		/* chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$url = "http://192.168.8.56/FirmaDigital/api/certificacion";
		$ruta_documento = realpath("./assets/documentos/F1" . $obj->ci . ".pdf");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(X11;Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0Mozilla/4.0(compatibe;)");
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		$post = array(
			'identificador' => 'sis_ems_crt_cal',
			'password' => 'access_sis_ems_crt_cal',
			'nombre_documento' => 'doc_test_api',
			'documento' => new CURLFile($ruta_documento)
		);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$respuesta = curl_exec($ch);
		if (curl_errno($ch)) {
			die("Error en conexion: " . curl_error($ch));
		} else {


			curl_close($ch);

			// echo $_SERVER['DOCUMENT_ROOT']."/assets/documentos/FIRMADO_".$obj->ci.".pdf";exit();
			if (file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf", $respuesta)) {
				// echo "Documento guardado exitosamente";	
				$path = $_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf";
				header("Content-type: application/pdf");
				header('filename="' . basename($path) . '"');
				readfile($path);
			} else {
				echo "Error al guardar el documento";
			}
		} */
	}

	public function imprimir_certificado3($id_estudiante)
	{

		$obj = $this->Modelo_estudiante->imprimir_certificado($id_estudiante, "and id_capacitacion='26'  ");
		if (empty($obj)) {
			echo '<script>alert("NO ESTAS INSCRITO EN ESTE CURSO")</script>';
			redirect('http://www.seminarios.upea.bo/', 'refresh');
		}


		if ($obj) {
			$obj1 = array('certificado' => '1', 'ins_fecha_reg' => date('Y-m-d'));
			$tabla = 'inscripcion';
			$idtabla = 'id_inscripcion';
			$this->Modelo_estudiante->editar_tabla_sys($tabla, $obj1, $idtabla, $obj->id_inscripcion);
		}
		// ob_start();
		require_once APPPATH . "/libraries/fpdf/fpdf/fpdf.php";
		require_once APPPATH . "/libraries/phpqrcode/qrlib.php";

		// require_once APPPATH."/libraries/fpdf/fpdf/fpdf.php";  
		$pdf = new FPDF('L', 'mm', 'A4');
		$pdf->SetAuthor('ING. HELEN PEREZ MAMANI');
		$titulo = 'reporte de ' . $obj->nombre;
		$pdf->SetTitle($titulo);
		$pdf->AddPage();


		$pdf->ln(5);
		$pdf->Image('assets/img_certificado/citas.jpeg', 0, 0, 298, 210, 'jpeg', '');
		// $pdf->Image('assets/img_certificado/qr-code.png',250,60,35,35,'png','');

		$code = $obj->nombre . "\n" . 'http://seminarios.upea.bo/validarCertificado';
		QRcode::png($code, 'img.png');

		$pdf->Image("img.png", 250, 70, 25, 25, "png");
		//$pdf->Image("img.png",250,60,37,37,"png");
		//$pdf->Image("img.png",15,110,37,37,"png");
		$pdf->ln(80);
		$pdf->SetTextColor(0, 100, 200);
		$pdf->setFont('Times', 'B', 14);
		$pdf->Cell(274, 5, 'CODIGO:' . ($obj->ins_codigo), 0, 1, 'R');

		$pdf->ln(5);

		$pdf->SetTextColor(0, 100, 250);
		$pdf->setFont('Times', 'BI', 25);
		$pdf->setY(80);
		$pdf->Cell(65, 8);
		$pdf->Cell(150, 8, ($obj->nombre . ' ' . $obj->paterno . ' ' . $obj->materno), 0, 1, 'L');



		// $pdf->Output($titulo.'.pdf','I');
		$pdf->Output("assets/documentos/F1" . $obj->ci . ".pdf", "F");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$url = "http://192.168.8.56/FirmaDigital/api/certificacion";
		$ruta_documento = realpath("./assets/documentos/F1" . $obj->ci . ".pdf");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(X11;Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0Mozilla/4.0(compatibe;)");
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		$post = array(
			'identificador' => 'sis_ems_crt_cal',
			'password' => 'access_sis_ems_crt_cal',
			'nombre_documento' => 'doc_test_api',
			'documento' => new CURLFile($ruta_documento)
		);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$respuesta = curl_exec($ch);
		if (curl_errno($ch)) {
			die("Error en conexion: " . curl_error($ch));
		} else {


			curl_close($ch);

			// echo $_SERVER['DOCUMENT_ROOT']."/assets/documentos/FIRMADO_".$obj->ci.".pdf";exit();
			if (file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf", $respuesta)) {
				// echo "Documento guardado exitosamente";	
				$path = $_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf";
				header("Content-type: application/pdf");
				header('filename="' . basename($path) . '"');
				readfile($path);
			} else {
				echo "Error al guardar el documento";
			}
		}
	}

	public function imprimir_certificado4($id_estudiante)
	{

		$obj = $this->Modelo_estudiante->imprimir_certificado($id_estudiante, "and id_capacitacion='27'  ");
		if (empty($obj)) {
			echo '<script>alert("NO ESTAS INSCRITO EN ESTE CURSO")</script>';
			redirect('http://www.seminarios.upea.bo/', 'refresh');
		}


		if ($obj) {
			$obj1 = array('certificado' => '1', 'ins_fecha_reg' => date('Y-m-d'));
			$tabla = 'inscripcion';
			$idtabla = 'id_inscripcion';
			$this->Modelo_estudiante->editar_tabla_sys($tabla, $obj1, $idtabla, $obj->id_inscripcion);
		}
		// ob_start();
		require_once APPPATH . "/libraries/fpdf/fpdf/fpdf.php";
		require_once APPPATH . "/libraries/phpqrcode/qrlib.php";

		// require_once APPPATH."/libraries/fpdf/fpdf/fpdf.php";  
		$pdf = new FPDF('L', 'mm', 'A4');
		$pdf->SetAuthor('ING. HELEN PEREZ MAMANI');
		$titulo = 'reporte de ' . $obj->nombre;
		$pdf->SetTitle($titulo);
		$pdf->AddPage();


		$pdf->ln(5);
		$pdf->Image('assets/img_certificado/gisday.jpeg', 0, 0, 298, 210, 'jpeg', '');
		// $pdf->Image('assets/img_certificado/qr-code.png',250,60,35,35,'png','');

		$code = $obj->nombre . "\n" . 'http://seminarios.upea.bo/validarCertificado';
		QRcode::png($code, 'img.png');

		$pdf->Image("img.png", 250, 70, 25, 25, "png");
		//$pdf->Image("img.png",250,60,37,37,"png");
		//$pdf->Image("img.png",15,110,37,37,"png");
		$pdf->ln(80);
		$pdf->SetTextColor(0, 100, 200);
		$pdf->setFont('Times', 'B', 14);
		$pdf->Cell(274, 5, 'CODIGO:' . ($obj->ins_codigo), 0, 1, 'R');

		$pdf->ln(5);

		$pdf->SetTextColor(0, 100, 250);
		$pdf->setFont('Times', 'BI', 28);
		$pdf->setY(80);
		$pdf->Cell(65, 8);
		$pdf->Cell(150, 8, ($obj->nombre . ' ' . $obj->paterno . ' ' . $obj->materno), 0, 1, 'L');



		// $pdf->Output($titulo.'.pdf','I');
		$pdf->Output("assets/documentos/F1" . $obj->ci . ".pdf", "F");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$url = "http://192.168.8.56/FirmaDigital/api/certificacion";
		$ruta_documento = realpath("./assets/documentos/F1" . $obj->ci . ".pdf");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(X11;Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0Mozilla/4.0(compatibe;)");
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		$post = array(
			'identificador' => 'sis_ems_crt_cal',
			'password' => 'access_sis_ems_crt_cal',
			'nombre_documento' => 'doc_test_api',
			'documento' => new CURLFile($ruta_documento)
		);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$respuesta = curl_exec($ch);
		if (curl_errno($ch)) {
			die("Error en conexion: " . curl_error($ch));
		} else {


			curl_close($ch);

			// echo $_SERVER['DOCUMENT_ROOT']."/assets/documentos/FIRMADO_".$obj->ci.".pdf";exit();
			if (file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf", $respuesta)) {
				// echo "Documento guardado exitosamente";	
				$path = $_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf";
				header("Content-type: application/pdf");
				header('filename="' . basename($path) . '"');
				readfile($path);
			} else {
				echo "Error al guardar el documento";
			}
		}
	}

	public function imprimir_certificado5($id_estudiante)
	{

		$obj = $this->Modelo_estudiante->imprimir_certificado($id_estudiante, "and id_capacitacion='28'  ");
		if (empty($obj)) {
			echo '<script>alert("NO ESTAS INSCRITO EN ESTE CURSO")</script>';
			redirect('http://www.seminarios.upea.bo/', 'refresh');
		}


		if ($obj) {
			$obj1 = array('certificado' => '1', 'ins_fecha_reg' => date('Y-m-d'));
			$tabla = 'inscripcion';
			$idtabla = 'id_inscripcion';
			$this->Modelo_estudiante->editar_tabla_sys($tabla, $obj1, $idtabla, $obj->id_inscripcion);
		}
		// ob_start();
		require_once APPPATH . "/libraries/fpdf/fpdf/fpdf.php";
		require_once APPPATH . "/libraries/phpqrcode/qrlib.php";

		// require_once APPPATH."/libraries/fpdf/fpdf/fpdf.php";  
		$pdf = new FPDF('L', 'mm', 'A4');
		$pdf->SetAuthor('ING. HELEN PEREZ MAMANI');
		$titulo = 'reporte de ' . $obj->nombre;
		$pdf->SetTitle($titulo);
		$pdf->AddPage();


		$pdf->ln(5);
		$pdf->Image('assets/img_certificado/openexpo.jpeg', 0, 0, 298, 210, 'jpeg', '');
		// $pdf->Image('assets/img_certificado/qr-code.png',250,60,35,35,'png','');

		$code = $obj->nombre . "\n" . 'http://seminarios.upea.bo/validarCertificado';
		QRcode::png($code, 'img.png');

		$pdf->Image("img.png", 250, 70, 25, 25, "png");
		//$pdf->Image("img.png",250,60,37,37,"png");
		//$pdf->Image("img.png",15,110,37,37,"png");
		$pdf->ln(80);
		$pdf->SetTextColor(0, 100, 200);
		$pdf->setFont('Times', 'B', 14);
		$pdf->Cell(274, 5, 'CODIGO:' . ($obj->ins_codigo), 0, 1, 'R');

		$pdf->ln(5);

		$pdf->SetTextColor(0, 100, 250);
		$pdf->setFont('Times', 'BI', 28);
		$pdf->setY(80);
		$pdf->Cell(65, 8);
		$pdf->Cell(150, 8, ($obj->nombre . ' ' . $obj->paterno . ' ' . $obj->materno), 0, 1, 'L');



		// $pdf->Output($titulo.'.pdf','I');
		$pdf->Output("assets/documentos/F1" . $obj->ci . ".pdf", "F");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$url = "http://192.168.8.56/FirmaDigital/api/certificacion";
		$ruta_documento = realpath("./assets/documentos/F1" . $obj->ci . ".pdf");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(X11;Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0Mozilla/4.0(compatibe;)");
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		$post = array(
			'identificador' => 'sis_ems_crt_cal',
			'password' => 'access_sis_ems_crt_cal',
			'nombre_documento' => 'doc_test_api',
			'documento' => new CURLFile($ruta_documento)
		);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$respuesta = curl_exec($ch);
		if (curl_errno($ch)) {
			die("Error en conexion: " . curl_error($ch));
		} else {


			curl_close($ch);

			// echo $_SERVER['DOCUMENT_ROOT']."/assets/documentos/FIRMADO_".$obj->ci.".pdf";exit();
			if (file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf", $respuesta)) {
				// echo "Documento guardado exitosamente";	
				$path = $_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf";
				header("Content-type: application/pdf");
				header('filename="' . basename($path) . '"');
				readfile($path);
			} else {
				echo "Error al guardar el documento";
			}
		}
	}



	//matricualcion virtual
	public function imprimir_certificado6($id_estudiante)
	{

		$obj = $this->Modelo_estudiante->imprimir_certificado($id_estudiante, "and id_capacitacion='29'  ");
		if (empty($obj)) {
			echo '<script>alert("NO ESTAS INSCRITO EN ESTE CURSO")</script>';
			redirect('http://www.seminarios.upea.bo/', 'refresh');
		}


		if ($obj) {
			$obj1 = array('certificado' => '1', 'ins_fecha_reg' => date('Y-m-d'));
			$tabla = 'inscripcion';
			$idtabla = 'id_inscripcion';
			$this->Modelo_estudiante->editar_tabla_sys($tabla, $obj1, $idtabla, $obj->id_inscripcion);
		}
		// ob_start();
		require_once APPPATH . "/libraries/fpdf/fpdf/fpdf.php";
		require_once APPPATH . "/libraries/phpqrcode/qrlib.php";

		// require_once APPPATH."/libraries/fpdf/fpdf/fpdf.php";  
		$pdf = new FPDF('L', 'mm', 'A4');
		$pdf->SetAuthor('ING. HELEN PEREZ MAMANI');
		$titulo = 'reporte de ' . $obj->nombre;
		$pdf->SetTitle($titulo);
		$pdf->AddPage();


		$pdf->ln(5);
		$pdf->Image('assets/img_certificado/matriculacion.png', 0, 0, 298, 210, 'png', '');
		// $pdf->Image('assets/img_certificado/qr-code.png',250,60,35,35,'png','');

		$code = $obj->nombre . "\n" . 'http://seminarios.upea.bo/validarCertificado';
		QRcode::png($code, 'img.png');

		$pdf->Image("img.png", 250, 70, 25, 25, "png");
		//$pdf->Image("img.png",250,60,37,37,"png");
		//$pdf->Image("img.png",15,110,37,37,"png");
		$pdf->ln(80);
		$pdf->SetTextColor(0, 100, 200);
		$pdf->setFont('Times', 'B', 14);
		$pdf->Cell(274, 5, 'CODIGO:' . ($obj->ins_codigo), 0, 1, 'R');

		$pdf->ln(5);

		$pdf->SetTextColor(0, 100, 250);
		$pdf->setFont('Times', 'BI', 24);
		$pdf->setY(115);
		$pdf->Cell(95, 8);
		$pdf->Cell(150, 8, ($obj->nombre . ' ' . $obj->paterno . ' ' . $obj->materno), 0, 1, 'L');



		$pdf->Output($titulo . '.pdf', 'I');
		/*$pdf->Output("assets/documentos/F1" . $obj->ci . ".pdf", "F");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$url = "http://192.168.8.56/FirmaDigital/api/certificacion";
		$ruta_documento = realpath("./assets/documentos/F1" . $obj->ci . ".pdf");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(X11;Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0Mozilla/4.0(compatibe;)");
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		$post = array(
			'identificador' => 'sis_ems_crt_cal',
			'password' => 'access_sis_ems_crt_cal',
			'nombre_documento' => 'doc_test_api',
			'documento' => new CURLFile($ruta_documento)
		);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$respuesta = curl_exec($ch);
		if (curl_errno($ch)) {
			die("Error en conexion: " . curl_error($ch));
		} else {


			curl_close($ch);

			// echo $_SERVER['DOCUMENT_ROOT']."/assets/documentos/FIRMADO_".$obj->ci.".pdf";exit();
			if (file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf", $respuesta)) {
				// echo "Documento guardado exitosamente";	
				$path = $_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf";
				header("Content-type: application/pdf");
				header('filename="' . basename($path) . '"');
				readfile($path);
			} else {
				echo "Error al guardar el documento";
			}
		}*/
	}

	//titulacion
	public function imprimir_certificado7($id_estudiante)
	{

		$obj = $this->Modelo_estudiante->imprimir_certificado($id_estudiante, "and id_capacitacion='29'  ");
		if (empty($obj)) {
			echo '<script>alert("NO ESTAS INSCRITO EN ESTE CURSO")</script>';
			redirect('http://www.seminarios.upea.bo/', 'refresh');
		}


		if ($obj) {
			$obj1 = array('certificado' => '1', 'ins_fecha_reg' => date('Y-m-d'));
			$tabla = 'inscripcion';
			$idtabla = 'id_inscripcion';
			$this->Modelo_estudiante->editar_tabla_sys($tabla, $obj1, $idtabla, $obj->id_inscripcion);
		}
		// ob_start();
		require_once APPPATH . "/libraries/fpdf/fpdf/fpdf.php";
		require_once APPPATH . "/libraries/phpqrcode/qrlib.php";

		// require_once APPPATH."/libraries/fpdf/fpdf/fpdf.php";  
		$pdf = new FPDF('L', 'mm', 'A4');
		$pdf->SetAuthor('ING. HELEN PEREZ MAMANI');
		$titulo = 'reporte de ' . $obj->nombre;
		$pdf->SetTitle($titulo);
		$pdf->AddPage();


		$pdf->ln(5);
		$pdf->Image('assets/img_certificado/titulacion.png', 0, 0, 298, 210, 'png', '');
		// $pdf->Image('assets/img_certificado/qr-code.png',250,60,35,35,'png','');

		$code = $obj->nombre . "\n" . 'http://seminarios.upea.bo/validarCertificado';
		QRcode::png($code, 'img.png');

		$pdf->Image("img.png", 250, 70, 25, 25, "png");
		//$pdf->Image("img.png",250,60,37,37,"png");
		//$pdf->Image("img.png",15,110,37,37,"png");
		$pdf->ln(80);
		$pdf->SetTextColor(0, 100, 200);
		$pdf->setFont('Times', 'B', 14);
		$pdf->Cell(274, 5, 'CODIGO:' . ($obj->ins_codigo), 0, 1, 'R');

		$pdf->ln(5);

		$pdf->SetTextColor(0, 100, 250);
		$pdf->setFont('Times', 'BI', 24);
		$pdf->setY(115);
		$pdf->Cell(95, 8);
		$pdf->Cell(150, 8, ($obj->nombre . ' ' . $obj->paterno . ' ' . $obj->materno), 0, 1, 'L');



		$pdf->Output($titulo . '.pdf', 'I');
		/*$pdf->Output("assets/documentos/F1" . $obj->ci . ".pdf", "F");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$url = "http://192.168.8.56/FirmaDigital/api/certificacion";
		$ruta_documento = realpath("./assets/documentos/F1" . $obj->ci . ".pdf");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(X11;Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0Mozilla/4.0(compatibe;)");
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		$post = array(
			'identificador' => 'sis_ems_crt_cal',
			'password' => 'access_sis_ems_crt_cal',
			'nombre_documento' => 'doc_test_api',
			'documento' => new CURLFile($ruta_documento)
		);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$respuesta = curl_exec($ch);
		if (curl_errno($ch)) {
			die("Error en conexion: " . curl_error($ch));
		} else {


			curl_close($ch);

			// echo $_SERVER['DOCUMENT_ROOT']."/assets/documentos/FIRMADO_".$obj->ci.".pdf";exit();
			if (file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf", $respuesta)) {
				// echo "Documento guardado exitosamente";	
				$path = $_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf";
				header("Content-type: application/pdf");
				header('filename="' . basename($path) . '"');
				readfile($path);
			} else {
				echo "Error al guardar el documento";
			}
		}*/
	}
	//becas
	public function imprimir_certificado8($id_estudiante)
	{

		$obj = $this->Modelo_estudiante->imprimir_certificado($id_estudiante, "and id_capacitacion='29'  ");
		if (empty($obj)) {
			echo '<script>alert("NO ESTAS INSCRITO EN ESTE CURSO")</script>';
			redirect('http://www.seminarios.upea.bo/', 'refresh');
		}


		if ($obj) {
			$obj1 = array('certificado' => '1', 'ins_fecha_reg' => date('Y-m-d'));
			$tabla = 'inscripcion';
			$idtabla = 'id_inscripcion';
			$this->Modelo_estudiante->editar_tabla_sys($tabla, $obj1, $idtabla, $obj->id_inscripcion);
		}
		// ob_start();
		require_once APPPATH . "/libraries/fpdf/fpdf/fpdf.php";
		require_once APPPATH . "/libraries/phpqrcode/qrlib.php";

		// require_once APPPATH."/libraries/fpdf/fpdf/fpdf.php";  
		$pdf = new FPDF('L', 'mm', 'A4');
		$pdf->SetAuthor('ING. HELEN PEREZ MAMANI');
		$titulo = 'reporte de ' . $obj->nombre;
		$pdf->SetTitle($titulo);
		$pdf->AddPage();


		$pdf->ln(5);
		$pdf->Image('assets/img_certificado/beneficio.png', 0, 0, 298, 210, 'png', '');
		// $pdf->Image('assets/img_certificado/qr-code.png',250,60,35,35,'png','');

		$code = $obj->nombre . "\n" . 'http://seminarios.upea.bo/validarCertificado';
		QRcode::png($code, 'img.png');

		$pdf->Image("img.png", 250, 70, 25, 25, "png");
		//$pdf->Image("img.png",250,60,37,37,"png");
		//$pdf->Image("img.png",15,110,37,37,"png");
		$pdf->ln(80);
		$pdf->SetTextColor(0, 100, 200);
		$pdf->setFont('Times', 'B', 14);
		$pdf->Cell(274, 5, 'CODIGO:' . ($obj->ins_codigo), 0, 1, 'R');

		$pdf->ln(5);

		$pdf->SetTextColor(0, 100, 250);
		$pdf->setFont('Times', 'BI', 24);
		$pdf->setY(115);
		$pdf->Cell(95, 8);
		$pdf->Cell(150, 8, ($obj->nombre . ' ' . $obj->paterno . ' ' . $obj->materno), 0, 1, 'L');



		$pdf->Output($titulo . '.pdf', 'I');
		/*$pdf->Output("assets/documentos/F1" . $obj->ci . ".pdf", "F");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$url = "http://192.168.8.56/FirmaDigital/api/certificacion";
		$ruta_documento = realpath("./assets/documentos/F1" . $obj->ci . ".pdf");
		chmod("assets/documentos/F1" . $obj->ci . ".pdf", 0777);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(X11;Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0Mozilla/4.0(compatibe;)");
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		$post = array(
			'identificador' => 'sis_ems_crt_cal',
			'password' => 'access_sis_ems_crt_cal',
			'nombre_documento' => 'doc_test_api',
			'documento' => new CURLFile($ruta_documento)
		);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$respuesta = curl_exec($ch);
		if (curl_errno($ch)) {
			die("Error en conexion: " . curl_error($ch));
		} else {


			curl_close($ch);

			// echo $_SERVER['DOCUMENT_ROOT']."/assets/documentos/FIRMADO_".$obj->ci.".pdf";exit();
			if (file_put_contents($_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf", $respuesta)) {
				// echo "Documento guardado exitosamente";	
				$path = $_SERVER['DOCUMENT_ROOT'] . "/assets/documentos/1FIRMADO_" . $obj->ci . ".pdf";
				header("Content-type: application/pdf");
				header('filename="' . basename($path) . '"');
				readfile($path);
			} else {
				echo "Error al guardar el documento";
			}
		}
		*/
	}






	/*
	public function imprimir_certificado3($id_estudiante){
		$obj=$this->Modelo_estudiante->imprimir_certificado($id_estudiante);
		require_once APPPATH."/libraries/fpdf/fpdf/fpdf.php"; 
		require_once APPPATH."/libraries/phpqrcode/qrlib.php";
			$pdf = new FPDF('L','mm','A4');
			$pdf->SetAuthor('ING. JUAN FERNANDO CHAMBI GUACHALLA');
			$titulo='reporte de '.$obj->nombre;
			$pdf->SetTitle($titulo);
			


			$pdf->AddPage();  		
			$pdf->ln(5);
	        $pdf->Image('assets/img_certificado/3.jpg',0,0,298,210,'jpg','');
			// $pdf->Image('assets/img_certificado/qr-code.png',250,60,35,35,'png','');
			$code= $obj->nombre."\n".'http://sedes.upea.bo/validarCertificado';
			QRcode::png($code,'img.png');
			$pdf->Image("img.png",250,60,37,37,"png");
		
			$pdf->ln(80);
			$pdf->SetTextColor(0,100,250);
			$pdf->setFont('Times', 'B', 14);
			$pdf->Cell(274,5,($obj->ins_codigo),0,1,'R');

			$pdf->ln(5);

			$pdf->SetTextColor(0,100,250);
			$pdf->setFont('Times', 'BI', 24);
			$pdf->Cell(38,8);
			$pdf->Cell(210,8,($obj->nombre.' '.$obj->paterno.' '.$obj->materno),0,1,'L');


			// $pdf->Output($titulo.'.pdf','I');
			$pdf->Output("assets/documentos/F3".$obj->ci.".pdf","F");
			chmod("assets/documentos/F3".$obj->ci.".pdf", 0777);

			$url = "http://192.168.8.56/FirmaDigital/api/certificacion";
			$ruta_documento = realpath("./assets/documentos/F3".$obj->ci.".pdf");
			chmod("assets/documentos/F3".$obj->ci.".pdf", 0777);

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_VERBOSE, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: multipart/form-data"));
			curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(X11;Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0Mozilla/4.0(compatibe;)");
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			$post = array(
				'identificador' => 'sis_i_e_sie',
				'password' => 'access_sis_sie',
				'nombre_documento' => 'doc_test_api',
				'documento' => new CURLFile($ruta_documento)
			);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			$respuesta = curl_exec($ch);
			if ( curl_errno($ch) ) {
				die("Error en conexion: ".curl_error($ch));
			}else{
				curl_close($ch);
				if ( file_put_contents($_SERVER['DOCUMENT_ROOT']."/assets/documentos/3FIRMADO_".$obj->ci.".pdf", $respuesta) ) {
					// echo "Documento guardado exitosamente";	
					$path = $_SERVER['DOCUMENT_ROOT']."/assets/documentos/3FIRMADO_".$obj->ci.".pdf";
					header("Content-type: application/pdf");
					header('filename="' . basename($path) . '"');
					readfile($path);			
				}else{
					echo "Error al guardar el documento";
				}
				
			}

	}*/
}
