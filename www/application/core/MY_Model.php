<?php
class MY_Model extends CI_Model {
    public function getAllFromDb(string $table) {
        if ($this->db->table_exists($table)) {
            $query = $this->db->get($table);
            return $query->result();
        } else
            return null;
    }
}