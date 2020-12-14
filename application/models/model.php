<?php 

Class model extends CI_model {

        public function get_last_ten_entries($tabel)
        {
                return $this->db->get('tabel');
        }

} 

?>