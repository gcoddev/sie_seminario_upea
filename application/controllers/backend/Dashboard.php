<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['Modelo_estudiante','Modelo_fuctions']);
		if (!$this->ion_auth->logged_in()) {
            redirect('auth/logout', 'refresh');
        }

	}


	public function index()
	{
	
	
		$this->data['title_menu'] = 'Inicio';
		$this->data['title_menu1'] = 'primero';
		$this->data['title_menu2'] = 'segundo';
		$this->data['seminarios'] = $this->Modelo_fuctions->RetornaUnaTabladd('capacitacion','estado=1');

		
		$this->output->set_template('admin/plantilla_raiz', $this->data);
		//$this->_render_page('backend' . DIRECTORY_SEPARATOR . 'admin', $this->data);
		$this->load->view('admin/inicio', $this->data);
		
	}

	
	public function lista_participantes($id_seminario)
	{
	
		$this->data['title_menu'] = 'Inicio';
		$this->data['title_menu1'] = 'primero';
		$this->data['title_menu2'] = 'segundo';
		$this->data['sem'] = $id_seminario;
	$this->data['lista'] = $this->Modelo_fuctions->lista_inscritos($id_seminario); 
/* 	var_dump($this->data['lista']);
	die; */
		$this->output->set_template('admin/plantilla_raiz', $this->data);
		//$this->_render_page('backend' . DIRECTORY_SEPARATOR . 'admin', $this->data);
		$this->load->view('admin/lista_inscritos', $this->data);
		
	}
	public function perfil()
	{
		$this->data['page_content'] = 'backend/perfil';
		$this->render();
	}

	
	public function guardar_imagen_usuario(){
		$imagen_a=$this->input->post('imagen_a');
		$user_id=$this->input->post('user_id');
		$imagen=$_FILES['imagen']['tmp_name'];
		if ($imagen==null) {
			$imag='';
		}else{
			list($ancho,$alto)=getimagesize($_FILES['imagen']['tmp_name']);
			$nuevo_ancho=200;
			$nuevo_alto=200;
			// $direccion="assets/img_usuario/user_";
			if ($_FILES['imagen']['type']=="image/jpg" || $_FILES['imagen']['type']=="image/jpeg") {
				$ima=round(microtime(true)).'.jpg';
				$ruta="assets/file_usuario/user_".$ima;
				$origen=imagecreatefromjpeg($_FILES['imagen']['tmp_name']);
				$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
				imagecopyresampled($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
				imagejpeg($destino,$ruta);
				$imag="user_".$ima;
			}else{
				if ($_FILES['imagen']['type']=="image/png") {
					$ima=round(microtime(true)).'.jpg';
					$ruta="assets/file_usuario/user_".$ima;
					$origen=imagecreatefrompng($_FILES['imagen']['tmp_name']);
					$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
					imagecopyresampled($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
					imagepng($destino,$ruta);
					$imag="user_".$ima;
				}else{
					if ($_FILES['imagen']['type']=="image/gif") {
						$ima=round(microtime(true)).'.jpg';
						$ruta="assets/file_usuario/user_".$ima;
						$origen=imagecreatefromgif($_FILES['imagen']['tmp_name']);
						$destino=imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
						imagecopyresampled($destino, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
						imagegif($destino,$ruta);
						$imag="user_".$ima;
					}else{
						$imag='';
					}
				}
			}
			if ($imagen_a) {
				unlink("./assets/file_usuario/".$imagen_a);
			}
			$this->db->WHERE('id',$user_id);
			$this->db->update('dp_auth_users',array('imagen'=>$imag));
		}
	}
	public function validar_usuario(){
		$usu=$this->input->post('usu');
		$obj=$this->db->query("SELECT id FROM dp_auth_users WHERE username='$usu' ")->row();
		if ($obj) {
			echo json_encode(array(0 => 1));
		}else{
			echo json_encode(array(0 => 0));
		}
	}
	public function guardar_nuevo_usuario_pass(){
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$password=$this->input->post('password');
		$this->Ion_auth_model->guardar_nuevo_usuario_pass($id,$name,$password); 
	}












}
