<?php

class Modelo_users_groups extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function retornar() {
        $res = $this->db->query("SELECT * FROM users_groups")->row();
        print_r($res);
    }


    public function insertar($user_group, $id2) {
        // print_r($user_group);
        

        if (isset($user_group['grupo_1'])) {
            $dato1 = array(
                'user_id' => $id2,
                'group_id' => $user_group['grupo_1']
            );
            $this->db->insert('users_groups', $dato1);
        }
        if (isset($user_group['grupo_2'])) {
            $dato2 = array(
                'user_id' => $id2,
                'group_id' => $user_group['grupo_2']
            );
            $this->db->insert('users_groups', $dato2);
        }
        if (isset($user_group['grupo_3'])) {
            $dato3 = array(
                'user_id' => $id2,
                'group_id' => $user_group['grupo_3']
            );
            $this->db->insert('users_groups', $dato3);
        }
        if (isset($user_group['grupo_4'])) {
            $dato4 = array(
                'user_id' => $id2,
                'group_id' => $user_group['grupo_4']
            );
            $this->db->insert('users_groups', $dato4);
        }
    }
}