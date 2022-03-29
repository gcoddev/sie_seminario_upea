<?php

class Mapping
{

    public static function map()
    {
        return [
            "1" => "auth@login",
            "2" => "auth@choice",
            "3" => "auth@logout",
           "7" => "admin/Admin@index",
 
 
             //migracion
            "10" => "migracion/Controlador_migracion@index",
            
             ///******RUTAS PROYECTO------------------------------
            "20" => "backend/dashboard@index",
            "21" => "Controller_estudiante@admin_inscripciones",
            "22" => "Controller_estudiante@reporte_inscripciones",
            "23" => "Controller_estudiante@imprimir_reporte_inscripciones",
            "24" => "Controller_estudiante@admin_cursos",
 
            "25" => "Controller_inscripcion@inscripcion",
            "26" => "Controller_inscripcion@buscar_carnet",
            "266" => "Controller_inscripcion@buscar_carnet_cert",
            "27" => "Controller_inscripcion@guardar_nuevo_inscripcion_estudiante",
            "28" => "Controller_inscripcion@validacion_certificado_codigo",
 
            "50" => "Controller_inscripcion@imprimir_certificado1",
            "51" => "Controller_inscripcion@imprimir_certificado2",
            "52" => "Controller_inscripcion@imprimir_certificado3",
            "53" => "Controller_inscripcion@imprimir_certificado4",
            "54" => "Controller_inscripcion@imprimir_certificado5",
 
            "55" => "Controller_inscripcion@imprimir_certificado6",
            "56" => "Controller_inscripcion@imprimir_certificado7",
            "57" => "Controller_inscripcion@imprimir_certificado8",
 
            "58" => "Controller_inscripcion@detalles_seminario",
 
            "59" => "Controller_inscripcion@buscar_persona",
            "61" => "Controller_inscripcion@detales_seminario1",
            "60" => "admin/Admin@index",
            "62" => "Controller_inscripcion@buscar_carnet_cert1",
            "63" => "Controller_inscripcion@imprimir_certificado2",
            "64" => "auth@usuarios",
            "65" => "Controller_inscripcion@usuarios_datos",
            "66" => "backend/Dashboard@lista_participantes",
            "67" => "Controller_inscripcion@insertar_usuario",
        ];
    }

    public static function menus()
    {

        $ion = new Ion_auth();
        if ($ion->in_group('members')) {
            $data["members"]["Te perdiste!!!"] = "00000";
        }

        if ($ion->in_group('admin')) {
            $data = [
                "Administracion" => [
                    "Inicio" => "20",
                    "Usuario" => "21",
                    "Seguridad grupo" => "22",
                    "Mantenimiento" => "23",
                ],

                "Estudiantes" => [
                    "Inscripciones" => "58",
                    "certificaciones" => "51",
                    "Avance Academico" => "56",

                ],
                "Docentes" => [
                    "LLenado Notas" => "42",

                ],

                "Busqueda" => [
                    "Personas" => "100",
                    "Consultas" => "101",

                ],
                "Configuraciones" => [
                    "Habilitar Inscripciones" => "140",
                    "Habilitar llenado Notas" => "141",
                    "Habilitar Gestiones" => "142",
                    "Mencion Estudiantes" => "170",
                    "Generar Num folios de libro" => "450",

                ],

                /*    "Estadisticas" => [
    			"Lista de estudiantes por materia" => "120",
    			"Lista de estudiantes de carrera" => "121",
    			"Lista de certificaciones" => "121",

    		],*/

                "Plan Estudios" => [
                    "Pensum" => "91",
                    "Mension" => "95",
                    "Asignatura" => "99",
                    "Asignatura Mension" => "301",

                ],
                "REPORTES" => [
                    "Tipo de reportes" => "210",
                    // "Lista inscrito por materia" => "210",
                    // "Lista de estudiantes de carrera" => "211",
                    // "datos de calificacion gestion " => "212",

                ],


                "Opciones" => ["Migracion" => "10", "Salir" => "4",],


            ];
        }



        ////////////////////////////////**************************************///////////////////////////////////////
        if ($ion->in_group('kardixta')) {
            $data = [
                "Administracion Usuarios" => [
                    //       "Inicio" =>"20",
                    "Usuario" => "21",
                ],

                "Busqueda" => [
                    "Personas" => "100",
                    "Consultas" => "101",
                ],
                "Configuraciones" => [
                    "Habilitar Inscripciones" => "140",
                    "Habilitar llenado Notas" => "141",
                    "Habilitar Gestiones" => "142",
                    "Generar Num folios de libro" => "450",
                    "Mencion Estudiantes" => "170",
                ],

                "Reportes" => [
                    "Tipo de reportes" => "210",
                    "Reportes planificacion" => "600",
                    "Desde Fundacion" => "130",
                    "Egresados" => "131",
                    "Mejor Estudiante" => "132",
                    // "Lista inscrito por materia" => "210",
                    // "Lista de estudiantes de carrera" => "211",
                    // "datos de calificacion gestion " => "212",
                    "cpi actas calificacion detalle " => "135",

                ],

                "Plan Estudios" => [
                    "Asignatura Mension V2" => "309",
                    "Prerrequisitos" => "350",
                    "Convalidaciones" => "360",
                    "Mension" => "95",

                ],

                "Opciones" => ["Salir" => "4",],


            ];
        }

        ////////////////////////////////**************************************///////////////////////////////////////
        if ($ion->in_group('docente')) {
            $data["docente"]["LLenado Notas"] = "42";
        }

        ////////////////////////////////**************************************///////////////////////////////////////
        if ($ion->in_group('estudiante')) {
            $data["estudiante"]["Inscripciones"] = "58";
            $data["estudiante"]["Certificaciones"] = "51";
            $data["estudiante"]["Avance Academico"] = "56";
            $data["estudiante"]["Entrega documentacion digital"] = "1300";
        }




        return $data;
    }


    ////   MENUS DE SANTOS LIMACHI
    ////   MENUS DE SANTOS LIMACHI


    public static function iconn()
    {
        $vec_iconos = array(
            'dashboard',
            'person',
            'search',
            'settings',
            'assignment',
            'input',
            'assignment',
            'notifications',
            'mail_outline',
            'search',
            'place',
            'favorite',
            'image',
            'grid_on',
            'more_vert',
            'view_list',
            'view_list',
            'view_list',
            'view_list',
            'view_list',
            'view_list',
            'view_list',
            'view_list',

        );
        return $vec_iconos;
    }
}
