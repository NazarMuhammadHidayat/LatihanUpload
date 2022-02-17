<?php
    class M_profile extends CI_model{

        function tampil_data(){
            return $this->db->get('tabel_siswa');
        }

        function get_data_by_id($id){
            $this->db->where($id);
            return $this->db->get('tabel_siswa');
        }

    }
?>    