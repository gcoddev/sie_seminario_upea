<?php

class Modelo_administrador extends CI_Model
{



    function __construct()
    {
        parent::__construct();
    }
    function RetornaRegistrosDeUnaTablaSimpe($tabla, $quer)
    {
        $sql = ("SELECT * FROM $tabla WHERE $quer");
        /*   echo ($sql);
        exit; */
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function carreras($tabla)
    {
        $sql = ("SELECT * FROM $tabla");
        /*   echo ($sql);
        exit; */
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function especialidad_masdoctor($quer)
    {
        $sql = ("SELECT * FROM especialidades es INNER JOIN doctores doc on es.id_doctor = doc.id_doctor  WHERE $quer");
        /*   echo ($sql);
        exit; */
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function RetornaRegistrosDeUnaTablaSimpenum($tabla)
    {
        $sql = ("SELECT * FROM $tabla");
        /*   echo ($sql);
        exit; */
        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }
    function cambiar_estado($tabla1, $id_tab, $estado_ta, $id, $estado)
    {
        //$sql="SELECT * FROM dp_auth_groups WHERE 1";
        if ($estado == 1) {
            $query = $this->db->query("UPDATE $tabla1 SET $estado_ta = 0 WHERE $id_tab = " . $id . ";");
        } else {
            $query = $this->db->query("UPDATE $tabla1 SET $estado_ta = 1 WHERE $id_tab = " . $id . ";");
        }
        return $query;
    }

    function RetornaRegistrosDeDosTablasUnido($tabla, $tabla2, $quer)
    {
        $sql = ("SELECT * FROM $tabla se INNER JOIN $tabla2 e on se.CodEspecialidad= e.id_especialidades INNER JOIN gestion ge on se.Gestion = ge.id_gestion  WHERE $quer");
        /*   echo ($sql);
        exit; */

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function RetornaUnaTabla($tabla)
    {
        $sql = ("SELECT * FROM $tabla");
        /*   echo ($sql);
        exit; */

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function retorna_valoracion($tabla)
    {
        $sql = ("SELECT 
	* 
FROM 
	item_rating ra 
	inner join datos_estudiante dat on ra.id_user = dat.id_datos 
	join base_upea.vista_mae_matriculados mae on dat.id_estudiante = mae.id_estudiante
    GROUP BY ra.id_notificacion");
        /*   echo ($sql);
        exit; */

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function listar_servicios($tabla, $tabla2, $quer)
    {
        $date = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM $tabla se INNER JOIN $tabla2 e on se.CodEspecialidad= e.id_especialidades INNER JOIN gestion ge on se.Gestion = ge.id_gestion WHERE '$date' BETWEEN Fecha_inicio AND FechaFin ");
        return $query->result();
    }
    function select_sintomas()
    {
        $sql = "SELECT * FROM sintomas";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->result();
        else
            return false;
    }

    function listar($tabla)
    {
        $result = $this->db->get($tabla);
        if ($result->num_rows() > 0) {
            return $result->result();
        } else
            return false;
    }
    public function eliminar1($tabla, $id_tabla, $id)
    {
        $this->db->where($id_tabla, $id);
        return $this->db->delete($tabla);
    }
    function db_delete($tabla, $datos_array)
    {
        $delete = $this->db->delete($tabla, $datos_array);
        if ($delete) {
            return $delete;
        }
        return false;
    }
    function db_updateD($tabla, $dato2, $con_id, $id)
    {
        $this->db->where($con_id, $id);
        return $this->db->update($tabla, $dato2);
    }

    function db_insert($tabla, $datos_array)
    {
        $insert = $this->db->insert($tabla, $datos_array);
        if ($insert) {
            return $this->db->insert_id();
        }
        return false;
    }
    function buscar_persona($buscar)
    {

        $sql = "SELECT * FROM sierudss.datos_estudiante INNER JOIN base_upea.vista_mae_matriculados 
        ON sierudss.datos_estudiante.id_estudiante = base_upea.vista_mae_matriculados.id_estudiante 
        /* left JOIN base_upea.sede ON sierudss.datos_estudiante.sede_carrera = base_upea.sede.id  */
        WHERE sierudss.datos_estudiante.CI = $buscar Group by sierudss.datos_estudiante.id_datos";
        /*   echo $sql;
        exit; */
        /*    $sql = "SELECT * FROM datos_estudiante dat WHERE ci LIKE '%$buscar%' INNER JOIN base_upea.persona per  on dat.id_estudiante = per.id ";
       */
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    function datos_general_est($buscar)
    {

        $sql = "SELECT * FROM sierudss.datos_estudiante 
        INNER JOIN base_upea.vista_datos_estudiantes 
        ON sierudss.datos_estudiante.id_estudiante = base_upea.vista_datos_estudiantes.id_estudiante 
         INNER JOIN sierudss.sintomas
        ON sierudss.datos_estudiante.sintoma = sierudss.sintomas.id_sintoma 
          INNER JOIN sierudss.enfermedades
        ON sierudss.datos_estudiante.id_enfermedad = sierudss.enfermedades.id_enfermedad
        WHERE sierudss.datos_estudiante.id_estudiante = $buscar ";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function retorna_notifica($query = '')
    { {
            $sql = "SELECT * FROM notificaciones n 
            INNER JOIN datos_estudiante dat on dat.id_datos=n.id_datos
            INNER JOIN base_upea.vista_mae_matriculados ve 
ON ve.id_estudiante = dat.id_estudiante $query GROUP BY n.comentario";
            /*  echo $sql;
            exit; */
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return false;
            }
        }
    }

    function RetornaUnRegistroDeUnaTablanot($tabla, $campo, $codRegistro, $id_persona, $query = '')
    {
        $sql = "SELECT * FROM $tabla n inner join base_upea.vista_mae_matriculados p on p.id_estudiante= $id_persona  WHERE n.$campo = '$codRegistro' $query GROUP BY n.comentario  ";
        /*     echo $sql;
        exit; */

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return false;
    }
    function RetornaUnRegistroDeUnaTabla($tabla, $campo, $codRegistro, $query = '')
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

    function RetornaUnRegistroDeUnaTablaC($tabla, $campo, $codRegistro, $query = '')
    {
        $sql = "SELECT * FROM $tabla WHERE $campo = '$codRegistro' $query  ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->num_rows();
        else
            return false;
    }

    function retorna_puntaje($id_beneficio_requisito)
    {
        $sql = "SELECT * FROM n_puntaje_postulacion WHERE id_beneficio_requisito = '$id_beneficio_requisito' ";
        //echo $sql;exit;
        //return $this->db->query($sql)->row();
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0)
            return $query->row();
        else
            return false;
    }

    function db_update($tabla, $datos_array, $con_id, $id)
    {

        $this->db->where($con_id, $id);
        return $this->db->update($tabla, $datos_array);
    }

    //funcional1
    function BuscarPersona($buscar, $ci = '')
    {
        if (!empty($buscar)) {
            $buscar = "WHERE ci LIKE '$buscar%' OR paterno LIKE '$buscar%' OR materno LIKE '$buscar%' OR nombres LIKE '$buscar%'";
        }
        if (!empty($ci)) {
            $ci = "WHERE ci = '$ci'";
        }
        $query = $this->db->query("select id CodPersona, ci, paterno, materno, nombre nombres
									from base_upea.persona per
										inner join base_upea.mae_estudiante est on est.id_estudiante=per.id
									{$buscar} {$ci}
                                      ORDER BY per.paterno, per.materno, per.nombre LIMIT 0,14");
        return $query->result();
    }

    //funcional 1 
    //funcional 2
    function BuscarPersonaCi($codPer, $paralela = '')
    {
        $caso = '';
        if (!empty($paralela))
            $caso = "and carrera_id='$paralela' ";
        $sql = "SELECT p.id CodPersona, mae.carrera_id CodCarrera, CONCAT_WS(' ', p.paterno, p.materno, p.nombre) AS Nombre, 
        CONCAT_WS(' ', p.ci, p.expedido) AS CI, mae.registro_universitario RegUniversitario, mae.carrera AS NombreCarrera
        FROM base_upea.persona p
        INNER JOIN base_upea.vista_mae_matriculados mae ON mae.id_estudiante=p.id
        WHERE p.id=$codPer $caso
		ORDER BY mae.gestion DESC
        LIMIT 0,1";
        return $this->db->query($sql);
    }



    public function insertar_persona($datos = array())
    {
        $this->db->insert("beca", $datos);
        return true;
    }



    public function insertar_datos($tabla, $datos = array())
    {
        $this->db->insert($tabla, $datos);
        return true;
        return $this->db->insert_id();
    }

    function modificar_datos($tabla, $datos_array, $con_id, $id)
    {
        $this->db->where($con_id, $id);
        return $this->db->update($tabla, $datos_array);
    }
}
