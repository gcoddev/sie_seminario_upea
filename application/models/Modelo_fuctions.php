<?php

/** 
 * @author   
 * @version
 */
class Modelo_fuctions extends CI_Model
{

    protected $primary_key = null;
    protected $table_name = null;
    protected $relation = array();
    var $disbed;
    var $upea;
    var $base_upea;
    var $sharp;
    var $porfi;

    function __construct()
    {
        parent::__construct();
        //  $this->db = $this->load->database('sierudss', true);
    }
    public function estado_atencion($tabla, $campo, $codRegistro)
    {
        $date = date('Y-m-d');
        $sql = "SELECT * FROM $tabla WHERE $campo='$codRegistro'   and estado_ficha = 0 and fecha_registro = '$date' ||  estado_ficha = 1 and fecha_registro = '$date' ";
        /*    echo $sql;
        exit; */

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            //return $query;
            return $query->result();
        else
            return false;
    }
    function RetornaUnRegistroDeUnaTabla($tabla, $campo, $codRegistro, $query = '')
    {
        $sql = "SELECT * FROM $tabla WHERE $campo = '$codRegistro' $query  ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return false;
    }

    function RetornaUnRegistroDeUnaTablaF($tabla, $campo, $codRegistro, $query = '')
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
    function datos_fichas_atendidos($tabla, $campo, $codRegistro, $query = '')
    {
        $sql = "SELECT * FROM $tabla t
        INNER JOIN servicios_de_atencion ser on ser.id_servicios = t.id_servicio
        WHERE $campo = '$codRegistro'   $query   ";
        //echo $sql;
        //return $this->db->query($sql)->row();
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            //return $query;
            return $query->result();
        else
            return false;
    }

    function db_update($tabla, $datos_array, $con_id, $id)
    {
        $this->db->where($con_id, $id);
        return $this->db->update($tabla, $datos_array);
    }

    function db_insert($tabla, $datos_array)
    {
        $insert = $this->db->insert($tabla, $datos_array);
        if ($insert) {
            return $this->db->insert_id();
        }
        return false;
    }

    function db_delete($tabla, $datos_array)
    {
        $delete = $this->db->delete($tabla, $datos_array);
        if ($delete) {
            return $delete;
        }
        return false;
    }

    //regin
    function RetornaUnRegistroDeUnaTablaR($tabla, $campo, $codRegistro, $query = '')
    {
        //  $sql="SELECT * FROM $tabla WHERE $campo = '$codRegistro' $query  ";  // del cdesar
        $sql = "SELECT * FROM $tabla WHERE $campo = '$codRegistro' $query "; // del santos
        //echo $sql;exit;
        //return $this->db->query($sql)->row();
        $query = $this->db->query($sql); //upea
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return false;
    }

    function RetornaUnRegistroDeUnaTablaREdad($tabla, $campo, $codRegistro, $query = '')
    {
        $sql = "SELECT TIMESTAMPDIFF(YEAR, fecha_nac, CURDATE()) AS edad
        FROM $tabla WHERE $campo = '$codRegistro' $query  ";
        //echo $sql;exit;
        //return $this->db->query($sql)->row();
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return false;
    }

    //disbed
    function RetornaUnRegistroDeUnaTablaDF($tabla, $campo, $codRegistro, $query = '')
    {
        $sql = "SELECT * FROM $tabla WHERE $campo='$codRegistro'   $query   ";
        // echo $sql;exit;
        //return $this->db->query($sql)->row();
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            //return $query;
            return $query->result();
        else
            return false;
    }

    function RetornaUnRegistroDeUnaTablaD($tabla, $campo, $codRegistro, $query = '')
    {
        $sql = "SELECT * FROM $tabla WHERE $campo = '$codRegistro'   $query   ";
        //echo $sql;
        //return $this->db->query($sql)->row();
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            //return $query;
            return $query->row();
        else
            return false;
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

    function db_updateD($tabla, $datos_array, $con_id, $id)
    {
        $this->db->where($con_id, $id);
        return $this->db->update($tabla, $datos_array);
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

    /* trae una tabla simple */
    function RetornaRegistrosDeUnaTablaSimpe($tabla, $query)
    {
        $query = $this->db->query("SELECT * FROM $tabla WHERE $query");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function Revisar_documentos($tabla, $query)
    {
        $query = $this->db->query("SELECT * FROM $tabla dat INNER JOIN base_upea.vista_mae_matriculados mae on mae.id_estudiante= dat.id_estudiante    WHERE $query GROUP BY dat.id_estudiante");
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }


    function datos_estudiante_mae($id_estudiante)
    {

        $sql = " SELECT * FROM mae_estudiante 
       inner join mae_tipo_estudiante_matricula on mae_tipo_estudiante_matricula.id_estudiante = mae_estudiante.id_estudiante
       WHERE mae_estudiante.id_estudiante = '$id_estudiante'  ";
        //echo $sql;
        //return $this->db->query($sql)->row();
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            //return $query;
            return $query->result();
        else
            return false;
    }

    function datos_estudiante_general($id_estudiante)
    {
        $sql = " SELECT * FROM vista_datos_estudiantes WHERE id_estudiante = '$id_estudiante'  ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }

    function prueba($id_estudiante)
    {
        $sql = " SELECT
        datos_estudiante.direccion,
        datos_estudiante.telefono,
        datos_estudiante.estado,
         carrera.nombre,
        departamentos.nombre_departamento
           
        FROM
            datos_estudiante
        INNER JOIN carrera ON datos_estudiante.carrera = carrera.id
        INNER JOIN departamentos ON datos_estudiante.id_departamento= departamentos.id_departamento
        WHERE
            id_estudiante ='$id_estudiante' and datos_estudiante.estado = '1' ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
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
    function RetornaUnaTabladd($tabla, $query)
    {
        $sql = "SELECT * FROM $tabla WHERE $query";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }
    function lista_inscritos($id_seminario)
    {
        $sql = "SELECT * FROM inscripcion
         WHERE 	id_capacitacion ='$id_seminario'";
/* var_dump( $sql);
die; */
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    } 
    public function actualizar_datos_tabla($tabla,$datos,$campo,$campo_comparacion)
	{
		$this->db->where($campo, $campo_comparacion);
		return $this->db->update($tabla, $datos);
	}
    public function insertar_datos_tabla($tabla,$datos)
	{
		return $this->db->insert($tabla, $datos);
	}
    public function obtener_fila_tabla($tabla,$query)
	{
		$query = $this->db->query("SELECT * FROM $tabla WHERE $query");
		return $query->row();
	}
    public function obtener_lista_tabla($tabla,$query = '1')
	{
		$query = $this->db->query("SELECT * FROM $tabla where $query");
		return $query->result();
	}
    
}
