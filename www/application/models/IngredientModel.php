<?php
class IngredientModel extends MY_Model {
    public function getAll() {
        return $this->getAllFromDb("ingredient");
    }

    public function get($name) {
        foreach ($this->db->select("ingredient.*")->from('ingredient')->where('name', $this->db->escape_str($name))->get()->result() as $row) {
            return $row;
        }
        return null;
    }

    public function insert($name) {
        if ($this->get($name) == null) {
            $data = array(
                'name' => $this->db->escape_str($name)
            );
            $this->db->insert('ingredient', $data);
        }
    }

    public function update($id, $name) {
        $data = array(
            'id' => $id,
            'name' => $this->db->escape_str($name)
        );
        $this->db->replace('ingredient', $data);
    }
}