<?php
class Modelo_estudiante extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('America/La_Paz');
	}
	public function eliminar_tabla_sys($tabla, $idtabla, $id)
	{
		$this->db->WHERE($idtabla, $id);
		$this->db->delete($tabla);
	}

	function RetornaUnRegistroDeUnaTablaDnum($tabla, $campo, $codRegistro, $query = '')
    {
        $sql = "SELECT * FROM $tabla WHERE $campo = '$codRegistro'   $query   ";
        //echo $sql;
        //return $this->db->query($sql)->row();
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            //return $query;
            return $query->num_rows();
        else
            return false;
    }

	public function editar_tabla_sys($tabla, $obj, $idtabla, $id)
	{
		$this->db->WHERE($idtabla, $id);
		$this->db->update($tabla, $obj);
	}

	public function mostrar_n($id)
	{
		//$id=$this->input->get('id');
		$this->db->where('id_capacitacion', $id);
		$que = $this->db->get('capacitacion');
		return $que->row();
	}
	public function insertar_tabla_sys($tabla, $obj)
	{
		$this->db->insert($tabla, $obj);
		return $this->db->insert_id();
	}

	public function update_tabla_sys($id_capacitacion, $nombre, $descripcion, $costo, $expositor, $fecha_inicio, $fecha_fin, $fecha_fin_insc, $fecha_inicio_insc, $imagen, $lugar, $hora, $estado, $ins_codigo)
	{
		$consulta = $this->db->query("UPDATE capacitacion SET nombre='$nombre',
													descripcion='$descripcion',
													
													costo='$costo',
													duracion='$duracion',
													expositor='$expositor',
													fecha_inicio='$fecha_inicio',
													
													fecha_fin='$fecha_fin',

													fecha_inicio_insc='$fecha_inicio_insc',
													fecha_fin_insc='$fecha_fin_insc',
													imagen='$imagen',

													lugar='$lugar',
													hora='$hora',
													estado='$estado',
													ins_codigo='$ins_codigo'
												 WHERE id_capacitacion=$id_capacitacion");
	}





	public function buscar_carnet($ci)
	{
		return $this->db->query("SELECT * FROM base_upea.vista_persona WHERE ci='$ci' ")->row();
	}
	public function buscar_carnet_persona($ci)
	{
		return $this->db->query("SELECT * FROM persona_exterior WHERE ci='$ci' ")->row();
	}
	public function validacion_certificado_codigo($codigo)
	{
		return $this->db->query("SELECT * FROM inscripcion 
		INNER JOIN base_upea.vista_persona on vista_persona.id=inscripcion.id_persona 
		WHERE ins_codigo='$codigo' 
		GROUP BY inscripcion.id_persona ")->row();
	}
	public function verificar_estudiante($id_estudiante, $id)
	{
		return $this->db->query("SELECT * FROM `inscripcion` WHERE id_persona='$id_estudiante' and id_capacitacion='$id' ")->row();
	}
	public function listar_estudiante_inscrito()
	{
		return $this->db->query("SELECT *,c.nombre curso,vista_persona.nombre persona  FROM `inscripcion` INNER JOIN base_upea.vista_persona on vista_persona.id=inscripcion.id_persona 
		inner join capacitacion c on c.id_capacitacion=inscripcion.id_capacitacion
		WHERE c.estado='1'
		ORDER BY id_inscripcion DESC ")->result();
	}
	function RetornaUnRegistroDeUnaTablaC($tabla, $campo, $codRegistro, $query = '')
	{
		$sql = "SELECT * FROM $tabla WHERE $campo = '$codRegistro' $query  ";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->num_rows();
		else
			return false;
	}
	public function listar_estudiante_cursos($query = '')
	{
		$date = date('Y-m-d');
		return $this->db->query("SELECT * FROM capacitacion
		 inner join seminario_detalle sem1 on  sem1.id_capacitacion = capacitacion.id_capacitacion
		   WHERE '$date' BETWEEN fecha_inicio AND fecha_fin and capacitacion.estado=1 $query ORDER BY fecha_inicio, hora ")->result();
	}
	public function listar_seminarios($query = '')
	{

		return $this->db->query("SELECT * FROM capacitacion
		 inner join seminario_detalle sem1 on  sem1.id_capacitacion = capacitacion.id_capacitacion
		   WHERE  capacitacion.estado=1 $query ORDER BY fecha_inicio, hora ")->result();
	}
	public function buscar_datos_fechas($fecha_i, $fecha_f)
	{
		return $this->db->query("SELECT * FROM `inscripcion` 
		INNER JOIN base_upea.vista_persona on vista_persona.id=inscripcion.id_persona
		WHERE inscripcion.ins_fecha_reg BETWEEN '$fecha_i' AND  '$fecha_f'
		GROUP BY inscripcion.id_persona ORDER BY idinscripciones DESC ")->result();
	}
	public function verificar_estudiante_inscrito($ci)
	{
		return $this->db->query("SELECT * FROM `inscripcion` 
		INNER JOIN base_upea.vista_persona on vista_persona.id=inscripcion.id_persona
		WHERE vista_persona.ci='$ci' GROUP BY inscripcion.id_persona ")->row();
	}
	public function verificar_persona_seminario($ci)
	{
		$sql = "SELECT * FROM base_upea.vista_persona   per
		INNER JOIN inscripcion ins on ins.id_persona=per.id
		WHERE per.ci='$ci'";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->result();
		else {
			$sql1 = "SELECT * FROM persona_exterior ext
	     	INNER JOIN inscripcion ins on ins.id_persona=ext.id
		    WHERE ext.ci='$ci'";
			$query = $this->db->query($sql1);
			if ($query->num_rows() > 0) {
				return $query->result();
			} else {
				return false;
			}
		}
	}

	public function imprimir_certificado($ci, $query = '')
	{
		$sql = "SELECT * FROM base_upea.vista_persona   per
		INNER JOIN inscripcion ins on ins.id_persona=per.id
		WHERE per.ci='$ci'";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row();
		else {
			$sql1 = "SELECT * FROM persona_exterior ext
	     	INNER JOIN inscripcion ins on ins.id_persona=ext.id
		    WHERE ext.ci='$ci'";
			$query = $this->db->query($sql1);
			if ($query->num_rows() > 0) {
				return $query->row();
			} else {
				return false;
			}
		}
	}

	function RetornaUnRegistroDeUnaTablaBD($tabla, $campo, $codRegistro, $query = '')
	{
		$sql = "SELECT * FROM $tabla WHERE $campo = '$codRegistro' $query  ";
		//echo $sql;exit;
		//return $this->db->query($sql)->row();
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row();
		else
			return false;
	}
	public function listar_estudiante_cursos1($tabla, $campo, $codRegistro, $query = '')
	{
		$sql = "SELECT * FROM $tabla
		 inner join seminario_detalle sem1 on  sem1.id_capacitacion = capacitacion.id_capacitacion
		   WHERE $tabla.$campo=$codRegistro and capacitacion.estado=1 $query ORDER BY fecha_inicio, hora ";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			return $query->row();
		else
			return false;
	}
	public function busquedageneral($tabla, $query)
	{
		$obj = $this->db->query("SELECT * from $tabla
		WHERE $query
		");
		if ($obj->num_rows()) {
			return $obj->row();
		} else {
			return false;
		}
	}
	public function login($ci, $fecha_nacimiento)
	{
		$originalDate =  $fecha_nacimiento;
		$fecha = date("Y-m-d", strtotime($originalDate));
		$sql = "SELECT * FROM users mae where mae.username = '$ci' ";
		/* var_dump($sql);
		die; */
		$query = $this->db->query($sql);
		if ($query->num_rows()) {
			return $query->row();
		} else {
			return false;
		}
	}
	function RetornaUnRegistroDeUnaTablaBDF($tabla, $campo, $codRegistro, $query = '')
	{
		$sql = "SELECT * FROM $tabla WHERE $campo = '$codRegistro'   $query   ";
		//echo $sql;
		//return $this->db->query($sql)->row();
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
			//return $query;
			return $query->result();
		else
			return false;
	}
	function RetornaUnaTabla($tabla)
    {
        $sql = "SELECT * FROM $tabla";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }
}
